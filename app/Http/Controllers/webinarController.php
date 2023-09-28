<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\webinarRequest;
use App\Models\webinar_registrants;
use App\Http\Controllers\FetchApiController;
use App\Notifications\webworkNotification;
use Illuminate\Support\Facades\Notification;

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
            $registrants['email'] = $data['email'];
            $registrants['instansi'] = $data['instansi'];

            $file = $request->file('bukti_bayar');
            $registrants['bukti_bayar'] = $this->FetchApiController->uploadToAPI($request->input('nama')."-webinar." . $file->extension(), $file);

            // $registrants['bukti_bayar'] = "aaa";
            $webinar = webinar_registrants::create($registrants);

            $unique_code = 'CIVEX2';
            if($webinar->id < 10){
                $unique_code .= '00' . $webinar->id;
            }elseif($webinar->id < 100){
                $unique_code .= '0' . $webinar->id;
            }elseif($webinar->id < 1000){
                $unique_code .= $webinar->id;
            }

            webinar_registrants::where('id', $webinar->id)->update([
                'unique_code' => $unique_code
            ]);

            $webinarNew = webinar_registrants::find($webinar->id);

            Notification::route('mail', $webinarNew->email)->notify(new webworkNotification([
                'nama_tim' => $webinarNew->nama,
                'subject' => '[CIVIL EXPO ITS 2023]',
                'pesan' => 'Your registration is confirmed! Thanks for your enthusiasm in participating in Webinar ITS Civil Engineering Expo (CIVEX) 2023.' ,
                'pesan2' => "For further information, please join us via the link below ⬇
                https://chat.whatsapp.com/BWiLpEDFJVBBTI3V06z174

                If you have any inquiries, do not hesitate to contact us
                Nathan
                dg1344
                087729772745 ,

                Ica
                chachaa7_
                085369346806",
                'kode' => $webinarNew->unique_code
            ]));

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
