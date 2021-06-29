<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\PassRequest;
use Illuminate\Support\Facades\DB;

class receptionController extends Controller
{
    public function index(Request $req,$id){
        $user= User::find($id);
       $username = $req->session()->get('uname');
       $name =  $req->session()->get('name');
      
       $email = $user->email;

        return view('reception.dashboard',compact('name','username','id','email'));
    }  

    public function edit(Request $req,$id){
        $username = $req->session()->get('uname');
      
       
        $id =  $req->session()->get('id');
        $users = User::find($id);
        return view('reception.edit',compact(['users'],'id','username'));
    }

    public function update(UserRequest $req, $id){
        // $validation = Validator :: make ($req->all(),[
        //     'email' => 'required|email|max:20',
        //     'phone'  => 'required|alpha_num|min:11|max:11'
            
        // ]);

        // if($validation->fails()){
        //     return back()->with('errors',$validation->errors());
        // }
        // else{
            $user= User::find($id);
       $username = $user->username = $req->uname;
       $name =  $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->save();

        return view('reception.dashboard',compact('name','username','id'));
       // }
        
    }

    public function schedule(Request $req){
        $id = $req->session()->get('id');
        $username = $req->session()->get('uname');
        $email = $req->session()->get('email');

        $value = DB::table('doctor_sche')
                    ->get();
        return view('reception.doctorSchedule',compact(['value'],'id','username'));
    }

    public function chngPass(Request $req,$id){
        
        $username = $req->session()->get('uname');
            $user = User::find($id);
            $pass = $user -> password;
           
            return view('reception.changePass',compact('pass','id','username'));
    
       
    }
    public function updatePass(PassRequest $req, $id){
        // $validation = Validator :: make ($req->all(),[
            
        //     'npass'  => 'required|min:8|max:20|alpha_num',
        //     'rnpass'  => 'required|same:npass',

            
        // ]);
        // if($validation->fails()){
        //     return back()->with('errors',$validation->errors());
        // }
        // else{
            $user= User::find($id);
            $username = $req->session()->get('uname');
            $name     = $req->session()->get('name');
            $user->password = $req->rnpass;
            $user->save();
    
            return view('reception.dashboard',compact('name','username','id'));
        // }
       
    }

    

   
    public function search(Request $req){
        $id = $req->session()->get('id');
        return view('reception.search')->with('id',$id);
    }
    public function viewsearchDoctor(Request $req){
        $id = $req->session()->get('id');
        return view('reception.viewsearchdoctor')->with('id',$id);
    }
    public function searchDoctor(Request $req){
        $id = $req->session()->get('id');
        $val = DB::table('doctor_sche')
                    ->where('email', $req->email)
                    ->first();
        return view('reception.searchdoctor',compact(['val'],'id'));
        
    }

    public function viewsearchPatient(Request $req){
        $id = $req->session()->get('id');
        return view('reception.viewsearchpatient')->with('id',$id);
    }
    public function searchPatient(Request $req){
        $id = $req->session()->get('id');
        $val = DB::table('appointment')
                    ->where('token', $req->token)
                    ->first();
        return view('reception.searchpatient',compact(['val'],'id'));
    }

   
    public function viewcreatebill(Request $req){
        $id = $req->session()->get('id');
        $username = $req->session()->get('uname');
        $name     = $req->session()->get('name');
        return view('reception.createbill',compact('name','username','id'));
        
    }

    public function patientsBill(Request $req){
        $username = $req->session()->get('uname');
        $bills = DB::table('bill')
                ->get();
        $id = $req->session()->get('id');
        
        return view('reception.patientbill',compact(['bills'],'id','username'));
    }

    public function createBill(Request $req){
        
        
       
         DB::table('bill')->insert(
            ['token' => $req->token, 'name' => $req->name,'total_bill' => $req->tbill, 'paid_bill' => $req->pbill, 'due_bill' => $req->dbill]
        );

         $id = $req->session()->get('id');
         $username = $req->session()->get('uname');
         $name     = $req->session()->get('name');
         return view('reception.dashboard',compact('name','username','id'));
    }

    public function Rooms(Request $req){
        $username = $req->session()->get('uname');
        $id = $req->session()->get('id');
        $email = $req->session()->get('email');

        $value = DB::table('room')
                    ->get();
        return view('reception.rooms',compact(['value'],'id','username'));
        
    }

