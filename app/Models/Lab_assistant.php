<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab_assistant extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'foreign_key');
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
