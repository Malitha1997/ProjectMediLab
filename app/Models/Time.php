<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $guarded = [];

    public function Doctor()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
