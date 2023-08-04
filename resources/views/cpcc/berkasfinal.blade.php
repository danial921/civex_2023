@extends('cpcc.master')

@section('content')
    <div class="container pt-5 mt-5">
        <div class="back d-flex align-items-center justify-content-between mb-lg-2 mb-0 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Submission <span class="c-cpcc">CPCC</span> Berkas</h4>
            </div>
        </div>

        {{-- hero submit --}}
        @include('cpcc.slicing.berkasfinal-submited')

        {{-- form submission --}}
        @include('cpcc.slicing.berkasfinal-form')
    @endsection
