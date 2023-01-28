<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
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
        'blood_group',
    ];

    protected $hidden = [
        'password',
    ];

    public function user(){

        return $this->belongsTo(User::class);
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
