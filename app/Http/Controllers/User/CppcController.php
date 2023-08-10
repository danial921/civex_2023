<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\cppc\CppcBiodataRequest;
use App\Models\cppc_form;
use App\Models\User;
use App\Http\Controllers\GoogleDriveController;

class CppcController extends Controller
{
    public function CPPC(){
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        return view('cpcc.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status
        ]);
    }

    public function CPPC_verifikasi(){
        if(auth()->user()->status === '2' || auth()->user()->status === '3' || auth()->user()->status === '31'){
            return redirect('/cppc');
        }
        return view('cpcc.verifikasi_1', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status
        ]);
    }

    public function CPPC_biodata(){
        if(auth()->user()->status === '2' || auth()->user()->status === '3' || auth()->user()->status === '31'){
            return redirect('/cppc');
        }

        $data = cppc_form::where('id_user', auth()->user()->id)->first();

        return view('cpcc.form_lengkap', [
            'username' => auth()->user()->name,
            'nomerhp' => $data->ketua_notelp,
            'namatim' => $data->nama_tim,
            'institusi' => $data->institusi,
            'email' => $data->ketua_email
        ]);
    }


    public function store_CPPC_biodata(CppcBiodataRequest $request){

        $gdriveController = new GoogleDriveController();

        cppc_form::where('id_user', auth()->user()->id)->update([
            'nama_tim' => $request->nama_tim,
            'institusi' => $request->institusi,
            'alamat_institusi' => $request->alamat_institusi,
            'ketua_nama' => $request->ketua_nama,
            'ketua_prodi' => $request->ketua_prodi,
            'ketua_notelp' => $request->notelp,
            'ketua_email' => $request->email,
            'ketua_nim' => $request->ketua_nim,
            'ketua_ktm' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_ketua_ktm", $request->file('ketua_ktm')),
            'ketua_sk' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_ketua_sk", $request->file('ketua_sk')),
            'anggota1_nama' => 'required',
            'anggota1_prodi' => 'required',
            'anggota1_nim' => 'required',
            'anggota1_notelp' => 'required|numeric',
            'anggota1_email' => 'required|email',
            'anggota1_ktm' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_anggota1_ktm", $request->file('anggota1_ktm')),
            'anggota1_sk' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_anggota1_sk", $request->file('anggota1_sk')),
            'anggota2_nama' => 'required',
            'anggota2_prodi' => 'required',
            'anggota2_nim' => 'required',
            'anggota2_notelp' => 'required|numeric',
            'anggota2_email' => 'required|email',
            'anggota2_ktm' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_anggota2_ktm", $request->file('anggota2_ktm')),
            'anggota2_sk' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_anggota2_sk", $request->file('anggota2_sk')),
            'form_pendaftaran' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_form_pendaftaran", $request->file('form_pendaftaran')),
            'status_tim' => '12'
        ]);

        User::where('id', auth()->user()->id)->update([
            'status' => '12'
        ]);

        return redirect('/cppc/verifikasi');
    }
}
