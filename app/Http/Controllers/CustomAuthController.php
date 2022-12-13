<?php

namespace App\Http\Controllers;

use session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
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
        /*$patient->p_f_name=$request->p_f_name;
        $patient->p_l_name=$request->p_l_name;
        $patient->email=$request->email;
        $patient->username=$request->username;
        $patient->password=Hash::make($request->password);
        $patient->house_no=$request->house_no;
        $patient->street_no=$request->street_no;
        $patient->city=$request->city;
        $patient->p_telno=$request->p_telno;
        $patient->age=$request->age;
        $patient->nic=$request->nic;
        $patient->save();
        return redirect()->route('customauth.index');

        $this->validate($request,[
            'username'=>'required|max:100|min:5',
            'email'=>'required|email|unique:patients',
            'password' => ['required','string', 'min:8'],
        ]);*/
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

    public function loginUser(){
        return view(CustomAuth.login);
        $request -> validate([
            'username'=>'requred|username|unique:users',
            'password'=>'required|min:5|max:12',
        ]);

        $user=User::where('username','=',$request->uername)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password incorrect!');
            }
        }else{
            return back()->with('fail','This username is not registered');
        }
        return redirect()->route('customauth.index');
    }

    public function signup(){
        return view(CustomAuth.signup);
    }
}
