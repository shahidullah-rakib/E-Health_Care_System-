<?php

namespace App\Http\Controllers;
use App\Models\PatientRoom;

use Illuminate\Http\Request;

class PatientRoomController extends Controller
{
    public function ViewRoomIndex(){

        $data=PatientRoom::all();
        return view('Patient.PatientViewRoom',['rooms'=>$data]);
    }
}
