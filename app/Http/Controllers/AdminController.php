<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function gec_dashboard()
    {
        $peserta = DB::table('gec_teams')->get();
        $totalPeserta = DB::table('gec_teams')->count();
        $belumdiReview = DB::table('gec_teams')->where('status_tim','00')->count();
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

        return redirect('admin/detailteamgec/'.$id);
    }
}
