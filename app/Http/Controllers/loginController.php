<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(Request $req){
        $result = DB::table('users')
                        ->where('email', $req->email)
                        ->where('password', $req->password)
                        // ->where('type', "doctor")

                        ->get();
                        foreach ($result as $res){
                            $id       = $res -> id;
                            $name     = $res -> name;
                            $email    = $res -> email;
                            $username = $res -> username;
                            $type     = $res -> type;
                            $phone    = $res -> phone;
                          
                        }
                        

        if(count($result) > 0 ){
            if($type == "doctor"){
               
                
                
                return view('doctor.dashboard');
            }

           else if($type == "receptionist"){
            $req->session()->put('id', $id);
            $req->session()->put('uname',$username);
            $req->session()->put('name', $name);
            $req->session()->put('email', $email);
            $req->session()->put('phone', $phone);
            $req->session()->put('type', $type);
                
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
        public function val(){
        
            echo "ok";
            
          
        }
    }

    

