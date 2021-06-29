<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctorDashboard(){
        return view('doctor.dashboard');
        
    }

    public function doctorProfile(){
        return view('doctor.DoctorProfile');

    }

    public function patientDetails(){
        return view('doctor.PatientDetails');

    }

    public function approveAppointment(){
        return view('doctor.approveAppointment');

    }

    public function apointmentHistory(){
        return view('doctor.ApointmentHistory');

    }

    public function  operationTheatres(){
        return view('doctor.OperationTheatres');

    }

    public function hospitalAuthority(){
        return view('doctor.HospitalAuthority');

    }

    public function feedbackReview(){
        return view('doctor.Feedback&Review');

    }

    public function help(){
        return view('doctor.help');

    }

    public function icuRoom(){
        return view('doctor.IcuRoom');

    }

    public function emergencyRoom(){
        return view('doctor.EmergencyRoom');

    }

    public function doctorChangePass(){
        return view('doctor.DoctorChangePass');

    }

    public function doctorUpdateInformation(){
        return view('doctor.DoctorUpdateInformation');

    }

    public function doctorCheckSalary(){
        return view('doctor.DoctorCheckSalary');

    }

    public function immediateTreatment(){
        return view('doctor.ImmediateTreatment');

    }
}
