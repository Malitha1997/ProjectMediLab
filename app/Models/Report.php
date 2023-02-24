<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Lab_assistant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    protected $fillable = [
        'patient_name',
        'description',
        'doctor_name',
        'lab_assistant_name',
        'report_file'
    ];
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function lab_assistant(){
        return $this->belongsTo(Lab_assistant::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
