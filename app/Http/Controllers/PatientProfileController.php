<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientProfileController extends Controller
{
   public function SignupIndex(){
	   return view('Patient.PatientSignup');
   }
}
