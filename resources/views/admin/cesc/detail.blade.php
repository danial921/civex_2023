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
                <div class="row mb-3">
                    <div class="col-lg-6 col-12">
                        <label for="staticEmail" class="form-pendaftaran">Nama Tim</label>
                        <div class="">
                            <input readonly disabled type="text" class="form-control" id="staticEmail" value="test123"">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="staticEmail" class="form-pendaftaran">Sekolah Asal</label>
                        <div class="">
                            <input readonly disabled type="text" class="form-control" id="staticEmail" value="test123">
                        </div>
                    </div>
                </div>

                <div class="title mb-2">IDENTITAS KETUA TIM</div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Ketua Tim</label>
                    <input readonly disabled type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Ketua Tim">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Tingkat
                                Pendidikan</label>
                            <input type="text" readonly disabled class="form-control" id="staticEmail" value="Kelas X">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomor Telepon</label>
                            <input readonly disabled type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nomor Telepon">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu
                                Pelajar</label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image" width="20"
                                        height="20">
                                    Kartu Pelajar
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Pas Foto</label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image" width="20"
                                        height="20">
                                    Pas Foto
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu
                                Pelajar</label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image" width="20"
                                        height="20">
                                    Kartu Pelajar
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">
                                Upload bukti follow IG <a class="c-blue bold"
                                    href="https://www.instagram.com/civilexpoits/">CIVEX</a></label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Bukti Follow IG
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="title mb-2">IDENTITAS ANGGOTA 1</div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Anggota Tim</label>
                    <input readonly disabled type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Ketua Tim">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Tingkat
                                Pendidikan</label>
                            <input type="text" readonly disabled class="form-control" id="staticEmail"
                                value="Kelas X">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomor Telepon</label>
                            <input readonly disabled type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nomor Telepon">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu
                                Pelajar</label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Upload Kartu Pelajar
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Pas Foto</label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Pas Foto
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu
                                Pelajar</label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Kartu Pelajar
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">
                                Upload bukti follow IG <a class="c-blue bold"
                                    href="https://www.instagram.com/civilexpoits/">CIVEX</a></label>
                            <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Bukti Follow IG
                                </button>
                            </a>
                        </div>
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
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Submission Semifinal</label>
                        @if ($dataPeserta->submission_proposal == null)
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas Semifinal</i></p>
                        @elseif ($dataPeserta->submission_proposal != null)
                            <a href="{{ $dataPeserta->submission_proposal }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Submission Semifinal
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="titleheading mb-lg-3 mb-1">Status Tim</div>
                @include('admin.cppc.slicing.rubahsatatustim')
            </div>
        </div>
    </div>
    </div>
@endsection
