<?php

use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AppointmentDoctorController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Home.home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/add_bill', function () {
    return view('add_bill');
});

/*Route::get('/add_appointment', function () {
    return view('Admin.Appointments.create');
});*/

Route::get('/add_packege', function () {
    return view('add_packege');
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

Route::get('/package_list', function () {
    return view('package_list');
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('schedules', ScheduleController::class);
    Route::resource('appointments', AppointmentController::class);

    Route::get('/add_user', [UserController::class, 'create']);
    Route::get('/add_patient', [PatientController::class, 'create']);
    Route::get('/add_doctor', [DoctorController::class, 'create']);
    Route::get('/add_appointment', [AppointmentController::class, 'create']);
    Route::get('/add_schedule', [ScheduleController::class, 'create']);

    Route::get('/patient_list', [PatientController::class, 'index'])->name('patient_list');
    Route::get('/user_list', [UserController::class, 'index'])->name('user_list');
    Route::get('/doctor_list', [DoctorController::class, 'index'])->name('doctor_list');
    Route::get('/schedule_list', [ScheduleController::class, 'index'])->name('schedule_list');
    Route::get('/appointment_list', [AppointmentController::class, 'index'])->name('appointment_list');

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    //appointment routes
    //Route::resource('appointment', 'AppointmentController');
    //Route::post('/appointment/check', 'AppointmentController@check')->name('appointment.check');
    //Route::post('/appointment/update', 'AppointmentController@updateTime')->name('update');
});


Auth::routes();





