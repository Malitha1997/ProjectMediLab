<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'f_name' => ['required', 'string', 'max:255'],
            'l_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'house_no'=> ['required','string', 'max:255'],
            'street_no'=> ['required','string', 'max:255'],
            'city'=> ['required','string', 'max:255'],
            'telno'=> ['required','string', 'max:10'],
            'nic'=> ['required','string', 'max:10'],
            'blood_group'=> ['required','string'],
            'age'=> ['required','string'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'f_name' => $data['f_name'],
            'l_name' => $data['l_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return Patient::create([
            'house_no'=> $data['house_no'],
            'street_no'=> $data['street_no'],
            'city'=> $data['city'],
            'blood_group'=> $data['blood_group'],
            'age'=> $data['age'],
            'telno'=> $data['telno'],
            'nic'=> $data['nic']
        ]);
    }
}
