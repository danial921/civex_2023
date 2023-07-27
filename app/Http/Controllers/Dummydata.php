<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Dummydata
{

    public function userdata(){
        $userdata =     [
            'username' => 'Danial Farros',
            'email' => 'example@gmail.com',
            'nomerhp' => '1234567891',
            'biaya_daftar' => 'Rp.300,000,00',
            'rekening_transfer' => '12345678991 (BCA)',
            'namatim' => 'WibuWotaBerdsatu',
            'institusi' => 'Institut Teknologi Sepuluh Nopember'
        ];
        return $userdata;
    }
}
