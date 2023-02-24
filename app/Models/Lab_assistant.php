<?php

namespace App\Models;

use App\Models\User;
use App\Models\Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lab_assistant extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
