@extends('cesc.master')

@section('content')
<div class="container verifikasi pt-5 mt-5">
    {{-- form --}}
    <div class="container formkelengkapan">
    @include('cesc.slicing.submission-form')
    </div>
</div>
@endsection
