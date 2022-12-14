<?php

use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminDashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('Home.home');
})->name('home1');

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/add_bill', function () {
    return view('add_bill');
});

Route::get('/add_appointment', function () {
    return view('add_appointment');
});

Route::get('/add_doctor', function () {
    return view('add_doctor');
});

Route::get('/add_patient', function () {
    return view('add_patient');
});

Route::get('/add_packege', function () {
    return view('add_packege');
});

Route::get('/add_schedule', function () {
    return view('add_schedule');
});

Route::get('/add_service', function () {
    return view('add_service');
});

Route::get('/appointment_assign_by_all', function () {
    return view('appointment_assign_by_all');
});

Route::get('/appointment_assign_by_doctor', function () {
    return view('appointment_assign_by_doctor');
});

Route::get('/doctor_list', function () {
    return view('doctor_list');
});

Route::get('/package_list', function () {
    return view('package_list');
});

Route::get('/patient_list', function () {
    return view('patient_list');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/schedule_list', function () {
    return view('schedule_list');
});

Route::get('/send_email', function () {
    return view('send_email');
});

Route::get('/send_sms', function () {
    return view('send_sms');
});

Route::get('/service_list', function () {
    return view('service_list');
});

Route::get('/add_user', function () {
    return view('add_user');
});

Route::get('/user_list', function () {
    $data=App\User::all();
    return view('user_list')->with('users',$data);
});

Route::get('/patient_dashboard', function () {
    return view('Patient_pannel.patient_dashaboard');
});


Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [AdminDashboardController::class, 'index'])->name('home1');
Route::get('/dashboard', [UserController::class, 'index'])->name('home1');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);

});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


