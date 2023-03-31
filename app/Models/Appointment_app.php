<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Services;
use App\Model\Dentist;

class Appointment_app extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'service_id',
        'dentist_id',
        'date',
        'time',

    ];


    // public function client(){
    //     return $this->belongsTo(User::class);
    // }

    // public function spouse(){
    //     return $this->belongsTo(Services::class);
    // }
    // public function dentist(){
    //     return $this->belongsTo(Dentist::class);
    // }
}
