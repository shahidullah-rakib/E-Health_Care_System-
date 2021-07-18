<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDoctorReview extends Model
{
    protected $table='doctor_review';
    protected $primaryKey='id';
    public $timestamps = false;
}
