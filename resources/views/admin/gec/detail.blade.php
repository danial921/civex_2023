@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/admin/gec"
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
                        <label for="staticEmail" class="form-pendaftaran mb-0">Dosen Pembimbing</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->dosen_pembimbing }}">
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
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nomer Telefon Ketua</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->ketua_notelp }}">
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
                    <div class="titleheading mb-lg-3 mb-1">Identitas Anggota 2</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nama Anggota 2</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_nama }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Prodi Anggota 2</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_prodi }}">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">NIM/NRP Anggota 2</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->anggota1_nim }}">
                    </div>

                    <div class="titleheading mb-lg-3 mb-1">Berkas Tim</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Pembayaran Tim</label>
                        @if ($dataPeserta->submission_proposal == null)
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->submission_proposal != null)
                            <a href="{{ $dataPeserta->submission_proposal }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    File Pembayaran Tim
                                </button>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Berkas Tim</label>
                        @if ($dataPeserta->file_zip == null)
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->file_zip != null)
                            <a href="{{ $dataPeserta->file_zip }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Submission Berkas Tim
                                </button>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Submission Proposal</label>
                        @if ($dataPeserta->submission_proposal == null)
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->submission_proposal != null)
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
                    @include('admin.gec.slicing.rubahsatatustim')
                </div>
            </div>
        </div>
    </div>
@endsection
