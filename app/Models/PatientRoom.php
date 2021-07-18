<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRoom extends Model
{
    protected $table='room';
    protected $primaryKey='id';
    use HasFactory;
}
