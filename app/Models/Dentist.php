<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    use HasFactory;

    protected $fillable = [
        'dentist_name',
        'dentist_status'
    ];

    // public function appointment(){
    //     return $this->hasMany(Appointment::class);
    // }
    
}
