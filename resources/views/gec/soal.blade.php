@extends('gec.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12 mb-lg-5 mb-2">
                {{-- soal sudah dibagikan --}}
                @include('gec.slicing.soal-open')
                {{-- soal sudah ditutup --}}
                @include('kit.post-access')
                {{-- countdown --}}
                @include('kit.countdown')
            </div>
            <div class="col-lg-4 col-12">
                @include('gec.slicing.timeline')
            </div>
        </div>
    </div>
@endsection
