@extends('general.master')

@section('content')
    <div class="container pt-5 mt-5">
        <div class="back d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/dashboard"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Form Pendaftaran <span class="c-cesc">CESC</span> Civil Engginering Student Competition</h4>
            </div>
        </div>

        @if($urutan <= 15)
            {{-- jumbotron early masih ada --}}
            @include('cesc.slicing.form1-status')
        @else
            {{-- jumbotronkalo udah abis --}}
            @include('cesc.slicing.form1-status2')
        @endif
        @include('cesc.slicing.form1-formulir')

    </div>



@endsection
