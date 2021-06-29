<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function roomView(){
        return \view('roomCheck');
    }

    public function roomBookView(){
        return view('bookingRoom');
    }
}
