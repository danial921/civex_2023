@extends('cpcc.master')

@section('content')
    <div class="container pt-5 mt-5 mb-1">
        <div class="back d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Form Kelengkapan Tim <span class="c-gec">CPCC</span>
                    Costruction Project Planning Competition</h4>
            </div>
        </div>
    </div>

    {{-- form --}}
    <div class="container formkelengkapan">
    @include('cpcc.slicing.form2-formulir')
    </div>
@endsection
