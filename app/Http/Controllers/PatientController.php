<?php



namespace App\Http\Controllers;



use App\Models\Product;

use Illuminate\Http\Request;



class PatientController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $user_patients = DB::table('users')
        ->join('patients', 'users.id', '=', 'patients.user_id')
        ->where('status', '=', 1)
        ->select('users.*', 'patients.*')
        ->paginate(5);

        return view('admin.patients.index',compact('user_patients'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

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
            'f_name'=> 'required',
            'l_name'=> 'required',
            'house_no'=> 'required',
            'street_no'=> 'required',
            'city'=> 'required',
            'tel_no'=> 'required',
            'nic'=> 'required',
            'age'=> 'required',
            'email'=> 'required',
            'password' => 'required|string|min:8|confirmed',

        ]);

        $user = new User;

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $patient = new patient;

        $patient->house_no = $request->house_no;
        $patient->street_no = $request->street_no;
        $patient->city = $request->city;
        $patient->tel_no = $request->tel_no;
        $patient->nic = $request->nic;
        $patient->age = $request->age;

        $user->patient()->save($patient);

        $user->assignRole('patient');

        return redirect()->route('patient.index')
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
        $patient=patient::find($id);
        $p_user=$patient->user;

        return view('admin.patient.show',compact('patient','p_user'));

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
            'f_name'=> 'required',
            'l_name'=> 'required',
            'email'=> 'required',
            'tel_no'=> 'required',
        ]);

        $user = User::find($id);

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;

        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }else{
            $user = Arr::except($user, ['password']);

        }

        $user->update();

        $patient = new Patient;

        $patient->house_no = $request->house_no;
        $patient->street_no = $request->street_no;
        $patient->city = $request->city;
        $patient->tel_no = $request->tel_no;
        $patient->nic = $request->nic;
        $patient->age = $request->age;

        $user->parent()->update($patient->toArray());

        return redirect()->route('patient.index')
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
        $user = User::find($id);

        $user->patient()->delete();
        $user->delete();

        return redirect()->route('patients.index')
        ->with('success','Patient deleted successfully');
    }

}
