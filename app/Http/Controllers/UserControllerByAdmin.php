<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerByAdmin extends Controller
{   
    //render add user page
    public function index(){
        return view('addUsers');
    }

    //add user
    public function addUser(Request $req){
        echo $req->type;
    }

    public function viewUserList(){
        return view('viewUserList');
    }
    public function doctorReview(){
        return view('viewDoctorReview');
    }
    public function transactionHistory(){
        return view('userTransactionHistory');
    }
    public function userReport(){
        return \view('userReport');
    }
    public function editUserView(){
        return \view('editUser');
    }

    public function viewUserDetails(){
        return view('viewUserDetails');
    }

}
