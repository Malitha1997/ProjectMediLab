<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    protected $fillable = [
        
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'foreign_key');
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
