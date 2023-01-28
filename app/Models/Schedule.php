<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    protected $fillable = [
            'id', 
            'available_day',
            'available_time',

    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
