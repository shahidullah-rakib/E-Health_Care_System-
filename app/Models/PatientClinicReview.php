<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientClinicReview extends Model
{
    protected $table='clinic_review';
    protected $primaryKey='reviewid';
    public $timestamps = false;
}
