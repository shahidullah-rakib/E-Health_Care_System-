<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function changePassword(){
        return view('changeAdminPassword');
    }
    public function myProfile(){
        return view('AdminProfile');
    }
}
