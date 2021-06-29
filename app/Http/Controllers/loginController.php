<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(Request $req){

        $validation = Validator :: make ($req->all(),[
            'email' => 'required|email|max:20',
            'password'  => 'required|alpha_num|min:8|max:20'
            
        ]);

        if($validation->fails()){
            return back()->with('errors',$validation->errors());
        }
        else{
            $result = DB::table('users')
            ->where('email', $req->email)
            ->where('password', $req->password)
            // ->where('type', "doctor")

            ->get();
            foreach ($result as $res){
                $id       = $res -> id;
                $name     = $res -> name;
                $email    = $res -> email;
                $password = $res -> password;
                $username = $res -> username;
                $type     = $res -> type;
                $phone    = $res -> phone;
                $image    = $res -> photo;
              
            }
            

if(count($result) > 0 ){
if($type == "doctor"){
   
    
    
    return view('doctor.dashboard');
}

else if($type == "receptionist"){
$req->session()->put('id', $id);
$req->session()->put('uname',$username);
$req->session()->put('password', $password);
$req->session()->put('name', $name);
$req->session()->put('email', $email);
$req->session()->put('phone', $phone);
$req->session()->put('type', $type);
$req->session()->put('image', $image);
    
    return view('reception.dashboard',compact('name','username','id'));
}

else if($type == "admin"){
    $req->session()->put('uname', $req->username);
    $req->session()->put('type', $req->type);
    
    return view('addUsers');
}
else{
    echo "type error";
}



}
else{
echo "Invalid User";
}
}
        }
        
        public function val(){
        
            echo "ok";
            
          
        }
 }

    

