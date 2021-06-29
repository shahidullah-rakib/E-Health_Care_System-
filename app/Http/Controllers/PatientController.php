<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table1;
use App\Http\Requests\patientRegistrationRequest;

class PatientController extends Controller
{
    public function PatientControllerIndex(){
        return view('Patient.PatientSignUpIndex');
     }

    

     public function PatientControllerUpdateIndex(){
        return view('Patient.PatientUpdateIndex');
     }


     public function PatientControllerDeleteIndex(){
        return view('Patient.PatientDeleteIndex');
     }


     public function PatientChangePasswordIndex(){
      return view('Patient.PatientChangePassword');
   }
   
   
   public function PatientSearchDoctorIndex(){
      return view('Patient.searchDoctor');
   }
   
   
   


     //public function validation(patientRegistrationRequest $req){

      //   $req->validate([

      //       'patientName'=>"required|patientName",
      //       'patientEmail'=>"required|min:8"

      //   ]);
      //   print_r($req->input());


     //}
 
 
 
     public function insertPatient(patientRegistrationRequest $req){
 
         $table= new table1;
         $table->patientName= $req->patientName;
         $table->patientPassword= $req->patientPassword;
         $table->patientGender= $req->patientGender;
         $table->patientAge= $req->patientAge;
         $table->patientEmail= $req->patientEmail;
         $table->patientDate= $req->patientDate;
         $table->patientPhone= $req->patientPhone;
         echo $table->save();
 
         echo "data saved";
         
      }





      public function updatePatient(Request $req){
 
        $table= table1::find($req->patientId);
        $table->patientName= $req->patientName;
        $table->patientGender= $req->patientGender;
        $table->patientAge= $req->patientAge;
        $table->patientEmail= $req->patientEmail;
        $table->patientDate= $req->patientDate;
        $table->patientPhone= $req->patientPhone;
        echo $table->save();

        echo "data updated";
        
     }


     public function deletePatient(Request $req){
 
        $table= table1::find($req->patientId);
        echo $table->delete();

        echo "account deleted";
        
     }


    /* public function changePassword(Request $req){

      $table= table1::find($req->patientId);
    
      $table->patientName= $req->patientName;
      $table->patientPassword= $req->patientPassword;
      $table->patientGender= $req->patientGender;
      $table->patientAge= $req->patientAge;
      $table->patientEmail= $req->patientEmail;
      $table->patientDate= $req->patientDate;
      $table->patientPhone= $req->patientPhone;
      echo $table->save();

      echo "password changed";
      
   }*/
}
