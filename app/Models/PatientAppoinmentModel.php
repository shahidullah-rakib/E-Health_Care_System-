<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAppoinmentModel extends Model
{
    protected $table='patientappoinment';
    protected $primaryKey='patientid';
    public $timestamps = false;
}
