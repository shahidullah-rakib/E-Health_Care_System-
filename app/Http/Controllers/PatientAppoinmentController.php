<?php

namespace App\Http\Controllers;
use App\Models\PatientAppoinmentModel;
use Illuminate\Http\Request;

class PatientAppoinmentController extends Controller
{
    public function MakeAppoinmentIndex(){
        return view('Patient.PatientMakeAppoinment');
     }
  
     public function addAppoinment(Request $req){
        
        $appn1= new PatientAppoinmentModel;
        $appn1->patientid= $req->patientid;
        $appn1->doctorid= $req->doctorid;
        $appn1->patientdisease= $req->patientdisease;
        $appn1->save();
  
         echo "Requested for appoinment";
  
     }
  
}
