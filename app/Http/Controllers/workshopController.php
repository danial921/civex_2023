<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\workshopRegisterRequest;
use App\Models\workshop_registrants;
use App\Http\Controllers\FetchApiController;
use App\Notifications\webworkNotification;
use Illuminate\Support\Facades\Notification;

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
            // $registrants['bukti_bayar'] = $this->FetchApiController->uploadToAPI($request->input('nama')[0]."-".$request->input('bundle')."-workshop." . $file->extension(), $file);
            $registrants['bundle'] = $request->input('bundle');
            $registrants['bukti_bayar'] = $request->input('nama')[0];
        
            $workshop = workshop_registrants::create($registrants);

            $unique_code = 'CIVEX1';
            if($workshop->id < 10){
                $unique_code .= '00' . $workshop->id;
            }elseif($workshop->id < 100){
                $unique_code .= '0' . $workshop->id;
            }elseif($workshop->id < 1000){
                $unique_code .= $workshop->id;
            }

            workshop_registrants::where('id', $workshop->id)->update([
                'unique_code' => $unique_code
            ]);

            $workshopNew = workshop_registrants::find($workshop->id);

            foreach($request->input('nama') as $key => $nama){
                Notification::route('mail', $data['email'][$key])->notify(new webworkNotification([
                    'nama_tim' => $nama,
                    'subject' => 'Workshop Civil Expo',
                    'pesan' => 'Your Registration Number is ' . $workshopNew->unique_code,
                    'pesan2' => "The National Seminar will be held via ZOOM so please be prepared to avoid any issues. Other Following information will be added later through email",
                ]));
            }
            

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
