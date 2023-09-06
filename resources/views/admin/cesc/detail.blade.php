@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/admin/cesc"
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
                        <label for="staticEmail" class="form-pendaftaran mb-0">Sekolah Asal</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->sekolah }}">
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Identitas Ketua Tim </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nama Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_nama }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Email Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_email }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Kelas Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_kelas }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nomer Telefon Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_notelp }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Kartu Ketua</label>
                        @if ($dataPeserta->ketua_kartu == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->ketua_kartu != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->ketua_kartu }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Kartu Ketua
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Foto Ketua</label>
                        @if ($dataPeserta->ketua_foto == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->ketua_foto != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->ketua_foto }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Foto Ketua
                                </button>
                            </form>
                        @endif
                    </div><div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Twibbon Ketua</label>
                        @if ($dataPeserta->ketua_twibbon == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->ketua_twibbon != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->ketua_twibbon }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Twibbon Ketua
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Bukti Follow Ketua</label>
                        @if ($dataPeserta->ketua_follow == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->ketua_follow != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->ketua_follow }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Bukti Follow Ketua
                                </button>
                            </form>
                        @endif
                    </div>

                    <div class="titleheading mb-lg-3 mb-1">Identitas Anggota</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nama Anggota </label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota_nama }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Kelas Anggota </label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota_kelas }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nomer Telefon Anggota </label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota_notelp }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Kartu Anggota</label>
                        @if ($dataPeserta->anggota_kartu == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota_kartu != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota_kartu }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Kartu Anggota
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Foto Anggota</label>
                        @if ($dataPeserta->anggota_foto == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota_foto != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota_foto }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Foto Anggota
                                </button>
                            </form>
                        @endif
                    </div><div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Twibbon Anggota</label>
                        @if ($dataPeserta->anggota_twibbon == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota_twibbon != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota_twibbon }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Twibbon Anggota
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Bukti Follow Anggota</label>
                        @if ($dataPeserta->anggota_follow == '-')
                            <p class="w-100 text-center"><i>tidak ada berkas</i></p>
                        @elseif ($dataPeserta->anggota_follow != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->anggota_follow }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Bukti Follow Anggota
                                </button>
                            </form>
                        @endif
                    </div>

                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Bukti Bayar</label>
                        @if ($dataPeserta->bukti_bayar == '-')
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->bukti_bayar != '-')
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->bukti_bayar }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        File Bukti Bayar
                                </button>
                            </form>
                        @endif
                    </div>

                    <div class="titleheading mb-lg-3 mb-1">Berkas Tim</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Submission Proposal</label>
                        @if ($dataPeserta->submission_proposal == '-')
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->submission_proposal != '-')
                            <form method="POST" action="{{ route('show-pdf') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->submission_proposal }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        File Submission Proposal
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Status Tim</div>
                    @include('admin.cesc.slicing.rubahsatatustim')
                </div>
            </div>
        </div>
    </div>
@endsection
