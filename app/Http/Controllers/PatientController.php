<?php



namespace App\Http\Controllers;



use App\Models\User;

use App\Mail\DemoMail;
use App\Models\Patient;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



class PatientController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        $user_patients = DB::table('users')
        ->join('patients', 'users.id', '=', 'patients.user_id')
        ->select('users.*','users.id as usr_id', 'patients.*')
        ->paginate(10);

        return view('admin.patients.index',compact('user_patients'))
        ->with('i', ($request->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('admin.patients.create');

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
            'f_name' => 'required', 'string', 'alpha', 'max:255','min:1',
            'l_name' => 'required', 'string', 'alpha', 'max:255','min:1',
            'address_line1'=> 'required',
            'address_line2'=> 'required',
            'address_line3'=> 'required',
            'telno'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'nic'=> 'required|min:10|max:12',
            'blood_group'=> 'required',
            'age'=> 'required|numeric|min:1|max:120',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'password' => 'required|same:confirm-password',

        ]);

//dd($request);
        $user = new User;

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $patient = new Patient;

        $patient->address_line1 = $request->address_line1;
        $patient->address_line2 = $request->address_line2;
        $patient->address_line3 = $request->address_line3;
        $patient->telno = $request->telno;
        $patient->blood_group = $request->blood_group;
        $patient->nic = $request->nic;
        $patient->age = $request->age;


        $user->patient()->save($patient);

        $user->assignRole('patient');

        return redirect()->route('patients.index')
                            ->with('success','Patient created successfully.');


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
        $p_user=$user->patient;

        return view('admin.patients.show',compact('user','p_user'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {
        $patient=Patient::find($id);

        return view('admin.patients.edit',compact('patient'));
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
            'f_name' => 'required', 'string', 'alpha', 'max:255','min:1',
            'l_name' => 'required', 'string', 'alpha', 'max:255','min:1',
            'address_line1'=> 'required',
            'address_line2'=> 'required',
            'address_line3'=> 'required',
            'telno'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'nic'=> 'required|min:10|max:12',
            'blood_group'=> 'required',
            'age'=> 'required|numeric|min:1|max:120',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'password' => 'required|same:confirm-password',

        ]);

        $user = new User;

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->update();

        $patient = new Patient;

        $patient->address_line1 = $request->address_line1;
        $patient->address_line2 = $request->address_line2;
        $patient->address_line3 = $request->address_line3;
        $patient->telno = $request->telno;
        $patient->blood_group = $request->blood_group;
        $patient->nic = $request->nic;
        $patient->age = $request->age;

        $user->patient()->update($patient->toArray());

        return redirect()->route('patients.index')
                            ->with('success','Patient updated successfully.');


    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

     public function destroy($id)
     {
        //dd($id);
         $user = User::find($id);

         $user->patient()->delete();
         $user->delete();

         return redirect()->route('patients.index')
         ->with('success','Patient deleted successfully');
     }




}
