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
        'patient_id',
        'doctor_name',
        'date',
        'available_time',
        'problem'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'foreign_key');
    }

    public function patient(){
        return $this->belongsTo(Patient::class,'foreign_key');
    }

    public function schedule(){
        return $this->belongsTo(Schedule::class,'foreign_key');
    }
}
