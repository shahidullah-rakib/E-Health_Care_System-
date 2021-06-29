<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class LogoutController extends Controller

{

    public function index(Request $req)

    {

        $req->session()->flush();

        return redirect('/home');

    }

}