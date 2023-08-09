@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <h4 class="tx-poppins tx-medium mg-b-0">Dashboard Admin <span class="c-cesc">CESC</span> CIVEX 2023</h4>
            </div>
        </div>
        <div class="row monitoring">
            <div class="col-lg-4 col-md-4 col-12 mb-lg-3 mb-1">
                <div class="card">
                    <div class="card-header bg-green text-center">
                        Total Pendaftar
                    </div>
                    <div class="card-body text-center">
                        <div class="isi"> {{ $totalPeserta }}</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-lg-3 mb-1">
                <div class="card">
                    <div class="card-header bg-yellow text-center">
                        Pendaftar Belum Direview
                    </div>
                    <div class="card-body text-center">
                        <div class="isi"> {{ $belumdiReview }}</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-lg-3 mb-1">
                <div class="card">
                    <div class="card-header bg-red text-center">
                        Pendaftaran Ditolak
                    </div>
                    <div class="card-body text-center">
                        <div class="isi"> {{ $pembayaranDitolak }}</div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                {{-- tabel peserta --}}
                @include('admin.gec.slicing.dashboardtable')
            </div>
        </div>
    </div>
@endsection
