@extends('cesc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    @if($status === "3")
                        {{-- pendaftaran di verifikasi --}}
                        <div class="col-12">
                            @include('cesc.slicing.semifinal-jumbotron-welcome')
                        </div>
                        @if(strtotime(date("Y-m-d H:i:s")) >= strtotime('2022-11-12 23:59:59') && $status_proposal === '-')
                            <div class="col-12">
                                {{--  Rilis Semifinal --}}
                                @include('cesc.slicing.semifinal-rilis-soal')
                            </div>
                        @elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2022-11-12 23:59:59') && $status_proposal === '1')
                            <div class="col-12">
                                {{--  sudah uplad file --}}
                                @include('cesc.slicing.semifinal-past-upload')
                            </div>
                        @elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2022-11-18 23:59:59'))
                            <div class="col-12">
                                {{--  Rilis Soal Semifinal --}}
                                @include('cesc.slicing.semifinal-rilis-kisi-kisi')
                            </div>
                        @endif
                    @elseif($status === '4')
                        <div class="col-12">
                            {{--  Jumbotron lolos final --}}
                            @include('cesc.slicing.semifinal-release-lolos')
                        </div>
                    @elseif($status === '41')
                        <div class="col-12">
                            {{--  Jumbotron tidaklolos final --}}
                            @include('cesc.slicing.semifinal-release-tidaklolos')
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-lg-4 col-12">
                @include('cesc.slicing.timeline')
            </div>
        </div>
    </div>
@endsection
