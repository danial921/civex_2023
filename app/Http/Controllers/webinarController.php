<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\webinarRequest;
use App\Models\webinar_registrants;
use App\Http\Controllers\FetchApiController;

class webinarController extends Controller
{
    public function __construct(){
        $this->FetchApiController = new FetchApiController();
    }
    
    public function store_regist(webinarRequest $request){
        // try{
        //     return response()->json($request->all());

        // }catch(Exception $e){
        //     return response()->json(($e->getMessage()));
        // }
        try{
            $data = $request->all();
            $registrants = [];
            $registrants['nama'] = $data['nama'];
            $registrants['instansi'] = $data['instansi'];      
            
            $file = $request->file('bukti_bayar');
            $registrants['bukti_bayar'] = $this->FetchApiController->uploadToAPI($request->input('nama')."-webinar." . $file->extension(), $file);
            
            // $registrants['bukti_bayar'] = "aaa";
            webinar_registrants::create($registrants);

            return response()->json([
                'message' => 'success'
            ], 201);
        }catch(Exception $e){
            return response()->json([
                'errors' => $e->getMessage()
            ], 422);
        }
    }
}
