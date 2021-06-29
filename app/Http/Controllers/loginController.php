<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(Request $req){
        $result = DB::table('users')
                        ->where('email', $req->email)
                        ->where('password', $req->password)
                        // ->where('type', "doctor")

                        ->get();
                        foreach ($result as $res ){
                            $id = $res -> id;
                            $username = $res -> username;
                            $type = $res -> type;
                          
                        }
                        

        if(count($result) > 0 ){
            if($type == "doctor"){
                $req->session()->put( 'uname', $username );

                $req->session()->put( 'type', $type );

                $req->session()->put( 'password', $req->password );

                $req->session()->put( 'id', $id );
                
                //return view('doctor.dashboard', compact('id'));
                //return view('doctor.dashboard');
                
                $user = User::find($id);
                return view('doctor.dashboard')->with('user', $user);
            }

           else if($type == "receptionist"){
                $req->session()->put('uname', $req->username);
                $req->session()->put('type', $req->type);
                
                return view('reception.dashboard');
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

    

