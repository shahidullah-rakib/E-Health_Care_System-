<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class receptionController extends Controller
{
    public function index(){
        return view('reception.dashboard');
    }

    public function edit(){
        return view('reception.edit');
    }

    public function schedule(){
        return view('reception.doctorSchedule');
    }

    public function chngPass(){
        return view('reception.changePass');
    }

    public function conAdmin(){
        return view('reception.contactAdmin');
    }

    public function conDoctor(){
        return view('reception.contactDoctor');
    }

    public function conPatient(){
        return view('reception.contactPatient');
    }

    public function patientsBill(){
        return view('reception.patientsBill');
    }

    public function Rooms(){
        return view('reception.rooms');
    }

    public function Emergency(){
        return view('reception.emergency');
    }

    public function Discount(){
        return view('reception.discount');
    }

    public function searchDoctor(){
        return view('reception.searchdoctor');
    }
}
