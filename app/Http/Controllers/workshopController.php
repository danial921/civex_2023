<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\workshopRegisterRequest;
use App\Models\workshop_registrants;

class workshopController extends Controller
{
    public function store_regist(workshopRegisterRequest $request){
        dd($request);
    }
}
