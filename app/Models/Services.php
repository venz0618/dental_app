<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Appointment;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_status'
    ];

    // public function appointment(){
    //     return $this->hasMany(Appointment::class);
    // }

}
