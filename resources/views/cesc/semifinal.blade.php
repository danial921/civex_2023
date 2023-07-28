@extends('cesc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    {{-- pendaftaran di verifikasi --}}
                    <div class="col-12">
                        @include('cesc.slicing.semifinal-jumbotron-welcome')
                    </div>
                    <div class="col-lg-6 col-12">
                        {{--  Rilis Semifinal --}}
                        @include('cesc.slicing.semifinal-rilis-kisi-kisi')
                    </div>
                    <div class="col-12">
                        {{--  Rilis Soal Semifinal --}}
                        @include('cesc.slicing.semifinal-rilis-soal')
                    </div>
                    <div class="col-12">
                        {{--  sudah uplad file --}}
                        @include('cesc.slicing.semifinal-past-upload')
                    </div>

                    <div class="col-12">
                        {{--  Jumbotron lolos final --}}
                        @include('cesc.slicing.semifinal-release-lolos')
                    </div>

                    <div class="col-12">
                        {{--  Jumbotron tidaklolos final --}}
                        @include('cesc.slicing.semifinal-release-tidaklolos')
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                @include('cesc.slicing.timeline')
            </div>
        </div>
    </div>
@endsection
