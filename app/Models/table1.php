<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table1 extends Model
{
    protected $table='patientinfotable';
    protected $primaryKey='patientId';
    public $timestamps= false ;
    
}
