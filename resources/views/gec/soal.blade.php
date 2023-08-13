@extends('gec.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12 mb-lg-5 mb-2">
            @if(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-11-15 23:59:59'))
                {{-- soal sudah ditutup --}}
                @include('kit.post-access')
            @elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-8 23:59:59'))
                {{-- soal sudah dibagikan --}}
                @include('gec.slicing.soal-open')
            @else
                {{-- countdown --}}
                @include('kit.countdown')
            @endif
            </div>
            <div class="col-lg-4 col-12">
                @include('gec.slicing.timeline')
            </div>
        </div>
    </div>
@endsection
