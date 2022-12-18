<?php



namespace App\Http\Controllers;



use App\Models\User;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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

    public function index()

    {
        $user_doctors = DB::table('users')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->select('users.*', 'doctors.*')
        ->paginate(5);

        return view('admin.doctors.index',compact('user_doctors'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

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
            'f_name'=> 'required',
            'l_name'=> 'required',
            'email'=> 'required',
            'tel_no'=> 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User;

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $doctor = new Doctor;

        $doctor->house_no = $request->house_no;
        $doctor->street_no = $request->street_no;
        $doctor->city = $request->city;
        $doctor->tel_no = $request->tel_no;
        $doctor->nic = $request->nic;
        $doctor->age = $request->age;
        $doctor->qualification = $request->qualification;
        $doctor->specialization = $request->specialization;


        $user->doctor()->save($doctor);

        $user->assignRole('doctor');

        return redirect()->route('doctor.index')
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
        $doctor=Doctor::find($id);
        $duser=$doctor->user;

        return view('admin.doctors.show',compact('doctor','duser'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

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
            'f_name'=> 'required',
            'l_name'=> 'required',
            'email'=> 'required',
            'tel_no'=> 'required',


        ]);

        $user = User::find($id);

        $user->f_name = $request->f_name;
        $user->email = $request->email;

        $user->update();

        $doctor = new Doctor;

        $doctor->tel_no = $request->tel_no;
        $patient->house_no = $request->house_no;
        $patient->street_no = $request->street_no;
        $patient->city = $request->city;
        $doctor->nic = $request->nic;
        $doctor->age = $request->age;
        $doctor->qualification = $request->qualification;
        $doctor->specialization = $request->specialization;

        return redirect()->route('doctor.index')
                        ->with('success','Doctor created successfully.');
    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $user = User::find($id);

        $user->doctor()->delete();
        $user->delete();

        return redirect()->route('doctor.index')
        ->with('success','Doctor deleted successfully');
    }

}