    public function Emergency(Request $req){
        $username = $req->session()->get('uname');
        $id = $req->session()->get('id');
        $email = $req->session()->get('email');

        $value = DB::table('service')
                    ->get();
        return view('reception.emergency',compact(['value'],'id','username'));
        
    }
    public function upEmergency(Request $req){
        $id = $req->session()->get('id');
         $username = $req->session()->get('uname');
         $name     = $req->session()->get('name');
         return view('reception.dashboard',compact('name','username','id','username'));
        
    }
    public function logout(Request $req){ 
        $req->session()->flush();
        return redirect('/');
    }
    public function viewDiscount(Request $req){
        
        $id = $req->session()->get('id');
        return view('reception.viewdiscount')->with('id',$id);
    }

    public function Discount(Request $req){
        $username = $req->session()->get('uname');
        $id = $req->session()->get('id');
        if($req->token!=''){
            $val = DB::table('appointment')
                        ->where('token', $req->token)
                        ->first();
        
            $con = $val->ref;
            $refer = substr($con, 0, 2);
            if($refer == "dc"){
                $ref = "10%";
                return view('reception.discount',compact(['val'],'id','ref','username'));
            }
            elseif($refer == "ad"){
                $ref = "15%";
                return view('reception.discount',compact(['val'],'id','ref','username'));
            }
            elseif($refer == "re"){
                $ref = "5%";
                return view('reception.discount',compact(['val'],'id','ref','username'));
            }
            else{
                $ref = "No Discount";
                return view('reception.discount',compact(['val'],'id','ref'));
            }
        }
        else{
            echo "null";
        }
        

      
       
    
       
    }

    public function conDoctor(Request $req){
        $id = $req->session()->get('id');
        return view('reception.contactDoctor')->with('id',$id);
    }

    public function conPatient(Request $req){
        $id = $req->session()->get('id');
        return view('reception.contactPatient')->with('id',$id);
    }
    public function conAdmin(Request $req){
        $id = $req->session()->get('id');
        return view('reception.contactAdmin')->with('id',$id);
    }
    public function chat(Request $req){
        $id = $req->session()->get('id');
        return view('reception.chatbox')->with('id',$id);
    }
    public function viewupp(Request $req ){
        $id = $req->session()->get('id');
        return view('reception.viewupp')->with('id',$id);
       
    }
    public function upp(Request $req ){
        $id = $req->session()->get('id');
        $file = $req ->file('img');
        $filename = $file->getClientOriginalName();
        $username = $req->session()->get('uname');
        $name     = $req->session()->get('name'); 
        if($file->move('upload',$filename)){
            $user= User::find($id)
                         ->where('id',$id)
                         ->update( [
                            'photo' => $filename,
                        ] );
        $req->session()->put('image',$filename);
        return view('reception.upp',compact('id','filename'));
        }
        
       
    }
    public function trans(Request $req){
        $id = $req->session()->get('id');
        $values = DB::table('transaction')->get();
       
        return view('reception.trans',compact(['values'],'id'));
     
    }
    public function patInfo(Request $req){
        $id = $req->session()->get('id');
        $value = DB::table('appointment')->get();
       
        return view('reception.patinfo',compact(['value'],'id'));
     
    }
    public function withDraw(Request $req){
        $id = $req->session()->get('id');
       
        $username = $req->session()->get('uname');
     return view('reception.withdraw',compact('id','username'));
    }
    public function ncc(Request $req){
        $id = $req->session()->get('id');
        $value = DB::table('users')
                    ->where('id', $id)
                    ->update( [
                                'w_method' => 'NCC Bank',
                        ] );;
       
       
        $username = $req->session()->get('uname');
        $name = $req->session()->get('name');
     return view('reception.dashboard',compact('id','username','name'));
    }

    public function bkash(Request $req){
        $id = $req->session()->get('id');
        $value = DB::table('users')
                    ->where('id', $id)
                    ->update( [
                                'w_method' => 'Bkash',
                        ] );;
       
       
        $username = $req->session()->get('uname');
        $name = $req->session()->get('name');
     return view('reception.dashboard',compact('id','username','name'));
    }

    public function dbbl(Request $req){
        $id = $req->session()->get('id');
        $value = DB::table('users')
                    ->where('id', $id)
                    ->update( [
                                'w_method' => 'DBBL',
                        ] );;
       
       
        $username = $req->session()->get('uname');
        $name = $req->session()->get('name');
     return view('reception.dashboard',compact('id','username','name'));
    }

    public function review(Request $req){
        $id = $req->session()->get('id');
        $values = DB::table('review')->get();
       
        return view('reception.review',compact(['values'],'id'));
     
    }
    
}
