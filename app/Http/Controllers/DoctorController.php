<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appoinment;
use App\Models\Prescribe;
use App\Models\doctor_sche;
use App\Models\reviews;
use App\Http\Requests\addApointmentRequest;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function doctorDashboard($id){
        
        $user = User::find($id);
        return view('doctor.dashboard')->with('user', $user);
        
    }

    public function doctorProfile($id){

        $user = User::find($id);
        return view('doctor.DoctorProfile')->with('user', $user);

        //return redirect()->route('doctor.DoctorProfile',$user);

    }

    public function patientDetails($id){
        $patient = DB::table('users')
        ->Where('type', 'patient')
        ->get();

        $user = User::find($id);
        //$patient = User::all()->where("type", "patient");
        return view('doctor.PatientDetails')->with('user', $user)->with('patient', $patient);

    }

    public function approveAppointment($id){

        $panding = DB::table('appoinments')
        ->Where('date', 'panding')
        ->get();

        $user = User::find($id);
        return view('doctor.approveAppointment')->with('user', $user)->with('panding', $panding);

    }

    public function updateProfile(Request $req, $id)
    {
        $id = $req->session()->get('id');
        $file = $req ->file('image');
        $filename = $file->getClientOriginalName();

        if($file->move('upload',$filename)){

            $user = DB::table('users')
            ->where('id', $id)
            ->update([
                'username'   => $req->get('username'),
                'name'       => $req->get('name'),
                'email'      => $req->get('email'),
                'bloodGroup' => $req->get('bloodGroup'),
                'phone'      => $req->get('phone'),
                'address'    => $req->get('address'),
                'image'      => $filename,
               ]);  

               $req->session()->put('image',$filename);

               $user = User::find($id);

            return view('doctor.doctorProfile')->with('user', $user);
            }
          

        
        //return redirect()->route('doctorProfile');
        
    }

    public function updatePassword(Request $req, $id){

        $password = $req->session()->get('password');
        $id = $req->session()->get('id');

        
        if($password == $req -> current_password){
            
            $result = DB::table('users')
            ->where('id', $id)
            ->update([
                'password'   => $req->new_password,
               ]);
        }

        $user = User::find($id);
        return view('doctor.doctorProfile')->with('user', $user);

    }



    public function update(Request $req, $id)
    {
        /* $appoinment = Appoinment::find($id);
        $appoinment->date = $req->date;
        $appoinment->save(); */ 

        $appoinment = DB::table('appoinments')
            ->where('id', $id)
            ->update(['date' => $req->get('date')]);

        $panding = DB::table('appoinments')
            ->Where('date', 'panding')
            ->get();

        $user = User::find($id);

        return view('doctor.approveAppointment')->with('user', $user)->with('panding', $panding);
        //return redirect()->route('approveAppointment');
        
    }

    public function insertAppointment(addApointmentRequest $request, $id)

    {

        $appoinment=new Appoinment;
        $appoinment->patient_name=$request->name;
        $appoinment->date=$request->date;
        $appoinment->disease=$request->disease;
        $appoinment->token=$request->token;
        $appoinment->save();



        $panding = DB::table('appoinments')
            ->Where('date', 'panding')
            ->get();


        $user = User::find($id);
        return view('doctor.approveAppointment')->with('user', $user)->with('panding', $panding);

        

    }

    public function apointmentHistory($id){

        $appoinment = DB::table('appoinments')->get();

        $user = User::find($id);
        return view('doctor.ApointmentHistory')->with('user', $user)->with('appoinment', $appoinment);

    }

    public function  operationTheatres($id){

        $user = User::find($id);
        return view('doctor.OperationTheatres')->with('user', $user);

    }

    public function hospitalAuthority($id){


        $receptionist = DB::table('users')
        ->Where('type', 'receptionist')
        ->get();

        $user = User::find($id);
        return view('doctor.HospitalAuthority')->with('user', $user)->with('receptionist', $receptionist);

    }

    public function feedbackReview($id){

        $reviews = DB::table('reviews')->get();

        $user = User::find($id);
        return view('doctor.Feedback&Review')->with('user', $user)->with('reviews', $reviews);

    }

    public function help($id){

        $doctor_sche = DB::table('doctor_sche')->get();

        $user = User::find($id);
        return view('doctor.help')->with('user', $user)->with('doctor_sche', $doctor_sche);

    }

    public function icuRoom($id){

        $ICU = DB::table('rooms')
        ->Where('roomType', 'ICU')
        ->get();

        $user = User::find($id);
        return view('doctor.IcuRoom')->with('user', $user)->with('ICU', $ICU);

    }

    public function emergencyRoom($id){

        $ICU = DB::table('rooms')
        ->Where('roomType', 'Emargency')
        ->get();

        $user = User::find($id);
        return view('doctor.EmergencyRoom')->with('user', $user)->with('ICU', $ICU);

    }

    public function doctorChangePass($id){

        $user = User::find($id);
        return view('doctor.DoctorChangePass')->with('user', $user);

    }

    public function doctorUpdateInformation($id){

        $user = User::find($id);
        return view('doctor.DoctorUpdateInformation')->with('user', $user);

    }

    public function doctorCheckSalary($id){

        $user = User::find($id);
        return view('doctor.DoctorCheckSalary')->with('user', $user);

    }

    public function immediateTreatment($id){

        $user = User::find($id);
        return view('doctor.ImmediateTreatment')->with('user', $user);

    } 
//insert
    public function immediateTreatmentInsert(Request $request, $id){

        $prescribe=new Prescribe;
        $prescribe->name=$request->name;
        $prescribe->age=$request->age;
        $prescribe->disease=$request->disease;
        $prescribe->bloodGroup=$request->bloodGroup;
        $prescribe->prescription=$request->prescription;
        $prescribe->tesrs=$request->tesrs;
        $prescribe->save();

        $user = User::find($id);
        return view('doctor.ImmediateTreatment')->with('user', $user);

    } 
    
    public function contactAdmin($id){

        $user = User::find($id);
        return view('doctor.contactAdmin')->with('user', $user);

    } 

    public function newApiroment($id){

        $user = User::find($id);
        return view('doctor.NewApiroment')->with('user', $user);

    } 

    public function checkReport($id){
        
        $Prescribe = DB::table('prescribes')->get();

        $user = User::find($id);
        return view('doctor.CheckReport')->with('user', $user)->with('Prescribe', $Prescribe);
        
    }

    public function searchPatient(Request $req, $id){

        $patient = $req->session()->get('id');
        $patient = DB::table('users')
        ->Where('name', $req->search)
        ->get();

        $user = User::find($id);
        //$patient = User::all()->where("type", "patient");
        return view('doctor.SearchPatient')->with('user', $user)->with('patient', $patient);
        
    }


}
