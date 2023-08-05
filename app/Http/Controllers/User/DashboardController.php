<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gec_form;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\gec\GecFormRequest;
use App\Http\Controllers\GoogleDriveController;


class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('general.dashboard',
        [
            "username" => auth()->user()->name,
        ]);
    }

    public function form_gec()
    {
        if(auth()->user()->status != '-' && auth()->user()->status != '01'){
            return redirect('/gec');
        }

        return view('general.form-pendaftaran-gec',
        [
            'username' => auth()->user()->name,
            "email" => auth()->user()->email,
            'nomerhp' => auth()->user()->no_telp,
            'biaya_daftar' => 'Rp.250,000,00',
            'rekening_transfer' => '12345678991 (BCA)',
        ]);
    }

    public function store_form_gec(GecFormRequest $request)
    {
        // $gdriveController = new GoogleDriveController();

        // return response()->json(['message' => $gdriveController->uploadImageToDrive($request->nama_tim, $request->file('bukti_bayar'))]);
        // gec_form::create([
        //     'id_user' => auth()->user()->id,
        //     'nama_tim' => $request->nama_tim, 
        //     'ketua_nama' => $request->ketua_nama, 
        //     'institusi' => $request->institusi,
        //     'email' => auth()->user()->email,
        //     'ketua_notelp' => $request->ketua_notelp,
        //     'bukti_bayar' => $gdriveController->uploadImageToDrive($request->nama_tim, $request->file('bukti_bayar'))
        // ]);

        return response()->json(['message' => 'Registration competition successful']);
    }
}   
