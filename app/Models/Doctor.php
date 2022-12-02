<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'foreign_key');
    }

    public function appointments(){
        return $this->belongsToMany(Appointment::class,'appointment_doctors');
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
