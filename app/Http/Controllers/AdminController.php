<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Notifications\FormNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\gec_team;
use App\Models\cppc_team;

class AdminController extends Controller
{

    public function workshop_dashboard()
    {
        $peserta = DB::table('workshop_registrants')->get();
        $totalPendaftar = DB::table('workshop_registrants')->count();
        // $belumdiReview = DB::table('gec_teams')->where('status_tim','00')->count() + DB::table('gec_teams')->where('status_tim','12')->count();
        // $pembayaranDitolak = DB::table('gec_teams')->where('status_tim','11')->count() + DB::table('gec_teams')->where('status_tim','01')->count();

        return view('admin.workshop.dashboard',
        [
            "username" => "Admin CIVEX 2023",
            "teams" => $peserta,
            'totalPendaftar' => $totalPendaftar,
            // 'belumdiReview' =>$belumdiReview,
            // 'pembayaranDitolak' => $pembayaranDitolak
        ]);

    }

    public function detailpendaftar_workshop($id)
    {
        $dataPeserta = DB::table('workshop_registrants')->where('id',$id)->first();

        return view('admin.workshop.detail',
        [
            'username' => 'Admin CIVEX 2023',
            'dataPeserta' => $dataPeserta,

        ]);
    }

    public function webinar_dashboard()
    {
        $peserta = DB::table('webinar_registrants')->get();
        $totalPendaftar = DB::table('webinar_registrants')->count();
        // $belumdiReview = DB::table('gec_teams')->where('status_tim','00')->count() + DB::table('gec_teams')->where('status_tim','12')->count();
        // $pembayaranDitolak = DB::table('gec_teams')->where('status_tim','11')->count() + DB::table('gec_teams')->where('status_tim','01')->count();

        return view('admin.webinar.dashboard',
        [
            "username" => "Admin CIVEX 2023",
            "teams" => $peserta,
            'totalPendaftar' => $totalPendaftar,
            // 'belumdiReview' =>$belumdiReview,
            // 'pembayaranDitolak' => $pembayaranDitolak
        ]);

    }

    public function detailpendaftar_webinar($id)
    {
        $dataPeserta = DB::table('webinar_registrants')->where('id',$id)->first();

        return view('admin.webinar.detail',
        [
            'username' => 'Admin CIVEX 2023',
            'dataPeserta' => $dataPeserta,

        ]);
    }


    public function gec_dashboard()
    {
        $peserta = DB::table('gec_teams')->get();
        $totalPeserta = DB::table('gec_teams')->count();
        $belumdiReview = DB::table('gec_teams')->where('status_tim','00')->count() + DB::table('gec_teams')->where('status_tim','12')->count();
        $pembayaranDitolak = DB::table('gec_teams')->where('status_tim','11')->count() + DB::table('gec_teams')->where('status_tim','01')->count();


        return view('admin.gec.dashboard',
        [
            "username" => "Admin CIVEX 2023",
            "teams" => $peserta,
            'totalPeserta' => $totalPeserta,
            'belumdiReview' =>$belumdiReview,
            'pembayaranDitolak' => $pembayaranDitolak
        ]);
    }

    public function gec_detailTeam($id)
    {
        $dataPeserta = DB::table('gec_teams')->where('id',$id)->first();

        return view('admin.gec.detail',
        [
            'username' => 'Admin CIVEX 2023',
            'dataPeserta' => $dataPeserta,

        ]);
    }

