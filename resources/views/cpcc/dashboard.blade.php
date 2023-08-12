@extends('cpcc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                {{-- Jumbotron selamat --}}
                @if($status === '3')
                    @include('cpcc.slicing.jumbotron-welcome-final')
                @endif    
                @if($status === '2' && $status_proposal == '0')
                    {{-- pendaftaran di verifikasi, timbelum melengkapi berkas --}}
                    @include('cpcc.slicing.dashboard-status')
                @elseif($status === '2'&& $status_proposal == '1')
                    {{-- pendaftaran di verifikasi, tim sudah melengkapi berkas --}}
                    @include('cpcc.slicing.dashboard-status4')
                @elseif($status === '3')
                    {{-- Belum Upload Berkas Final --}}
                    @include('cpcc.slicing.dashboard-status5')
                @elseif($status === '3')
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
