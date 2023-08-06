<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CescController extends Controller
{
    public function CESC(){
        return view('cesc.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status    
        ]);
    }
}
