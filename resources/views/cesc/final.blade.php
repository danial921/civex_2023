@extends('cesc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                @include('cesc.slicing.jumbotron-welcome-final')
            </div>
            <div class="col-lg-4 col-12">
                @include('cesc.slicing.timeline')
            </div>
        </div>
    </div>

@endsection
