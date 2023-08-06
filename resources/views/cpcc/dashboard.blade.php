@extends('cpcc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                {{-- Jumbotron selamat --}}
                @include('cpcc.slicing.jumbotron-welcome-final')
                @if($status == '1')
                    {{-- pendaftaran di verifikasi, timbelum melengkapi berkas --}}
                    @include('cpcc.slicing.dashboard-status')
                @elseif($status == '12')
                    {{-- proses verif --}}
                    @include('cpcc.slicing.dashboard-status2')
                @elseif($status == '11')
                    {{-- DiTolak --}}
                    @include('cpcc.slicing.dashboard-status3')
                @elseif($status == '2')
                    {{-- pendaftaran di verifikasi, tim sudah melengkapi berkas --}}
                    @include('cpcc.slicing.dashboard-status4')
                @elseif($status == '3')
                    {{-- Belum Upload Berkas Final --}}
                    @include('cpcc.slicing.dashboard-status5')
                @elseif($status == '33')
                    {{-- Sudah Upload Berkas Final --}}
                    @include('cpcc.slicing.dashboard-status6')
                @endif    
            </div>
            <div class="col-lg-4 col-12">
                @include('cpcc.slicing.timeline')
            </div>
        </div>
    </div>
@endsection
