<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    public function patients(){
        return $this->belongsToMany(Patient::class,'drug_patients');
    }
}
