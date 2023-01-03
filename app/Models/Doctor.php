<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Report;
use App\Models\Schedule;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'password',
        'house_no',
        'street_no',
        'city',
        'age',
        'telno',
        'nic',
        'speciality',
        'qualification'
    ];

    protected $hidden = [
        'password'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class,'appointment_doctors');
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}
