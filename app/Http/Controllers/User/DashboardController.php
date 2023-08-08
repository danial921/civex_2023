<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gec_form;
use App\Models\cppc_form;
use App\Models\cesc_form;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\gec\GecFormRequest;
use App\Http\Requests\cppc\CppcFormRequest;
use App\Http\Requests\cesc\CescFormRequest;
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
        $urutan = 0;
        $daftar_ke = gec_form::where('id_user', auth()->user()->id)->first();
        $count = gec_form::count();
        if($count){
            $urutan = $count;
        }elseif($daftar_ke){
            $urutan = $daftar_ke->id;
        }
        
        if($urutan <= 15){
            $harga = 'Rp.250,000,00';
        }else{
            $harga = 'Rp.300,000,00';
        }
        
        return view('general.form-pendaftaran-gec',
        [
            'username' => auth()->user()->name,
            "email" => auth()->user()->email,
            'nomerhp' => auth()->user()->no_telp,
            'biaya_daftar' => $harga,
            'rekening_transfer' => '12345678991 (BCA)',
            'urutan' => $urutan,
            'id' => 0,
            'count' => $count

        ]);
    }

    public function store_form_gec(GecFormRequest $request)
    {
        $gdriveController = new GoogleDriveController();
        
        gec_form::create([
            'id_user' => auth()->user()->id,
            'nama_tim' => $request->nama_tim, 
            'ketua_nama' => $request->ketua_nama, 
            'institusi' => $request->institusi,
            'ketua_email' => auth()->user()->email,
            'ketua_notelp' => $request->ketua_notelp,
            'bukti_bayar' => $gdriveController->uploadImageToGDrive($request->nama_tim."_GEC_bukti-bayar", $request->file('bukti_bayar')),
            'status_tim' => '00'
        ]);  

        $record = User::find(auth()->user()->id);
        if ($record) {
            $record->status = '00';
            $record->status_comp = 'GEC';

            $record->save();
        }
        return redirect('/gec/verifikasi');
        // return response()->json(['message' => "Success"]);
    }

    public function form_cppc(){
        if(auth()->user()->status != '-' && auth()->user()->status != '01'){
            return redirect('/cppc');
        }
        $daftar_ke = cppc_form::where('id_user', auth()->user()->id)->first(); 
        $urutan = 0;
        $count = cppc_form::count();
        if($count){
            $urutan = $count;
        }elseif($daftar_ke){
            $urutan = $daftar_ke->id;
        }

        if($urutan <= 5){
            $harga = 'Rp.150,000,00';
        }else{
            $harga = 'Rp.180,000,00';
        }
        
        return view('general.form-pendaftaran-cpcc',
        [
            'username' => auth()->user()->name,
            "email" => auth()->user()->email,
            'nomerhp' => auth()->user()->no_telp,
            'biaya_daftar' => $harga,
            'rekening_transfer' => '12345678991 (BCA)',
            'urutan' => $urutan
        ]);
    }

    public function store_form_cppc(CppcFormRequest $request){
        $gdriveController = new GoogleDriveController();

        cppc_form::create([
            'id_user' => auth()->user()->id,
            'nama_tim' => $request->nama_tim, 
            'ketua_nama' => $request->ketua_nama, 
            'institusi' => $request->institusi,
            'ketua_email' => auth()->user()->email,
            'ketua_notelp' => $request->ketua_notelp,
            'bukti_bayar' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CPPC_bukti-bayar", $request->file('bukti_bayar')),
            'status_tim' => '00'
        ]);  

        $record = User::find(auth()->user()->id);
        if ($record) {
            $record->status = '00';
            $record->status_comp = 'CPPC';

            $record->save();

        }

        return redirect('/cppc/verifikasi');
    }

    public function form_cesc(){
        if(auth()->user()->status != '-' && auth()->user()->status != '01'){
            return redirect('/cesc');
        }
        $daftar_ke = cesc_form::where('id_user', auth()->user()->id)->first(); 
        $urutan = 0;
        $count = cesc_form::count();
        if($count){
            if($daftar_ke->id == $count) $urutan = $count;
            else $urutan = $daftar_ke->id;
        }

        if($urutan <= 15){
            $harga = 'Rp.65,000,00';
        }else{
            $harga = 'Rp.75,000,00';
        }
        
        return view('general.form-pendaftaran-cesc',
        [
            'username' => auth()->user()->name,
            "email" => auth()->user()->email,
            'nomerhp' => auth()->user()->no_telp,
            'biaya_daftar' => $harga,
            'rekening_transfer' => '12345678991 (BCA)',
            'urutan' => $urutan
        ]);
    }

    public function store_form_cesc(CescFormRequest $request){
        $gdriveController = new GoogleDriveController();
        
        cesc_form::create([
            'id_user' => auth()->user()->id,
            'nama_tim' => $request->nama_tim, 
            'ketua_nama' => $request->ketua_nama, 
            'sekolah' => $request->sekolah,
            'ketua_email' => auth()->user()->email,
            'ketua_notelp' => $request->ketua_notelp,
            'bukti_bayar' => $gdriveController->uploadImageToGDrive($request->nama_tim."_CESC_bukti-bayar", $request->file('bukti_bayar')),
            'status_tim' => '00'
        ]);  

        $record = User::find(auth()->user()->id);
        if ($record) {
            $record->status = '00';
            $record->status_comp = 'CESC';

            $record->save();
        }

        return redirect('/cesc/verifikasi');
    }
}   