<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CppcController extends Controller
{
    public function CPPC(){
        return view('cpcc.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status      
        ]);
    }
}
