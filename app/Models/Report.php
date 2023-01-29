<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function lab_assistant(){
        return $this->belongsTo(Lab_assistant::class);
    }

    public function test_bill(){
        return $this->belongsTo(Test_bill::class);
    }
}
