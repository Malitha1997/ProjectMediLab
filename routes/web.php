<?php

use App\User;
use App\Http\Controllers\Sms;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TestBillController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LabAssistantController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\PatientDashboardController;
use App\Http\Controllers\AppointmentDoctorController;
use App\Http\Controllers\LabAssistantDashboardController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/search',SearchController::class,'doctorSearch');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('schedules', ScheduleController::class);
    Route::resource('appointments', AppointmentController::class);
    Route::resource('lab_assistants', LabAssistantController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('drugs', DrugController::class);
    Route::resource('register', RegisterController::class);
    Route::resource('payements', PayementController::class);

    Route::get('/add_user', [UserController::class, 'create']);
    Route::get('/add_patient', [PatientController::class, 'create']);
    Route::get('/add_doctor', [DoctorController::class, 'create']);
    Route::get('/add_schedule', [ScheduleController::class, 'create']);
    Route::get('/add_lab_assistant', [LabAssistantController::class, 'create']);
    Route::get('/add_report', [ReportController::class, 'create']);
    Route::get('/add_drug', [DrugController::class, 'create']);
    Route::get('/add_test_bill', [TestBillController::class, 'create']);
    Route::get('/calender', [AppointmentController::class, 'calender']);
    Route::get('/add_appointment/{id}', [AppointmentController::class, 'booking'])->name('add_appointment');
    Route::controller(PaymentController::class)->group(function(){
        Route::get('stripe', 'stripe');
        Route::post('stripe', 'stripePost')->name('stripe.post');
    });
    Route::get('/patient_list', [PatientController::class, 'index'])->name('patient_list');
    Route::get('/user_list', [UserController::class, 'index'])->name('user_list');
    Route::get('/doctor_list', [DoctorController::class, 'index'])->name('doctor_list');
    Route::get('/schedule_list', [ScheduleController::class, 'index'])->name('schedule_list');
    Route::get('/appointment_list', [AppointmentController::class, 'index'])->name('appointment_list');
    Route::get('/lab_assistant_list', [LabAssistantController::class, 'index'])->name('lab_assistant_list');
    Route::get('/report_list', [ReportController::class, 'index'])->name('report_list');
    Route::get('/drug_list', [DrugController::class, 'index'])->name('drug_list');
    Route::get('/doctor_appointment_list', [DoctorController::class, 'appointmentIndex'])->name('doctor_appointment_list');

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/patientDashboard', [PatientDashboardController::class, 'index'])->name('patientDashboard');
    Route::get('/doctorDashboard', [DoctorDashboardController::class, 'index'])->name('doctorDashboard');
    Route::get('/labassistantDashboard', [LabAssistantDashboardController::class, 'index'])->name('labassistantDashboard');

    //patient
    Route::get('/doctor_list-patient', [DoctorController::class, 'patientIndex'])->name('doctor_list-patient');
    Route::get('/appointment-patient', [AppointmentController::class, 'patientCreate'])->name('appointment-patient');
    Route::get('/show_doctor-patient/{id}', [DoctorController::class, 'patientShow'])->name('show_doctor-patient');
    Route::get('/add_appointment-patient/{id}', [AppointmentController::class, 'patientBooking'])->name('add_appointment-patient');
    Route::post('/patientAppointmentStore', [AppointmentController::class, 'patientAppointmentStore'])->name('patientAppointmentStore');

    //lab assistant
    Route::get('/add_report-labassistant', [ReportController::class, 'labassistantCreate'])->name('add_report-labassistant');
    Route::get('/report_list-labassistant', [ReportController::class, 'labassistantIndex'])->name('report_list-labassistant');
    Route::get('/doctor_list-labassistant', [DoctorController::class, 'labassistantIndex'])->name('doctor_list-labassistant');

    //drug
    Route::get('/drug_list-patient', [DrugController::class, 'patientIndex'])->name('drug_list-patient');
    Route::get('/show_drug-patient/{id}', [DrugController::class, 'patientShow'])->name('show_drug-patient');

    //doctor
    Route::get('/doctor_list-doctor', [DoctorController::class, 'doctorIndex'])->name('doctor_list-doctor');
    Route::get('/doctor_show-doctor/{id}', [DoctorController::class, 'doctorShow'])->name('doctor_show-doctor');
    Route::get('/appointment_list-doctor', [AppointmentController::class, 'doctorIndex'])->name('appointment_list-doctor');

    //Email
    Route::get('send-mail', [MailController::class, 'index'])->name('send-mail');

    //SMS
    Route::get('/send_sms', function () {
        return view('Admin.Sms.send_sms');
    });
    Route::get('/lab_send_sms', function () {
        return view('Lab Assistant.Sms.create');
    });


    Route::post('/lab_send_sms', [SmsController::class, 'send'])->name('lab_send_sms');
    Route::post('/send_sms', [SmsController::class, 'send'])->name('send_sms');
    Route::post('/msgHistory', [msgHistory::class, 'send'])->name('msgHistory');
    Route::get('/msgHistory', function () {
        return view('Admin.Sms.msgHistory');
    });
});

Route::post('/livesearch', [AppointmentController::class, 'livesearch'])->name('livesearch');
Route::post('/livesearch2', [AppointmentController::class, 'livesearch2'])->name('livesearch2');
Route::post('/livesearch3', [ReportController::class, 'livesearch3'])->name('livesearch3');
Auth::routes();

//Route::match(['get','post'],'/send_sms', [SmsController::class, 'send'])->name('send_sms');