    public function gec_updateStatus(Request $request, $id){
        DB::table('gec_teams')  // Ganti 'pesertas' dengan nama tabel Anda
        ->where('id', $id)
        ->update(['status_tim' => $request->input('status_tim')]);

        $data = DB::table('gec_teams')->where('id', $id)->first();
        DB::table('users')->where('id', $data->id_user)->update(['status' => $request->input('status_tim')]);

        if($request->input('status_tim') === '1'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Pendaftaran',
                'pesan' => 'Kami ingin memberitahu Anda bahwa data pendaftaran tim Anda telah
                dikonfirmasi. Terima kasih atas partisipasi Anda dalam perlombaan
                Geotechnical Engineering Competition',
                'pesan2' => 'Langkah berikutnya adalah untuk mengisi biodata di link berikut : ',
            ]));
        }elseif($request->input('status_tim') === '01'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Pendaftaran',
                'pesan' => 'Terima kasih atas partisipasi Anda dalam perlombaan Geotechnical Engineering Competition Kami
                ingin memberitahu Anda bahwa data pendaftaran tim Anda telah direview oleh tim. Akan tetapi
                terdapat kesalahan berkas atau data dalam pendaftaran anda',
                'pesan2' => 'Silahkan menghubungi Contact Person',
            ]));
        }elseif($request->input('status_tim') === '11'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Biodata Tim',
                'pesan' => 'Terima kasih atas partisipasi Anda dalam perlombaan Geotechnical Engineering Competition Kami
                ingin memberitahu Anda bahwa biodata tim Anda telah direview oleh tim. Akan tetapi
                terdapat kesalahan berkas atau data dalam biodata tim anda',
                'pesan2' => 'Silahkan mengisi ulang biodata tim anda atau menghubungi Contact Person',
            ]));
        }elseif($request->input('status_tim') === '2'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Biodata Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa biodata tim Anda telah
                dikonfirmasi. Terima kasih atas partisipasi Anda dalam perlombaan
                Geotechnical Engineering Competition',
                'pesan2' => 'Langkah berikutnya adalah untuk mengisi biodata di link berikut : ',
            ]));
        }elseif($request->input('status_tim') === '3'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Lolos Penyisihan Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' lolos babak penyisihan dan maju ke babak final. Terima kasih atas partisipasi Anda dalam perlombaan
                Geotechnical Engineering Competition',
                'pesan2' => 'Selamat atas perjuangannya dan tetap semangat',
            ]));
        }elseif($request->input('status_tim') === '31'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Tidak Lolos Penyisihan Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' tidak lolos babak penyisihan. Terima kasih atas partisipasi Anda dalam perlombaan
                Geotechnical Engineering Competition',
                'pesan2' => 'Tetap semangat dan terus berjuang',
            ]));
        }

        return redirect('admin/detailteam-gec/'.$id);
    }

    public function gec_aanwijizing_table()
    {
        $totalPertanyaan = gec_team::whereNotNull('aanwijzing_tanya')->count();
        $pertanyaanSudahdijawab = gec_team::whereNotNull('aanwijzing_tanya')->whereNotNull('aanwijzing_jawab')->count();
        $pertanyaanBelumTerjawab = gec_team::whereNotNull('aanwijzing_tanya')->whereNull('aanwijzing_jawab')->count();
        $teams = gec_team::whereNotNull('aanwijzing_tanya')->get();


        return view('admin.gec.aanwijizing',
        [
            "username" => "Admin CIVEX 2023",
            "totalPertanyaan" => $totalPertanyaan,
            "pertanyaanSudahdijawab" => $pertanyaanSudahdijawab,
            "pertanyaanBelumTerjawab" => $pertanyaanBelumTerjawab,
            "teams" => $teams,
        ]);
    }

    public function gec_aanwijizing_detail($id)
    {
        {
            $dataPeserta = DB::table('gec_teams')->where('id',$id)->first();

            return view('admin.gec.detail_aanwijizing',
            [
                'username' => 'Admin CIVEX 2023',
                'dataPeserta' => $dataPeserta,

            ]);
        }
    }

    public function cppc_dashboard()
    {
        $peserta = DB::table('cppc_teams')->get();
        $totalPeserta = DB::table('cppc_teams')->count();
        $belumdiReview = DB::table('cppc_teams')->where('status_tim','00')->count() + DB::table('cppc_teams')->where('status_tim','12')->count();
        $pembayaranDitolak = DB::table('cppc_teams')->where('status_tim','11')->count() + DB::table('cppc_teams')->where('status_tim','01')->count();


        return view('admin.cppc.dashboard',
        [
            "username" => "Admin CIVEX 2023",
            "teams" => $peserta,
            'totalPeserta' => $totalPeserta,
            'belumdiReview' =>$belumdiReview,
            'pembayaranDitolak' => $pembayaranDitolak
        ]);
    }

    public function cppc_detailTeam($id)
    {
        $dataPeserta = DB::table('cppc_teams')->where('id',$id)->first();

        return view('admin.cppc.detail',
        [
            'username' => 'Admin CIVEX 2023',
            'dataPeserta' => $dataPeserta,

        ]);
    }

    public function cppc_updateStatus(Request $request, $id){
        DB::table('cppc_teams')  // Ganti 'pesertas' dengan nama tabel Anda
        ->where('id', $id)
        ->update(['status_tim' => $request->input('status_tim')]);

        $data = DB::table('cppc_teams')->where('id', $id)->first();
        DB::table('users')->where('id', $data->id_user)->update(['status' => $request->input('status_tim')]);

        if($request->input('status_tim') === '1'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Pendaftaran',
                'pesan' => 'Kami ingin memberitahu Anda bahwa data pendaftaran tim Anda telah
                dikonfirmasi. Terima kasih atas partisipasi Anda dalam perlombaan
                Construction Project Planning Competition',
                'pesan2' => 'Langkah berikutnya adalah untuk mengisi biodata di link berikut : ',
            ]));
        }elseif($request->input('status_tim') === '01'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Pendaftaran',
                'pesan' => 'Terima kasih atas partisipasi Anda dalam perlombaan Construction Project Planning Competition Kami
                ingin memberitahu Anda bahwa data pendaftaran tim Anda telah direview oleh tim. Akan tetapi
                terdapat kesalahan berkas atau data dalam pendaftaran anda',
                'pesan2' => 'Silahkan menghubungi Contact Person',
            ]));
        }elseif($request->input('status_tim') === '11'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Biodata Tim',
                'pesan' => 'Terima kasih atas partisipasi Anda dalam perlombaan Construction Project Planning Competition Kami
                ingin memberitahu Anda bahwa biodata tim Anda telah direview oleh tim. Akan tetapi
                terdapat kesalahan berkas atau data dalam biodata tim anda',
                'pesan2' => 'Silahkan mengisi ulang biodata tim anda atau menghubungi Contact Person',
            ]));
        }elseif($request->input('status_tim') === '2'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Biodata Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa biodata tim Anda telah
                dikonfirmasi. Terima kasih atas partisipasi Anda dalam perlombaan
                Construction Project Planning Competition',
                'pesan2' => 'Langkah berikutnya adalah untuk mengisi biodata di link berikut : ',
            ]));
        }elseif($request->input('status_tim') === '3'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Lolos Penyisihan Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' lolos babak penyisihan dan maju ke babak final. Terima kasih atas partisipasi Anda dalam perlombaan
                Construction Project Planning Competition',
                'pesan2' => 'Selamat atas perjuangannya dan tetap semangat',
            ]));
        }elseif($request->input('status_tim') === '31'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Tidak Lolos Penyisihan Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' tidak lolos babak penyisihan. Terima kasih atas partisipasi Anda dalam perlombaan
                Construction Project Planning Competition',
                'pesan2' => 'Tetap semangat dan terus berjuang',
            ]));
        }

        return redirect('admin/detailteam-cppc/'.$id);
    }

    public function cppc_aanwijizing_table()
    {
        $totalPertanyaan = cppc_team::whereNotNull('aanwijzing_tanya')->count();
        $pertanyaanSudahdijawab = cppc_team::whereNotNull('aanwijzing_tanya')->whereNotNull('aanwijzing_jawab')->count();
        $pertanyaanBelumTerjawab = cppc_team::whereNotNull('aanwijzing_tanya')->whereNull('aanwijzing_jawab')->count();
        $teams = cppc_team::whereNotNull('aanwijzing_tanya')->get();


        return view('admin.cppc.aanwijizing',
        [
            "username" => "Admin CIVEX 2023",
            "totalPertanyaan" => $totalPertanyaan,
            "pertanyaanSudahdijawab" => $pertanyaanSudahdijawab,
            "pertanyaanBelumTerjawab" => $pertanyaanBelumTerjawab,
            "teams" => $teams,
        ]);
    }

    public function cppc_aanwijizing_detail($id)
    {
        {
            $dataPeserta = DB::table('cppc_teams')->where('id',$id)->first();

            return view('admin.cppc.detail_aanwijizing',
            [
                'username' => 'Admin CIVEX 2023',
                'dataPeserta' => $dataPeserta,

            ]);
        }
    }

    public function cesc_dashboard()
    {
        $peserta = DB::table('cesc_teams')->get();
        $totalPeserta = DB::table('cesc_teams')->count();
        $belumdiReview = DB::table('cesc_teams')->where('status_tim','00')->count() + DB::table('cesc_teams')->where('status_tim','12')->count();
        $pembayaranDitolak = DB::table('cesc_teams')->where('status_tim','11')->count() + DB::table('cesc_teams')->where('status_tim','01')->count();


        return view('admin.cesc.dashboard',
        [
            "username" => "Admin CIVEX 2023",
            "teams" => $peserta,
            'totalPeserta' => $totalPeserta,
            'belumdiReview' =>$belumdiReview,
            'pembayaranDitolak' => $pembayaranDitolak
        ]);
    }

    public function cesc_detailTeam($id)
    {
        $dataPeserta = DB::table('cesc_teams')->where('id',$id)->first();

        return view('admin.cesc.detail',
        [
            'username' => 'Admin CIVEX 2023',
            'dataPeserta' => $dataPeserta,

        ]);
    }

    public function cesc_updateStatus(Request $request, $id){
        DB::table('cesc_teams')  // Ganti 'pesertas' dengan nama tabel Anda
        ->where('id', $id)
        ->update(['status_tim' => $request->input('status_tim')]);

        $data = DB::table('cesc_teams')->where('id', $id)->first();

        DB::table('users')->where('id', $data->id_user)->update(['status' => $request->input('status_tim')]);

        if($request->input('status_tim') === '1'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Pendaftaran',
                'pesan' => 'Kami ingin memberitahu Anda bahwa data pendaftaran tim Anda telah
                dikonfirmasi. Terima kasih atas partisipasi Anda dalam perlombaan
                Civil Engineering Student Competition',
                'pesan2' => 'Langkah berikutnya adalah untuk mengisi biodata di link berikut : ',
            ]));
        }elseif($request->input('status_tim') === '01'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Pendaftaran',
                'pesan' => 'Terima kasih atas partisipasi Anda dalam perlombaan Civil Engineering Student Competition Kami
                ingin memberitahu Anda bahwa data pendaftaran tim Anda telah direview oleh tim. Akan tetapi
                terdapat kesalahan berkas atau data dalam pendaftaran anda',
                'pesan2' => 'Silahkan menghubungi Contact Person',
            ]));
        }elseif($request->input('status_tim') === '11'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Biodata Tim',
                'pesan' => 'Terima kasih atas partisipasi Anda dalam perlombaan Civil Engineering Student Competition Kami
                ingin memberitahu Anda bahwa biodata tim Anda telah direview oleh tim. Akan tetapi
                terdapat kesalahan berkas atau data dalam biodata tim anda',
                'pesan2' => 'Silahkan mengisi ulang biodata tim anda atau menghubungi Contact Person',
            ]));
        }elseif($request->input('status_tim') === '2'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Konfirmasi Biodata Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa biodata tim Anda telah
                dikonfirmasi. Terima kasih atas partisipasi Anda dalam perlombaan
                Civil Engineering Student Competition',
                'pesan2' => 'Langkah berikutnya adalah untuk mengisi biodata di link berikut : ',
            ]));
        }elseif($request->input('status_tim') === '3'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Lolos Penyisihan Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' lolos babak penyisihan dan maju ke babak semifinal. Terima kasih atas partisipasi Anda dalam perlombaan
                Civil Engineering Student Competition',
                'pesan2' => 'Selamat atas perjuangannya dan tetap semangat',
            ]));
        }elseif($request->input('status_tim') === '31'){

            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Tidak Lolos Penyisihan Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' tidak lolos babak penyisihan. Terima kasih atas partisipasi Anda dalam perlombaan
                Civil Engineering Student Competition',
                'pesan2' => 'Tetap semangat dan terus berjuang',
            ]));
        }
        elseif($request->input('status_tim') === '4'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Lolos Semifinal Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' lolos babak semifinal dan maju ke babak final. Terima kasih atas partisipasi Anda dalam perlombaan
                Civil Engineering Student Competition',
                'pesan2' => 'Selamat atas perjuangannya dan tetap semangat',
            ]));
        }elseif($request->input('status_tim') === '41'){
            Notification::route('mail', $data->ketua_email)->notify(new FormNotification([
                'nama_tim' => $data->nama_tim,
                'subject' => 'Pengumuman Tidak Lolos Semifinal Tim',
                'pesan' => 'Kami ingin memberitahu Anda bahwa Tim '.$data->nama_tim.' tidak lolos babak semifinal. Terima kasih atas partisipasi Anda dalam perlombaan
                Civil Engineering Student Competition',
                'pesan2' => 'Tetap semangat dan terus berjuang',
            ]));
        }

        return redirect('admin/detailteam-cesc/'.$id);
    }

}
