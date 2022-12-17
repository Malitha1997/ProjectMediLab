<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient=new Patient;

        $this->validate($request,[
            'username'=>'required|max:100|min:5',
            'email'=>'required|email|unique:patients,email',
            'password' => ['required','string', 'min:8'],
        ]);

        $patient->p_f_name=$request->p_f_name;
        $patient->p_l_name=$request->p_l_name; 
        $patient->p_email=$request->p_email;
        $patient->p_username=$request->p_username;
        $patient->p_password=Hash::make($request->p_password);
        $patient->house_no=$request->house_no;
        $patient->street_no=$request->street_no;
        $patient->city=$request->city;
        $patient->p_telno=$request->p_telno;
        $patient->age=$request->age;
        $patient->nic=$request->nic;
        $patient->save();
        return redirect()->route('signup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
