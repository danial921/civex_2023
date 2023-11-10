<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dummmudata;
use Carbon\Carbon;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\GecController;
use App\Http\Controllers\User\CppcController;
use App\Http\Controllers\User\CescController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\showFileController;
use App\Http\Controllers\workshopController;
use App\Http\Controllers\webinarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//landing page
Route::get('/', function () {$active = 'home'; return view('landingpage.home', compact('active'));});
Route::get('/detail', function () {$active = 'home'; return view('landingpage.detail-civex', compact('active'));});
Route::get('/competition', function () {$active = 'competition'; return view('landingpage.competition', compact('active'));});
Route::get('/competition-cpcc', function () {$active = 'competition';return view('landingpage.competition-cpcc', compact('active'));});
Route::get('/competition-gec', function () {$active = 'competition';return view('landingpage.competition-gec', compact('active'));});
Route::get('/competition-cesc', function () {$active = 'competition';return view('landingpage.competition-cesc', compact('active'));});
Route::get('/opening', function () {$active = 'opening'; $time = "2023-09-20 12:00:00"; return view('landingpage.opening', compact('active', 'time'));});

Route::get('/workshop', function () {$active = 'opening'; return view('landingpage.workshop', compact('active'));})->name('workshop');
Route::get('/registration-workshop', function () {$active = 'opening'; return view('landingpage.registration-workshop-new', compact('active'));});
Route::post('/register-workshop', [workshopController::class, 'store_regist'])->name('register-workshop');

Route::get('/webinar', function () {$active = 'opening'; return view('landingpage.webinar', compact('active'));})->name('webinar');
Route::get('/registration-webinar', function () {$active = 'opening'; return view('landingpage.registration-webinar-new', compact('active'));});
Route::post('/register-webinar', [webinarController::class, 'store_regist'])->name('register-webinar');

Route::get('/closing', function () {$active = 'closing'; $time = "2023-11-1 10:00:00"; return view('landingpage.closing-open', compact('active', 'time'));});
Route::get('/merchandise', function () {$active = 'merchandise'; $time = "2023-09-12 12:00:00"; return view('landingpage.merchandise-open', compact('active', 'time'));});
Route::get('/webinar-test', function () {$active = 'merchandise'; return view('landingpage.webinar-show', compact('active'));});

