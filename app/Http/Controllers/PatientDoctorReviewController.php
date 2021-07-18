<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientDoctorReview;

class PatientDoctorReviewController extends Controller
{
    public function PatientDoctorReviewIndex(){
        return view('Patient.PatientDoctorReview');
    }


    public function SubmitPatientDoctorReviewIndex(Request $req){
        $table= new PatientDoctorReview;
        $table->name= $req->name;
        $table->message= $req->message;
         $table->save();

        echo "The review is recorded";
    }
}
