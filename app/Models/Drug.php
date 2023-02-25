<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = [
        'drug_name', 
        'qty',
        'issue_date',
        'expire_date'
    ];

    public function patients(){
        return $this->belongsToMany(Patient::class,'drug_patients');
    }
}
