<?php

namespace App\Models;

use App\Models\Doctor;
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
        return $this->belongsTo(User::class,'foreign_key');
    }

    public function appointments(){
        return $this->belongsToMany(Appointment::class,'appointment_doctors');
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
