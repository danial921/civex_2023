<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('/login', function () {return view('authentication.login');});
Route::get('/register', function () {return view('authentication.register');});
Route::get('/forgetpassword', function () {return view('authentication.forgetpassword');});
Route::get('/dashboard', function () {return view('general.dashboard',
    [
        'username' => 'Danial Farros'
    ]);
});

Route::get('/form-gec', function () {return view('general.form-pendaftaran-gec',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.150,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
    ]);
});

Route::get('/form-cpcc', function () {return view('general.form-pendaftaran-cpcc',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.250,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
    ]);
});

Route::get('/form-cesc', function () {return view('general.form-pendaftaran-cesc',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
    ]);
});

Route::get('/gec-verifikasi1', function () {return view('gec.verifikasi_1',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
    ]);
});

Route::get('/gec-formulirtim', function () {return view('gec.form_lengkap',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember'
    ]);
});





Route::get('/test', function () {
    return view('test');
});
