<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
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