<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GecController extends Controller
{
    public function GEC(){
        return view('gec.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status      
        ]);
    }
}
