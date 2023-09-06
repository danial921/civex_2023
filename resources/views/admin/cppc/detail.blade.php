@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/admin/cppc"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Detail Tim</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="title mb-lg-3 mb-1">
                    <span class="ct-black">Data Tim :</span> {{ $dataPeserta->nama_tim }}
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Institusi</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->institusi }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Alamat Institusi</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->alamat_institusi }}">
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Identitas Ketua Tim </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nama Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_nama }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Prodi Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_prodi }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">NIM/NRP Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_nim }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Email Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_email }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nomer Telefon Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_notelp }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">KTM Ketua</label>
                        @if ($dataPeserta->ketua_ktm == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->ketua_ktm != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->ketua_ktm }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        KTM Ketua
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">SK Ketua</label>
                        @if ($dataPeserta->ketua_sk == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->ketua_sk != '-')
                            <form method="POST" action="{{ route('show-pdf') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->ketua_sk }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        SK Ketua
                                </button>
                            </form>
                            </a>
                        @endif
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Identitas Anggota 1</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nama Anggota 1</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_nama }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Prodi Anggota 1</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_prodi }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">NIM/NRP Anggota 1</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_nim }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Email Anggota 1</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_email }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nomer Telefon Anggota 1</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_notelp }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">KTM Anggota 1</label>
                        @if ($dataPeserta->anggota1_ktm == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota1_ktm != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota1_ktm }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        KTM Anggota 1
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">SK Anggota 1</label>
                        @if ($dataPeserta->anggota1_sk == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota1_sk != '-')
                            <form method="POST" action="{{ route('show-pdf') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota1_sk }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        SK Anggota 1
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Identitas Anggota 2</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nama Anggota 2</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota2_nama }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Prodi Anggota 2</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota2_prodi }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">NIM/NRP Anggota 2</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota2_nim }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Email Anggota 2</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota2_email }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nomer Telefon Anggota 1</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota2_notelp }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">KTM Anggota 2</label>
                        @if ($dataPeserta->anggota2_ktm == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota2_ktm != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota2_ktm }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        KTM Anggota 2
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">SK Anggota 2</label>
                        @if ($dataPeserta->anggota2_sk == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota2_sk != '-')
                            <form method="POST" action="{{ route('show-pdf') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota2_sk }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        SK Anggota 2
                                </button>
                            </form>
                        @endif
                    </div>

                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Bukti Bayar</label>
                        @if ($dataPeserta->bukti_bayar == '-')
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->bukti_bayar != '-')
                            <a href="{{ $dataPeserta->bukti_bayar }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Bukti Bayar
                                </button>
                            </a>
                        @endif
                    </div>

                    <div class="titleheading mb-lg-3 mb-1">Berkas Tim</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Submission Proposal</label>
                        @if ($dataPeserta->submission_proposal == '-')
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->submission_proposal != '-')
                            <a href="{{ $dataPeserta->submission_proposal }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Submission Proposal
                                </button>
                            </a>
                        @endif
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Status Tim</div>
                    @include('admin.cppc.slicing.rubahsatatustim')
                </div>
            </div>
        </div>
    </div>
@endsection
