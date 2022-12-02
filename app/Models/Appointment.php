<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function doctors(){
        return $this->belongsToMany(Doctor::class, 'appointment_doctors');
    }

    public function patient(){
        return $this->belongsTo(Patient::class,'foreign_key');
    }
}
