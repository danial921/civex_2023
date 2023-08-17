<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\cppc\CppcBiodataRequest;
use App\Http\Requests\cppc\aanwizingRequest;
use App\Http\Requests\cppc\ProposalRequest;
use App\Http\Requests\cppc\KebutuhanFinalRequest;
use App\Models\cppc_form;
use App\Models\User;
use App\Http\Controllers\GoogleDriveController;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CppcController extends Controller
{
    public function CPPC(){
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        $data = cppc_form::where('id_user', auth()->user()->id)->first();

        return view('cpcc.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'status_proposal' => $data->status_proposal
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
            'ketuatim' => $data->ketua_nama,
            'namatim' => $data->nama_tim,
            'institusi' => $data->institusi,
            'email' => $data->ketua_email,
            'status' => auth()->user()->status,
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


    public function CPPC_soal()
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        return view('cpcc.soal', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'countDownName' => 'Soal',
            'time' => carbon::create(2023, 10, 9)
        ]);
    }

    public function CPPC_aanwijizing()
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        // if(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-13 23:59:59')){
        //     return redirect('/cppc');
        // }

        $data = DB::table('cppc_teams')->get();
        $dataTim = cppc_form::where('id_user', auth()->user()->id)->first();

        return view('cpcc.aanwijizing', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'questions' => $data,
            'aanwijizing_tanya' => $dataTim->aanwijzing_tanya,
            'pertanyaanAanwijzing' => $dataTim->aanwijzing_tanya,
            'jawabanAanwijizing' => $dataTim->aanwijzing_jawab,
            'judulAanwijzing' => $dataTim->aanwijzing_judul
        ]);
    }

    public function CPPC_detail_aanwijizing($id)
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }
        $dataPeserta = DB::table('cppc_teams')->where('id',$id)->first();

        return view('cpcc.detail-aanwijizing', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'judulAanwijzing' => $dataPeserta->aanwijzing_judul,
            'pertanyaanAanwijzing' => $dataPeserta->aanwijzing_tanya,
            'jawabanAanwijizing' =>  $dataPeserta->aanwijzing_jawab
        ]);
    }

    public function store_CPPC_aanwijizing(aanwizingRequest $request)
    {

        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        $data = cppc_form::where('id_user', auth()->user()->id)->first();

        cppc_form::where('id_user', auth()->user()->id)->update([
            'aanwijzing_tanya' => $request->input('aanwijzing_tanya'),
            'aanwijzing_judul' => $request->input('aanwijzing_judul'),
        ]);

        return redirect('/cppc/aanwijizing');
    }

    public function CPPC_submission()
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        $data = cppc_form::where('id_user', auth()->user()->id)->first();

        return view('cpcc.submission', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'status_proposal' => $data->status_proposal,
            'namatim' => $data->nama_tim,
            'institusi' => $data->institusi,
            'ketuatim' => $data->ketua_nama,
            'dosenpembimbing' => $data->dosen_pembimbing,

        ]);
    }

    public function store_cppc_submission(ProposalRequest $request)
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        $data = cppc_form::where('id_user', auth()->user()->id)->first();
        $gdriveController = new GoogleDriveController();
        cppc_form::where('id_user', auth()->user()->id)->update([
            'submission_proposal' => $gdriveController->uploadImageToGDrive($request->nama_tim."_cppc_proposal", $request->file('submission_proposal')),
            'status_proposal' => '1'
        ]);

        return redirect('/cppc/submission');
    }

    public function CPPC_berkas_final()
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        $data = cppc_form::where('id_user', auth()->user()->id)->first();

        return view('cpcc.berkasfinal-form', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'status_proposal' => $data->status_proposal,
            'namatim' => $data->nama_tim,
            'institusi' => $data->institusi,
            'ketuatim' => $data->ketua_nama,
            'dosenpembimbing' => $data->dosen_pembimbing,

        ]);
    }

    public function store_CPPC_berkas_final(KebutuhanFinalRequest $request)
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/cppc/verifikasi');
        }

        $data = cppc_form::where('id_user', auth()->user()->id)->first();
        $gdriveController = new GoogleDriveController();
        cppc_form::where('id_user', auth()->user()->id)->update([
            'ppt' => $gdriveController->uploadImageToGDrive($request->nama_tim."_cppc_ppt", $request->file('ppt')),
            'url_video' => $request->input('url_video')
        ]);

        return redirect('/cppc/submission-final');
    }
}
