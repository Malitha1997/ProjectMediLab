<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    public function doctors(){
        return $this->belongsToMany(Doctor::class, 'appointment_doctors');
    }

    public function patient(){
        return $this->belongsTo(Patient::class,'foreign_key');
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class,'foreign_key');
    }
}
