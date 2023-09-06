<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchApiController extends Controller
{
    public function uploadToAPI($filename, $file){
        $response = Http::attach(
            'file',               // Nama field di form-data
            file_get_contents($file), // Isi file
            $file->getClientOriginalName() // Nama file
        )->post('https://happyhosting.my.id/api/upload', [
            'username' => ENV('API_USER'),
            'password' => ENV('API_PASS'),
            'filename' => $filename,
        ]);

        return $response->json()['url'];
    }
}
