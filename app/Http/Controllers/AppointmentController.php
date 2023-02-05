<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment_doctors = DB::table('appoinrments')
        ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
        ->join('patients', 'appointments.patient_id', '=', 'patients.id')
        ->join('schedules', 'appointments.schedule_id', '=', 'schedules.id')
        ->select('appointments.*' ,'schedules.*','patients.*', 'doctors.*');
        //->paginate(10);
        //$appointments = Appointment::get();
         //dd($appointments);

         //$drugs=User::find(Auth::id())->patient->drugs;

        return view('admin.appointments.index',compact('appointment_doctors'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.appointments.create');
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
            'patient_id'=>'required',
            'doctor_name'=>'required',
            'date'=>'required',
            'available_time'=>'required',
            'problem'=>'required',
        ]);

        $appointment = new Appointment;

        $appointment->patient_id=$request->patient_id;
        $appointment->doctor_id=$request->doctor_name;
        $appointment->date=$request->date;
        $appointment->time=$request->available_time;
        $appointment->problem=$request->problem;

        $appointment->save();

        return redirect()->route('appointments.index')
                            ->with('success','Appointment saved successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment=Appointment::find($id);
        $app=$appointment->appointment;

        return view('admin.appointments.show',compact('appointment','app'));
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
    {
        request()->validate([
            'id'=>'required',
            'doctor_name'=>'required',
            'date'=>'required',
            'available_time'=>'required',
            'problem'=>'required',
        ]);

        $appointment = new Appointment;

        $appointment->patient_id=$request->id;
        $appointment->doctor_id=$request->doctor_name;
        $appointment->date=$request->date;
        $appointment->time=$request->available_time;
        $appointment->problem=$request->problem;

        $appointment->update();

        return redirect()->route('appointments.index')
                            ->with('success','Appointment updated successfully.');
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
}
