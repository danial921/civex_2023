@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <h4 class="tx-poppins tx-medium mg-b-0">AanWijizing GEC <span class="c-gec">GEC</span> CIVEX 2023</h4>
            </div>
        </div>
        <div class="row monitoring">
            <div class="col-lg-4 col-md-4 col-12 mb-lg-3 mb-1">
                <div class="card">
                    <div class="card-header bg-blue text-center">
                        Pertanyaan Masuk
                    </div>
                    <div class="card-body text-center">
                        <div class="isi"> {{ $totalPertanyaan }}</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-lg-3 mb-1">
                <div class="card">
                    <div class="card-header bg-green text-center">
                        Pertanyaan Sudah Dijawab
                    </div>
                    <div class="card-body text-center">
                        <div class="isi"> {{ $pertanyaanSudahdijawab }}</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-lg-3 mb-1">
                <div class="card">
                    <div class="card-header bg-red text-center">
                        Pertanyaan Belum Terjawab
                    </div>
                    <div class="card-body text-center">
                        <div class="isi"> {{ $pertanyaanBelumTerjawab }}</div>
                    </div>
                </div>
            </div>
             <div class="col-12">
                {{-- tabel aanwijizing peserta --}}
                @include('admin.gec.slicing.aanwijzingtable')
            </div>
        </div>
    </div>
@endsection
