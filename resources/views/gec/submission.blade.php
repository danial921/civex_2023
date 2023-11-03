@extends('gec.master')

@section('content')
    <div class="container pt-5 mt-3 mb-lg-2 mb-0">
        <div class="back d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Submission <span class="c-gec">GEC</span> Berkas</h4>
            </div>
        </div>
        @if($status_proposal === 1)
            {{-- hero submit --}}
            @include('gec.slicing.submission-submited')
        @elseif($status_proposal === 0 )
            {{-- form submission --}}
            @include('gec.slicing.submission-form')
        @endif

    </div>
    @include('gec.slicing.submission-url')  
@endsection
