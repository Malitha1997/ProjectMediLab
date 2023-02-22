<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test_bill extends Model
{


    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
