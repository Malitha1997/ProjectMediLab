<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'foreign_key');
    }

    public function test_bills(){
        return $this->hasMany(Test_bill::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function diseases(){
        return $this->belongsToMany(Disease::class,'disease_patients');
    }

    public function drugs(){
        return $this->belongsToMany(Drug::class,'drug_patient');
    }

    public function histories(){
        return $this->hasMany(History::class);
    }
}