// documentPreview
Route::post('/pdf', [showFileController::class, 'pdf'])->name('show-pdf');
Route::post('/image', [showFileController::class, 'image'])->name('show-image');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware('isAdmin')->group(function () {
        Route::get('/admin/gec', [AdminController::class, 'gec_dashboard'])->name('/admin/gec');
        Route::get('/admin/detailteam-gec/{id}', [AdminController::class, 'gec_detailTeam']);
        Route::post('/admin/updatestatus-gec/{id}', [AdminController::class, 'gec_updateStatus']);
        Route::get('/admin/cppc', [AdminController::class, 'cppc_dashboard']);
        Route::get('/admin/detailteam-cppc/{id}', [AdminController::class, 'cppc_detailTeam']);
        Route::post('/admin/updatestatus-cppc/{id}', [AdminController::class, 'cppc_updateStatus']);
        Route::get('/admin/cesc', [AdminController::class, 'cesc_dashboard']);
        Route::get('/admin/detailteam-cesc/{id}', [AdminController::class, 'cesc_detailTeam']);
        Route::post('/admin/updatestatus-cesc/{id}', [AdminController::class, 'cesc_updateStatus']);

        Route::get('/admin/gec-aanwijzing', [AdminController::class, 'gec_aanwijizing_table']);
        Route::get('/admin/detailpertanyaan-gec/{id}', [AdminController::class, 'gec_aanwijizing_detail'])->name('admin.detailpertanyaan-gec');
        Route::post('/admin/update-jawaban-gec', [AdminController::class, 'gec_aanwijizing_update_jawaban'])->name('admin.jawaban-gec');

        Route::get('/admin/cppc-aanwijzing', [AdminController::class, 'cppc_aanwijizing_table']);
        Route::get('/admin/detailpertanyaan-cppc/{id}', [AdminController::class, 'cppc_aanwijizing_detail'])->name('admin.detailpertanyaan-cppc');
        Route::post('/admin/update-jawaban-cppc', [AdminController::class, 'cppc_aanwijizing_update_jawaban'])->name('admin.jawaban-cppc');

        Route::get('/admin/workshop', [AdminController::class, 'workshop_dashboard']);
        Route::get('/admin/detailpendaftar-workshop/{id}', [AdminController::class, 'detailpendaftar_workshop']);

        Route::get('/admin/webinar', [AdminController::class, 'webinar_dashboard']);
        Route::get('/admin/detailpendaftar-webinar/{id}', [AdminController::class, 'detailpendaftar_webinar']);
    });
    //user
    Route::middleware('notRegisterComp')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('/dashboard');
        Route::get('/pendaftaran-gec', [DashboardController::class, 'form_gec']);
        Route::post('/pendaftaran-gec', [DashboardController::class, 'store_form_gec'])->name('form-gec');
        Route::get('/pendaftaran-cppc', [DashboardController::class, 'form_cppc']);
        Route::post('/pendaftaran-cppc', [DashboardController::class, 'store_form_cppc'])->name('form-cppc');
        Route::get('/pendaftaran-cesc', [DashboardController::class, 'form_cesc']);
        Route::post('/pendaftaran-cesc', [DashboardController::class, 'store_form_cesc'])->name('form-cesc');
    });

    Route::middleware('isGEC')->group(function () {
        Route::get('/gec', [GecController::class, 'GEC'])->name('/gec');
        Route::get('/gec/verifikasi', [GecController::class, 'GEC_verifikasi']);
        Route::get('/gec/formulir-tim', [GecController::class, 'GEC_biodata']);
        Route::post('/gec/formulir-tim', [GecController::class, 'store_GEC_biodata'])->name('submit-berkas-gec');
        Route::get('/gec/soal', [GecController::class, 'GEC_soal']);
        Route::get('/gec/aanwijzing', [GecController::class, 'GEC_aanwijizing']);
        Route::post('/gec/aanwijzing', [GecController::class, 'store_GEC_aanwijizing'])->name('submit-aanwizing-gec');
        Route::get('/gec/detail-aanwijzing/{id}', [GecController::class, 'GEC_detail_aanwijizing']);
        Route::get('/gec/submission', [GecController::class, 'GEC_submission']);
        Route::post('/gec/submission', [GecController::class, 'store_GEC_submission'])->name('submit-proposal-gec');
        Route::post('/gec/url-submission', [GecController::class, 'store_url_GEC_submission'])->name('submit-url-gec');
    });

    Route::middleware('isCPPC')->group(function () {
        Route::get('/cppc', [CppcController::class, 'CPPC'])->name('/cppc');
        Route::get('/cppc/verifikasi', [CppcController::class, 'CPPC_verifikasi']);
        Route::get('/cppc/formulir-tim', [CppcController::class, 'CPPC_biodata']);
        Route::post('/cppc/formulir-tim', [CppcController::class, 'store_CPPC_biodata'])->name('submit-berkas-cppc');
        Route::get('/cppc/soal', [CppcController::class, 'CPPC_soal']);
        Route::get('/cppc/aanwijzing', [CppcController::class, 'CPPC_aanwijizing']);
        Route::post('/cppc/aanwijzing', [CppcController::class, 'store_CPPC_aanwijizing'])->name('submit-aanwizing-cppc');
        Route::get('/cppc/detail-aanwijzing/{id}', [CppcController::class, 'CPPC_detail_aanwijizing']);
        Route::get('/cppc/submission', [CppcController::class, 'CPPC_submission']);
        Route::post('/cppc/submission', [CppcController::class, 'store_CPPC_submission'])->name('submit-proposal-cppc');
        Route::get('/cppc/submission-final', [CppcController::class, 'CPPC_berkas_final']);
        Route::post('/cppc/submission-final', [CppcController::class, 'store_CPPC_berkas_final'])->name('submit-berkasfinal-cppc');
    });

    Route::middleware('isCESC')->group(function () {
        Route::get('/cesc', [CescController::class, 'CESC'])->name('/cesc');
        Route::get('/cesc/verifikasi', [CescController::class, 'CESC_verifikasi']);
        Route::get('/cesc/formulir-tim', [CescController::class, 'CESC_biodata']);
        Route::post('/cesc/formulir-tim', [CescController::class, 'store_CESC_biodata'])->name('submit-berkas-cesc');
        Route::get('/cesc/penyisihan', [CescController::class, 'CESC_penyisihan']);
        Route::get('/cesc/semifinal', [CescController::class, 'CESC_semifinal']);
        Route::get('/cesc/final', [CescController::class, 'CESC_final']);
        Route::get('/cesc/submission-semifinal', [CescController::class, 'CESC_submission_semifinal']);
        Route::post('/cesc/submission-semifinal', [CescController::class, 'store_CESC_submission_semifinal'])->name('submit-proposal-cesc');
    });
});

Route::get('/test', function () {
    return view('test');
});

require __DIR__.'/auth.php';
