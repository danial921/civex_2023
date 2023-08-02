@extends('cpcc.master')

@section('content')
    <div class="container pt-5 mt-3 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Submission <span class="c-cpcc">CPCC</span> Berkas</h4>
            </div>
        </div>


        {{-- hero submited --}}
        @include('cpcc.slicing.submission-submited')

        {{-- form submission --}}
        @include('cpcc.slicing.submission-form')
    </div>
@endsection
