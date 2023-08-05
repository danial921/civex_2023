@extends('general.master')

@section('content')
    <div class="container">
        <div class="welcome-hero pt-5 mt-5">
            <div class="row mt-3 d-flex align-items-end">
                <div class="col-md-6 col-sm-12">
                    <p class="title-1 mb-0">Hai, <span class="c-cpcc">{{ $username }} !!</span></p>
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
                    Ajang kompetisi mahasiswa sipil menyelesaikan masalah tanah dan batuan, menahan beban struktur di
                    atasnya.
                </div>
                <div class="row details mx-0">
                    <div class="col-6 detailpendaftaran py-2">
                        <p class="ket-pendaftaran c-gec mb-1">Pendaftaran :</p>
                        <p class="detail mb-1">{{ ENV('TIMELINE_PENDAFTARAN_GEC') }}</p>
                    </div>
                    <div class="col-6 detailanggota py-2">
                        <p class="ket-pendaftaran c-gec mb-1">Anggota :</p>
                        <p class="detail mb-1">{{ ENV('ANGGOTA_GEC') }}</p>
                    </div>
                </div>
            </a>
            <a href="/form-cpcc" class="mt-4 col-lg-4 col-md-6 col-sm-12 cpcc">
                <div class="card-cpcc p-3">
                    <div class="hero">
                        <img class="mx-auto d-block" src="{{ asset('civex/img/icon/icon-cpcc.svg') }}" alt="">
                        <p class="mt-3 competitle"><span class="c-cpcc">CPCC</span> CONSTRUCTION PROJECT PLANNING COMPETITION</p>
                    </div>
                </div>
                <div class="card-cpcc1 px-2 py-2 text-center">
                   {{ ENV('DESKRIPSI_GEC') }}
                </div>
                <div class="row details mx-0">
                    <div class="col-6 detailpendaftaran py-2">
                        <p class="ket-pendaftaran c-gec mb-1">Pendaftaran :</p>
                        <p class="detail mb-1">{{ ENV('TIMELINE_PENDAFTARAN_CPCC') }}</p>
                    </div>
                    <div class="col-6 detailanggota py-2">
                        <p class="ket-pendaftaran c-gec mb-1">Anggota :</p>
                        <p class="detail mb-1">{{ ENV('ANGGOTA_CPCC') }}</p>
                    </div>
                </div>
            </a>
            <a href="/form-cesc" class="mt-4 col-lg-4 col-md-6 col-sm-12 cesc">
                <div class="card-cesc p-3">
                    <div class="hero">
                        <img class="mx-auto d-block" src="{{ asset('civex/img/icon/icon-cesc.svg') }}" alt="">
                        <p class="mt-3 competitle"><span class="c-cesc">CESC</span> CIVIL ENGGINERING STUDENT COMPETITIO</p>
                    </div>
                </div>
                <div class="card-cesc1 px-2 py-2 text-center">
                   {{ ENV('DESKRIPSI_CESC') }}
                </div>
                <div class="row details mx-0">
                    <div class="col-6 detailpendaftaran py-2">
                        <p class="ket-pendaftaran c-cesc mb-1">Pendaftaran :</p>
                        <p class="detail mb-1">{{ ENV('TIMELINE_PENDAFTARAN_CESC') }}</p>
                    </div>
                    <div class="col-6 detailanggota py-2">
                        <p class="ket-pendaftaran c-cesc mb-1">Anggota :</p>
                        <p class="detail mb-1">{{ ENV('ANGGOTA_CESC') }}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br><br><br>
@endsection
