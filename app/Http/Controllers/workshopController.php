<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\workshopRegisterRequest;
use App\Models\workshop_registrants;
use App\Http\Controllers\FetchApiController;

class workshopController extends Controller
{
    public function __construct(){
        $this->FetchApiController = new FetchApiController();
    }
    
    public function store_regist(workshopRegisterRequest $request){
        // try{
        //     return response()->json($request->all());

        // }catch(Exception $e){
        //     return response()->json(($e->getMessage()));
        // }
        try{
            $data = $request->all();
            $registrants = [];
            foreach($request->input('nama') as $key => $nama){
                // echo $key;
                if($key == 0){
                    $registrants['nama'] = ' - ' . $nama . "\n";
                    $registrants['instansi'] = ' - ' . $data['instansi'][$key] . "\n";
                    $registrants['email'] = ' - ' . $data['email'][$key] . "\n";
                    $registrants['notelp'] = ' - ' . $data['notelp'][$key] . "\n";
                }else{
                    $registrants['nama'] .= ' - ' . $nama . "\n";
                    $registrants['instansi'] .= ' - ' . $data['instansi'][$key] . "\n";
                    $registrants['email'] .= ' - ' . $data['email'][$key] . "\n";
                    $registrants['notelp'] .= ' - ' . $data['notelp'][$key] . "\n";    
                }
            }
            $file = $request->file('bukti_bayar');
            $registrants['bukti_bayar'] = $this->FetchApiController->uploadToAPI($request->input('nama')[0]."-".$request->input('bundle')."-workshop." . $file->extension(), $file);
            $registrants['bundle'] = $request->input('bundle');
            // $registrants['bukti_bayar'] = $request->input('nama')[0];
        
            workshop_registrants::create($registrants);

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
