<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\gec\GecBiodataRequest;
use App\Http\Requests\gec\aanwizingRequest;
use App\Http\Requests\gec\ProposalRequest;
use App\Models\gec_form;
use App\Models\User;
use App\Http\Controllers\GoogleDriveController;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FetchApiController;

class GecController extends Controller
{
    public function __construct(){
        $this->FetchApiController = new FetchApiController();
    }

    public function GEC(){
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/gec/verifikasi');
        }

        $data = gec_form::where('id_user', auth()->user()->id)->first();

        return view('gec.dashboard', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'status_proposal' => $data->status_proposal
        ]);
    }

    public function GEC_verifikasi(){
        if(auth()->user()->status === '2' || auth()->user()->status === '3' || auth()->user()->status === '31'){
            return redirect('/gec');
        }
        return view('gec.verifikasi_1', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status
        ]);
    }

    public function GEC_biodata(){
        if(auth()->user()->status === '2' || auth()->user()->status === '3' || auth()->user()->status === '31'){
            return redirect('/gec');
        }

        $data = gec_form::where('id_user', auth()->user()->id)->first();

        return view('gec.form_lengkap', [
            'username' => auth()->user()->name,
            'ketua_nama' => $data->ketua_nama,
            'nomerhp' => $data->ketua_notelp,
            'namatim' => $data->nama_tim,
            'institusi' => $data->institusi,
            'status' => auth()->user()->status
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
            'anggota1_nim' => $request->anggota1_nim,
            'anggota2_nama' => $request->anggota2_nama,
            'anggota2_prodi' => $request->anggota2_prodi,
            'anggota2_nim' => $request->anggota2_nim,
            'file_zip' => $this->FetchApiController->uploadToAPI($request->nama_tim."_GEC_dokumen.".$request->file('file_zip')->extension(), $request->file('file_zip')),
            'status_tim' => "12"
        ]);

        User::where('id', auth()->user()->id)->update([
            'status' => '12'
        ]);

        return redirect('/gec/verifikasi');
    }

    public function GEC_soal()
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/gec/verifikasi');
        }

        return view('gec.soal', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'countDownName' => 'Soal',
            'time' => carbon::create(2023, 10, 9)
        ]);
    }

    public function GEC_aanwijizing()
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/gec/verifikasi');
        }

        // if(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-13 23:59:59')){
        //     return redirect('/gec');
        // }

        $data = DB::table('gec_teams')->get();
        $dataTim = gec_form::where('id_user', auth()->user()->id)->first();

        return view('gec.aanwijzing', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'questions' => $data,
            'aanwijizing_tanya' => $dataTim->aanwijzing_tanya,
            'pertanyaanAanwijzing' => $dataTim->aanwijzing_tanya,
            'jawabanAanwijizing' => $dataTim->aanwijzing_jawab,
            'judulAanwijzing' => $dataTim->aanwijzing_judul
        ]);
    }

    public function GEC_detail_aanwijizing($id)
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/gec/verifikasi');
        }
        $dataPeserta = DB::table('gec_teams')->where('id',$id)->first();

        return view('gec.detail-aanwijzing', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'judulAanwijzing' => $dataPeserta->aanwijzing_judul,
            'pertanyaanAanwijzing' => $dataPeserta->aanwijzing_tanya,
            'jawabanAanwijizing' =>  $dataPeserta->aanwijzing_jawab
        ]);
    }

    public function store_GEC_aanwijizing(aanwizingRequest $request)
    {

        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/gec/verifikasi');
        }

        $data = gec_form::where('id_user', auth()->user()->id)->first();

        gec_form::where('id_user', auth()->user()->id)->update([
            'aanwijzing_tanya' => $request->input('aanwijzing_tanya'),
            'aanwijzing_judul' => $request->input('aanwijzing_judul'),
        ]);

        return redirect('/gec/aanwijzing');
    }

    public function GEC_submission()
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/gec/verifikasi');
        }

        $data = gec_form::where('id_user', auth()->user()->id)->first();

        return view('gec.submission', [
            'username' => auth()->user()->name,
            'status' => auth()->user()->status,
            'status_proposal' => $data->status_proposal,
            'namatim' => $data->nama_tim,
            'institusi' => $data->institusi,
            'ketuatim' => $data->ketua_nama,
            'dosenpembimbing' => $data->dosen_pembimbing,

        ]);
    }

    public function store_GEC_submission(ProposalRequest $request)
    {
        if(auth()->user()->status !== '2' && auth()->user()->status !== '3' && auth()->user()->status !== '31'){
            return redirect('/gec/verifikasi');
        }

        $data = gec_form::where('id_user', auth()->user()->id)->first();
        $gdriveController = new GoogleDriveController();
        gec_form::where('id_user', auth()->user()->id)->update([
            'submission_proposal' => $this->FetchApiController->uploadToAPI($request->nama_tim."_GEC_proposal.".$request->file('submission_proposal')->extension(), $request->file('submission_proposal')),
            'status_proposal' => '1',
            'url_video' => $request->input('url_video')
        ]);

        return redirect('/gec/submission');
    }
}
