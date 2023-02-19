<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{

    protected $fillable = [
        'patient_name',
        'doctor_name',
        'date',
        'time',
        'description'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
}
