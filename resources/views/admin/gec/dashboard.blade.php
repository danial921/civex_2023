@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <h4 class="tx-poppins tx-medium mg-b-0">Dashboard Admin <span class="c-gec">GEC</span> CIVEX 2023</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- tabel peserta --}}
                @include('admin.gec.slicing.dashboardtable')
            </div>
        </div>
    </div>
@endsection
