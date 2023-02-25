<?php



namespace App\Http\Controllers;



use App\Models\User;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class DoctorController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         /*$this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);

         $this->middleware('permission:product-create', ['only' => ['create','store']]);

         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:product-delete', ['only' => ['destroy']]);*/

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        $user_doctors = DB::table('users')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->select('users.*' ,'users.id as usr_id', 'doctors.*')
        ->paginate(10);

        return view('admin.doctors.index',compact('user_doctors'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('admin.doctors.create');
    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {
        request()->validate([
            'f_name'=> 'required|string|min:1|max:255',
            'l_name'=> 'required|string|min:1|max:255',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'telno'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'password' => 'required|same:confirm-password',
            'address_line1'=> 'required',
            'address_line2'=> 'required',
            'address_line3'=> 'required',
            'nic'=> 'required|min:9|max:12',
            'age'=> 'required|numeric|min:1|max:120',
            'speciality'=>'required',
            'qualification'=>'required'
        ]);

        $user = new User;

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $doctor = new Doctor;

        $doctor->address_line1 = $request->address_line1;
        $doctor->address_line2 = $request->address_line2;
        $doctor->address_line3 = $request->address_line3;
        $doctor->telno = $request->telno;
        $doctor->nic = $request->nic;
        $doctor->age = $request->age;
        $doctor->qualification = $request->qualification;
        $doctor->speciality = $request->speciality;

        $user->doctor()->save($doctor);

        $user->assignRole('doctor');

        return redirect()->route('doctors.index')
                        ->with('success','Doctor created successfully.');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
        $user=User::find($id);
        $duser=$user->user;

        return view('admin.doctors.show',compact('user','duser'));
    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {
        $doctor=Doctor::find($id);
        return view('admin.doctors.edit',compact('doctor'));
    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {
        request()->validate([
            'f_name'=> 'required|string|min:1|max:255',
            'l_name'=> 'required|string|min:1|max:255',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'telno'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'password' => 'required|same:confirm-password',
            'address_line1'=> 'required',
            'address_line2'=> 'required',
            'address_line3'=> 'required',
            'nic'=> 'required|min:9|max:12',
            'age'=> 'required|numeric|min:1|max:120',
            'speciality'=>'required',
            'qualification'=>'required'
        ]);

        $user = User::find($id);

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->update();

        $doctor = new Doctor;

        $doctor->telno = $request->telno;
        $doctor->address_line1 = $request->address_line1;
        $doctor->address_line2 = $request->address_line2;
        $doctor->address_line3 = $request->address_line3;
        $doctor->nic = $request->nic;
        $doctor->age = $request->age;
        $doctor->qualification = $request->qualification;
        $doctor->speciality = $request->speciality;

        $user->doctor()->update($doctor->toArray());

        return redirect()->route('doctors.index')
                        ->with('success','Doctor updated successfully.');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    { //dd($id); 

        $user = User::find($id);

        $user->doctor()->delete();
        $user->delete();

        return redirect()->route('doctors.index')
        ->with('success','Doctor deleted successfully');
    }

    public function patientIndex(Request $request)

    {
        $user_doctors = DB::table('users')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->select('users.*' ,'users.id as usr_id', 'doctors.*')
        ->paginate(10);

        return view('patient.doctors.index',compact('user_doctors'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function doctorShow($id)

    {
        $user=User::find($id);
        $duser=$user->user;

        return view('doctor.doctors.show',compact('user','duser'));
    }

    public function labassistantIndex(Request $request)

    {
        $user_doctors = DB::table('users')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->select('users.*' ,'users.id as usr_id', 'doctors.*')
        ->paginate(10);

        return view('Lab Assistant.doctors.index',compact('user_doctors'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function doctorIndex(Request $request)

    {
        $user_doctors = DB::table('users')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->select('users.*' ,'users.id as usr_id', 'doctors.*')
        ->paginate(10);

        return view('Doctor.doctors.index',compact('user_doctors'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function appointmentIndex(Request $request)
    {

        $user_doctors = Doctor::with('user')->paginate(10);

        return view('admin.appointments.create',compact('user_doctors'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function patientShow($id)

    {
        $user=User::find($id);
        $duser=$user->user;

        return view('patient.doctors.show',compact('user','duser'));
    }


}
