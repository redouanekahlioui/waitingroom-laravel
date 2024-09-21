<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaitingRoomController extends Controller
{
    public function index()
    {
        
        return view('waiting-room'); 
    }
}
