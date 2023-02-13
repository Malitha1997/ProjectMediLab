<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
  //  protected $redirectTo = RouteServiceProvider::HOME;
        protected function redirectTo()
        {
           $role = auth::user()->getRoleNames();

            if($role[0] == 'Admin'){
                return '/dashboard';
            }
            elseif($role[0] == 'Patient'){
                return '/patientDashboard';
            }
            elseif($role[0] == 'Doctor'){
                return '/doctorDashboard';
            }
            elseif($role[0] == 'Lab assistant'){
                return '/labassistantDashboard';
            }
            return '/home';
        }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


   // use Auth,Session;
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

    // public function login(Request $request){
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         //return redirect()->route('dashboard');
    //     }

    //     return redirect("login")->withSuccess('Login details are not valid');

    // }


}
