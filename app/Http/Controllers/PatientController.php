<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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


   public function PatientContactDoctorIndex(){
      return view('Patient.chatDoctor');
   }


   public function PatientHomeIndex(){
      return view('Patient.PatientHome');
   }


   public function ViewDoctorInfoIndex(){

      $data=User::where('type','doctor')->get();
      return view('Patient.PatientDoctorInfo',['data'=>$data]);
   }


   public function PatientSearchDoctorIndex(Request $req){

      $name=$req->name;
      $data1=User::where('name','Like','%'.$name.'%')->get();
      return view('Patient.searchDoctor',compact('data1'));
     
   }

   public function PatientLogoutIndex(){
      return view('login');
   }


   

 
 
     public function insertPatient(patientRegistrationRequest $req){
 
         $table= new user;
         $table->name= $req->name;
         $table->username= $req->username;
         $table->email= $req->email;
         $table->password= $req->password;
         $table->type= $req->type;
         $table->bloodGroup= $req->bloodGroup;
         $table->phone= $req->phone;
         $table->address= $req->address;
         echo $table->save();
 
         echo "data saved";
         
      }





      public function updatePatient(patientRegistrationRequest $req1){
 
        $user= User::find($req1->id);
        $user->name= $req1->name;
        $user->username= $req1->username;
        $user->email= $req1->email;
        $user->password= $req1->password;
        $user->type= $req1->type;
        $user->bloodGroup= $req1->bloodGroup;
        $user->phone= $req1->phone;
        $user->address= $req1->address;
        $user->image= $req1->image;
        echo $user->save();

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
