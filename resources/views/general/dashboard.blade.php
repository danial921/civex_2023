@extends('general.master')

@section('content')
<div class="container">
    <div class="welcome-hero pt-5 mt-5">
        <div class="row mt-3 d-flex align-items-end">
            <div class="col-md-6 col-sm-12">
                <p class="title-1 mb-0">Hai, <span class="c-cpcc">Danial !!</span></p>
                <p class="subtitle-1 mb-1">Selamat datang di dashboard Civex 2023</p>
                <p class="subtitle-2 mb-4">silahkan pilih 1 lomba yang akan diikuti</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('civex/img/icon/happy-hero.svg') }}" alt="">
            </div>
        </div>
    </div>


<div class="card-competition row">
<a href="/form-gec" class="mt-4 col-lg-4 col-md-6 col-sm-12 gec">
    <div class="card-gec p-3">
        <div class="hero">
            <img class="mx-auto d-block" src="{{ asset('civex/img/icon/icon-gec.svg') }}" alt="">
            <p class="mt-3 competitle"><span class="c-gec">GEC</span> GEOTECHNICAL ENGINEERING COMPETITION</p>
        </div>
    </div>
    <div class="card-gec1 px-2 py-2 text-center">
        Ajang kompetisi mahasiswa sipil menyelesaikan masalah tanah dan batuan, menahan beban struktur di atasnya.
    </div>
    <div class="row details mx-0">
        <div class="col-6 detailpendaftaran py-2">
            <p class="ket-pendaftaran c-gec mb-1">Pendaftaran  :</p>
            <p class="detail mb-1">{{ ENV('TIMELINE_PENDAFTARAN_GEC') }}</p>
        </div>
        <div class="col-6 detailanggota py-2">
                <p class="ket-pendaftaran c-gec mb-1">Anggota :</p>
                <p class="detail mb-1">{{ ENV('ANGGOTA_GEC') }}</p>
        </div>
    </div>
</a>
<div class="mt-4 col-lg-4 col-md-6 col-sm-12">
    <div class="card-cpcc">
    </div>
</div>
<div class="mt-4 col-lg-4 col-md-6 col-sm-12"><div class="card-cesc"></div></div>
</div>
</div>
<br><br><br>
@endsection
