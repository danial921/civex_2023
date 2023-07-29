<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dummmudata;
use Carbon\Carbon;
use App\Http\Controllers\Auth\RegisteredUserController;
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

// Route::group([
//     'middleware' => 'guest',
// ],function () {
    
// });
Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])
    ->name('register');





Route::get('/login', function () {return view('authentication.login');});
// Route::get('/register', function () {return view('authentication.register');});
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

Route::get('/gec', function () {return view('gec.dashboard',
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

Route::get('/gec/verifikasi', function () {return view('gec.verifikasi_1',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
    ]);
});

Route::get('/gec/formulirtim', function () {return view('gec.form_lengkap',
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

Route::get('/gec/soal', function () {return view('gec.soal',
    [
        'time' => Carbon::now()->addDays(3),
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Pembagian Soal /Kasus'
    ]);
});

Route::get('/gec/aanwijizing', function () {
    $questions = [
        ['penanya' => 'User1', 'judul_pertanyaan' => 'Pertanyaan 1', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 1'],
        ['penanya' => 'User2', 'judul_pertanyaan' => 'Pertanyaan 2', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 2'],
        ['penanya' => 'User3', 'judul_pertanyaan' => 'Pertanyaan 3', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 3'],
        ['penanya' => 'User4', 'judul_pertanyaan' => 'Pertanyaan 4', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 4'],
        ['penanya' => 'User5', 'judul_pertanyaan' => 'Pertanyaan 5', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 5'],
        ['penanya' => 'User6', 'judul_pertanyaan' => 'Pertanyaan 6', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 6'],
        ['penanya' => 'User7', 'judul_pertanyaan' => 'Pertanyaan 7', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 7'],
        ['penanya' => 'User8', 'judul_pertanyaan' => 'Pertanyaan 8', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 8'],
        ['penanya' => 'User9', 'judul_pertanyaan' => 'Pertanyaan 9', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 9'],
        ['penanya' => 'User10', 'judul_pertanyaan' => 'Pertanyaan 10', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 10']
    ];
    return view('gec.aanwijizing',[
        'time' => Carbon::now()->addDays(3),
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Aanwizing',
        'judulAanwijzing' => 'Lorem ipsum sir dolor amet',
        'pertanyaanAanwijzing' => '1.Mengapa bumi bulat ?. 2.Sejak kapan lalala test test',
        'jawabanAanwijizing' => '1betul. 2.Betul',
        'questions' => $questions
    ]);
});

Route::get('/gec/detail-aanwijizing', function () {
    return view('gec.detail-aanwijizing',[
        'time' => Carbon::now()->addDays(3),
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Aanwizing',
        'judulAanwijzing' => 'Lorem ipsum sir dolor amet',
        'pertanyaanAanwijzing' => '1.Mengapa bumi bulat ?. 2.Sejak kapan lalala test test',
        'jawabanAanwijizing' => '1betul. 2.Betul',
    ]);
});

Route::get('/gec/submission', function () {
    return view('gec.submission',[
        'time' => Carbon::now()->addDays(3),
        'dosenpembimbing' => 'Abdul',
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'ketuatim' => 'Aushaf Amrega Hisyam',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Aanwizing',
        'judulAanwijzing' => 'Lorem ipsum sir dolor amet',
        'pertanyaanAanwijzing' => '1.Mengapa bumi bulat ?. 2.Sejak kapan lalala test test',
        'jawabanAanwijizing' => '1betul. 2.Betul',
    ]);
});

Route::get('/cpcc/verifikasi', function () {return view('cpcc.verifikasi_1',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
    ]);
});

Route::get('/cpcc/formulirtim', function () {return view('cpcc.form_lengkap',
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

Route::get('/cpcc', function () {return view('cpcc.dashboard',
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

Route::get('/cpcc/soal', function () {return view('cpcc.soal',
    [
        'time' => Carbon::now()->addDays(3),
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Pembagian Soal /Kasus'
    ]);
});

Route::get('/cpcc/aanwijizing', function () {
    $questions = [
        ['penanya' => 'User1', 'judul_pertanyaan' => 'Pertanyaan 1', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 1'],
        ['penanya' => 'User2', 'judul_pertanyaan' => 'Pertanyaan 2', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 2'],
        ['penanya' => 'User3', 'judul_pertanyaan' => 'Pertanyaan 3', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 3'],
        ['penanya' => 'User4', 'judul_pertanyaan' => 'Pertanyaan 4', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 4'],
        ['penanya' => 'User5', 'judul_pertanyaan' => 'Pertanyaan 5', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 5'],
        ['penanya' => 'User6', 'judul_pertanyaan' => 'Pertanyaan 6', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 6'],
        ['penanya' => 'User7', 'judul_pertanyaan' => 'Pertanyaan 7', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 7'],
        ['penanya' => 'User8', 'judul_pertanyaan' => 'Pertanyaan 8', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 8'],
        ['penanya' => 'User9', 'judul_pertanyaan' => 'Pertanyaan 9', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 9'],
        ['penanya' => 'User10', 'judul_pertanyaan' => 'Pertanyaan 10', 'deskripsi_pertanyaan' => 'Deskripsi pertanyaan 10']
    ];
    return view('cpcc.aanwijizing',[
        'time' => Carbon::now()->addDays(3),
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Aanwizing',
        'judulAanwijzing' => 'Lorem ipsum sir dolor amet',
        'pertanyaanAanwijzing' => '1.Mengapa bumi bulat ?. 2.Sejak kapan lalala test test',
        'jawabanAanwijizing' => '1betul. 2.Betul',
        'questions' => $questions
    ]);
});

Route::get('/cpcc/submission', function () {
    return view('cpcc.submission',[
        'time' => Carbon::now()->addDays(3),
        'dosenpembimbing' => 'Abdul',
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'ketuatim' => 'Aushaf Amrega Hisyam',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Aanwizing',
        'judulAanwijzing' => 'Lorem ipsum sir dolor amet',
        'pertanyaanAanwijzing' => '1.Mengapa bumi bulat ?. 2.Sejak kapan lalala test test',
        'jawabanAanwijizing' => '1betul. 2.Betul',
    ]);
});

Route::get('/cpcc/submission-final', function () {
    return view('cpcc.berkasfinal',[
        'time' => Carbon::now()->addDays(3),
        'dosenpembimbing' => 'Abdul',
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'ketuatim' => 'Aushaf Amrega Hisyam',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'Institut Teknologi Sepuluh Nopember',
        'countDownName' => 'Aanwizing',
        'judulAanwijzing' => 'Lorem ipsum sir dolor amet',
        'pertanyaanAanwijzing' => '1.Mengapa bumi bulat ?. 2.Sejak kapan lalala test test',
        'jawabanAanwijizing' => '1betul. 2.Betul',
    ]);
});

Route::get('/cesc', function () {return view('cesc.dashboard',
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

Route::get('/cesc/verifikasi', function () {return view('cesc.verifikasi_1',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
    ]);
});

Route::get('/cesc/formulirtim', function () {return view('cesc.form_lengkap',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'SMA Negeri 1 Gresik'
    ]);
});

Route::get('/cesc/penyisihan', function () {return view('cesc.penyisihan',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'SMA Negeri 1 Gresik',
        'usernamelomba' => 'danial921',
        'pwlomba'   => 'hade'
    ]);
});

Route::get('/cesc/semifinal', function () {return view('cesc.semifinal',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'SMA Negeri 1 Gresik',
        'usernamelomba' => 'danial921',
        'pwlomba'   => 'hade'
    ]);
});

Route::get('/cesc/submission-semifinal', function () {return view('cesc.submission_semifinal',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'SMA Negeri 1 Gresik',
        'usernamelomba' => 'danial921',
        'pwlomba'   => 'hade'
    ]);
});

Route::get('/cesc/final', function () {return view('cesc.final',
    [
        'username' => 'Danial Farros',
        'email' => 'example@gmail.com',
        'nomerhp' => '1234567891',
        'biaya_daftar' => 'Rp.300,000,00',
        'rekening_transfer' => '12345678991 (BCA)',
        'namatim' => 'WibuWotaBerdsatu',
        'institusi' => 'SMA Negeri 1 Gresik',
        'usernamelomba' => 'danial921',
        'pwlomba'   => 'hade'
    ]);
});

Route::get('/test', function () {
    return view('test');
});
