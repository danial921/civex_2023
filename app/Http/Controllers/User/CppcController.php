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
use App\Http\Controllers\FetchApiController;

class CppcController extends Controller
{
    public function __construct(){
        $this->FetchApiController = new FetchApiController();
    }

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
            'ketua_notelp' => $request->ketua_notelp,
            'ketua_email' => $request->ketua_email,
            'ketua_nim' => $request->ketua_nim,
            'ketua_ktm' => $this->FetchApiController->uploadToAPI($request->nama_tim."_CPPC_ketua_ktm.".$request->file('ketua_ktm')->extension(), $request->file('ketua_ktm')),
            'ketua_sk' => $this->FetchApiController->uploadToAPI($request->nama_tim."_CPPC_ketua_sk.".$request->file('ketua_sk')->extension(), $request->file('ketua_sk')),
            'anggota1_nama' => $request->anggota1_nama,
            'anggota1_prodi' => $request->anggota1_prodi,
            'anggota1_nim' => $request->anggota1_nim,
            'anggota1_notelp' => $request->anggota1_notelp,
            'anggota1_email' => $request->anggota1_email,
            'anggota1_ktm' => $this->FetchApiController->uploadToAPI($request->nama_tim."_CPPC_anggota1_ktm.".$request->file('anggota1_ktm')->extension(), $request->file('anggota1_ktm')),
            'anggota1_sk' => $this->FetchApiController->uploadToAPI($request->nama_tim."_CPPC_anggota1_sk.".$request->file('anggota1_sk')->extension(), $request->file('anggota1_sk')),
            'anggota2_nama' => $request->anggota2_nama,
            'anggota2_prodi' => $request->anggota2_prodi,
            'anggota2_nim' => $request->anggota2_nim,
            'anggota2_notelp' => $request->anggota2_notelp,
            'anggota2_email' => $request->anggota2_email,
            'anggota2_ktm' => $this->FetchApiController->uploadToAPI($request->nama_tim."_CPPC_anggota2_ktm.".$request->file('anggota2_ktm')->extension(), $request->file('anggota2_ktm')),
            'anggota2_sk' => $this->FetchApiController->uploadToAPI($request->nama_tim."_CPPC_anggota2_sk.".$request->file('anggota2_sk')->extension(), $request->file('anggota2_sk')),
            'form_pendaftaran' => $this->FetchApiController->uploadToAPI($request->nama_tim."_CPPC_form_pendaftaran.".$request->file('form_pendaftaran')->extension(), $request->file('form_pendaftaran')),
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

        return view('cpcc.aanwijzing', [
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

        return view('cpcc.detail-aanwijzing', [
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

        return redirect('/cppc/aanwijzing');
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
            'submission_proposal' => $this->FetchApiController->uploadToAPI($request->nama_tim."_cppc_proposal.".$request->file('submission_proposal')->extension(), $request->file('submission_proposal')),
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
            'ppt' => $this->FetchApiController->uploadToAPI($request->nama_tim."_cppc_ppt.".$request->file('ppt')->extension(), $request->file('ppt')),
            'url_video' => $request->input('url_video')
        ]);

        return redirect('/cppc/submission-final');
    }
}
