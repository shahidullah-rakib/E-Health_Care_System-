<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientProfileController extends Controller
{
    public function PatientSignUpIndex(){

        return view('Patient.PatientSignup');

    }

    public function PatientDoctorPageIndex(){

        return view('Patient.PatientDoctorPage');

    }

    public function PatientDoctorInfoIndex(){

        return view('Patient.PatientDoctorInfo');

    }

    public function PatientDoctorContactIndex(){

        return view('Patient.PatientDoctorContact');

    }
    
    public function PatientDoctorReviewIndex(){

        return view('Patient.PatientDoctorReview');

    }




}
