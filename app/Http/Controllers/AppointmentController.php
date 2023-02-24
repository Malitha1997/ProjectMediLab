<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\DemoMail;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $appointment = Appointment::paginate(10);

        return view('admin.appointments.index', compact('appointment'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appointments.booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        request()->validate([
            'patient_name'=>'required',
            'doctor_id'=>'required',
            'schedule_id'=>'required',
            'time'=>'required',
            'description'=>'required',

        ]);
        //dd($request);

        $appointment = new Appointment;

        $appointment->patient_id=$request->patient_name;
        $appointment->doctor_id=$request->doctor_id;
        $appointment->schedule_id=$request->schedule_id;
        $appointment->time=$request->time;
        $appointment->description=$request->description;


        $appointment->save();

        $email=$request->patient->email;

        $mailData = [

            'title' => 'Mail from Medilab',

            'body' => 'Your appointment successfully created!'

            ];

            Mail::to($email)->send(new DemoMail($mailData,$email));

        return redirect()->route('appointments.index')
                            ->with('success','Appointment created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointments=Appointment::get();

        return view('admin.appointments.show',compact('appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment=Appointment::find($id);
        return view('admin.appointments.edit',compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {//dd($request);
        request()->validate([
            'patient_name'=>'required',
            'doctor_name'=>'required',
            'date'=>'required',
            'time'=>'required',
            'description'=>'required',
        ]);

        $appointment = new Appointment;
//dd($appointment);
        $appointment->patient_id=$request->patient_name;
        $appointment->doctor_id=$request->doctor_name;
        $appointment->date=$request->date;
        $appointment->time=$request->time;
        $appointment->description=$request->description;

        $appointment->update();

        return redirect()->route('appointments.index')
                            ->with('success','Appointment created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$doctor = Doctor::find($id);

        $doctor->schedules()->delete();
        $doctor->delete();

        return redirect()->route('appointments.index')
        ->with('success','Appointment deleted successfully');*/
    }

    public function livesearch(Request $request)
    { //dd('hi');
        $query = $request->get('query');
          $users = User::where('f_name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());


          foreach($users as $user){
            if($user->doctor != null){

             $response[] = array("value"=>$user->doctor->id,"label"=>$user->f_name);

                }
            }

          return response()->json($response);

    }

    public function livesearch2(Request $request)
    { //dd('hi');
        $query = $request->get('query');
          $users = User::where('f_name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());


          foreach($users as $user){
            if($user->patient != null){

             $response[] = array("value"=>$user->patient->id,"label"=>$user->f_name);

                }
            }

          return response()->json($response);

    }


    public function patientCreate(Request $request)
    {
        $user_doctors = Doctor::with('user')->paginate(10);

        return view('patient.appointments.create',compact('user_doctors'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function booking($id){

        $doctor=Doctor::find($id);
        $schedule=$doctor->schedules;
        //dd($schedule);

        return view('admin.appointments.booking', compact('schedule','doctor'));
    }

    public function patientBooking($id){

        $doctor=Doctor::find($id);
        $schedule=$doctor->schedules;
        //dd($doctor);

        return view('patient.appointments.booking', compact('schedule','doctor'));
    }

    public function doctorIndex(Request $request)
    {
        $appointment_users = DB::table('appointments')
        ->join('users as doctors', 'appointments.doctor_id', '=', 'doctors.id')
        ->join('users as patients', 'appointments.patient_id', '=', 'patients.id')
        ->join('schedules', 'appointments.schedule_id', '=', 'schedules.id')
        ->select('appointments.*', 'doctors.*', 'patients.*', 'schedules.*')
        ->paginate(10);

        return view('doctor.appointments.index', compact('appointment_users'));

    }
}
