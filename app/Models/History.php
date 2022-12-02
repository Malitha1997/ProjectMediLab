<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class,'foreign_key');
    }
}
