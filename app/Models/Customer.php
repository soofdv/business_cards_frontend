<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class Customer extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function appointments() {
        return $this->hasMany(Appointment::class)->orderBy('appointment_date', 'desc');
    }
}
