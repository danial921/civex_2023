<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\gec\GecBiodataRequest;
use App\Models\gec_form;
use App\Models\User;
use App\Http\Controllers\GoogleDriveController;

class GecController extends Controller
{
    public function GEC(){
        if(auth()->user()->status == '-' || auth()->user()->status == '00' || auth()->user()->status == '-1'){
            return redirect('/gec/verifikasi');
        }

        return view('gec.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status      
        ]);
    }

    public function GEC_verifikasi(){
        return view('gec.verifikasi_1', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status
        ]);
    }

    public function GEC_biodata(){
        if(auth()->user()->status == '-' || auth()->user()->status == '00' || auth()->user()->status == '-1'){
            return redirect('/gec/verifikasi');
        }

        $data = gec_form::where('id_user', auth()->user()->id)->first();
        
        return view('gec.form_lengkap', [
            'username' => auth()->user()->name,
            'ketua_nama' => $data->ketua_nama,
            'nomerhp' => $data->ketua_notelp,
            'namatim' => $data->nama_tim,
            'institusi' => $data->institusi
        ]);
    }

    public function store_GEC_biodata(GecBiodataRequest $request){

        $gdriveController = new GoogleDriveController();
        
        gec_form::where('id_user', auth()->user()->id)->update([
            'nama_tim' => $request->nama_tim, 
            'institusi' => $request->institusi, 
            'alamat_institusi' => $request->alamat_institusi,
            'dosen_pembimbing' => $request->dosen_pembimbing,
            'ketua_nama' => $request->ketua_nama,
            'ketua_prodi' => $request->ketua_prodi, 
            'ketua_notelp' => $request->ketua_notelp,
            'ketua_nim' => $request->ketua_nim,
            'anggota1_nama' => $request->anggota1_nama,
            'anggota1_prodi' => $request->anggota1_prodi,
            'anggota1_nim' => $request->anggota_nim,
            'anggota2_nama' => $request->anggota2_nama,
            'anggota2_prodi' => $request->anggota2_prodi,
            'anggota2_nim' => $request->anggota2_nim,
            'file_zip' => $gdriveController->uploadImageToGDrive($request->nama_tim."_GEC_dokumen", $request->file('file_zip')),
            'status_tim' => "12"
        ]);

        User::where('id', auth()->user()->id)->update([
            'status' => '12'
        ]);

        return redirect('/gec/verifikasi');
    }
}
