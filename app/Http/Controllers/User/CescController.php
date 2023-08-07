<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\cesc\CescBiodataRequest;
use App\Models\cesc_form;
use App\Models\User;
use App\Http\Controllers\GoogleDriveController;

class CescController extends Controller
{
    public function CESC(){
        if(auth()->user()->status == '00' || auth()->user()->status == '-1'){
            return redirect('/cesc/verifikasi');
        }

        return view('cesc.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status    
        ]);
    }

    public function CESC_verifikasi(){
        return view('cesc.verifikasi_1', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status
        ]);
    }

    public function CESC_biodata(){
        if(auth()->user()->status == '00' || auth()->user()->status == '-1'){
            return redirect('/cesc/verifikasi');
        }

        $data = cesc_form::where('id_user', auth()->user()->id)->first();
        // dd(gettype($data));
        return view('cesc.form_lengkap', [
            'username' => auth()->user()->name,
            'nomerhp' => $data->ketua_notelp,
            'namatim' => $data->nama_tim,
            'institusi' => $data->sekolah
        ]);
    }
    
    public function store_CESC_biodata(CescBiodataRequest $request){

        $gdriveController = new GoogleDriveController();

        cesc_form::where('id_user', auth()->user()->id)->update([
            'nama_tim' => $request->nama_tim, 
            'sekolah' => $request->sekolah, 
            'ketua_nama' => $request->ketua_nama,
            'ketua_notelp' => $request->ketua_notelp,
            'ketua_kelas' => $request->ketua_kelas,
            'ketua_kartu' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_ketua_ktm", $request->file('ketua_kartu')),
            'ketua_foto' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_ketua_foto", $request->file('ketua_foto')),
            'ketua_follow' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_ketua_follow", $request->file('ketua_follow')),
            'ketua_twibbon' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_ketua_twibbon", $request->file('ketua_twibbon')),
            'anggota_nama' => $request->anggota_nama,
            'anggota_notelp' => $request->anggota_notelp,
            'anggota_kelas' => $request->anggota_kelas,
            'anggota_kartu' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_anggota_ktm", $request->file('anggota_kartu')),
            'anggota_foto' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_anggota_foto", $request->file('anggota_foto')),
            'anggota_follow' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_anggota_follow", $request->file('anggota_follow')),
            'anggota_twibbon' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_anggota_twibbon", $request->file('anggota_twibbon')),
            'status_tim' => '12'
        ]);

        User::where('id', auth()->user()->id)->update([
            'status' => '12'
        ]);

        return redirect('/cesc/verifikasi');
    }
}
