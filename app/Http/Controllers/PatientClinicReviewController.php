<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PatientClinicReview;

class PatientClinicReviewController extends Controller
{
     public function PatientClinicReviewIndex(){

        return view('Patient.PatientClinicReview');
    }

    public function SubmitPatientClinicReviewIndex(Request $req){
        $table= new PatientClinicReview;
        $table->patientid= $req->patientid;
        $table->message= $req->message;
        $table->save();

        echo "The review is recorded";
    }
}
