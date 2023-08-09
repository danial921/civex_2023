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
                    <div class="titleheading mb-2">Identitas Tim</div>
                    <div class="row mb-3">
                        <div class="col-lg-6 col-12">
                            <label for="staticEmail" class="form-pendaftaran mb-1">Nama Tim</label>
                            <div class="">
                                <input disabled readonly type="text" readonly disabled class="form-control"
                                    id="staticEmail" value="{{ $dataPeserta->nama_tim }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="staticEmail" class="form-pendaftaran mb-1">Institusi Asal</label>
                            <div class="">
                                <input disabled readonly type="text" readonly disabled class="form-control"
                                    id="staticEmail" value="{{ $dataPeserta->institusi }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Alamat Perguruan
                                Tinggi</label>
                            <input disabled readonly type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Alamat Perguruan Tinggi">
                        </div>
                    </div>

                    <div class="titleheading mb-lg-2 mb-1 mt-1">Identitas Ketua TIM</div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nama Ketua Tim</label>
                        <input disabled readonly type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Ketua Tim">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Program
                                    Studi</label>
                                <input disabled readonly type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Program Studi Ketua Tim">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nomer Induk
                                    Mahasiswa</label>
                                <input disabled readonly type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Nomer Induk Ketua Tim">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="staticEmail" class="form-pendaftaran mb-1">email</label>
                                <div class="">
                                    <input disabled readonly type="text" readonly disabled class="form-control"
                                        id="staticEmail" value="testing123">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nomer
                                    Telefon</label>
                                <input disabled readonly type="email" class="form-control" id="exampleFormControlInput1"
                                    value="testing123">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">
                                    Upload KTM / Transkrip</label>
                                <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                    <button type="button" class="w-100 btn btn-download">
                                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                            width="20" height="20">
                                        KTM / Transkrip
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">
                                    Upload SK Mahasiswa Aktif</label>
                                <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                    <button type="button" class="w-100 btn btn-download">
                                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                            width="20" height="20">
                                        SK Mahasiswa Aktif
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="titleheading mb-2 mb-lg-2 mb-1 mt-1">Identitas Anggota 1</div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nama Anggota
                            1</label>
                        <input disabled readonly type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Anggota 1">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Program
                                    Studi</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nomer Induk
                                    Mahasiswa</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="staticEmail" class="form-pendaftaran mb-1">email</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nomer
                                    Telefon</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" value="testing 123">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Program
                                    Upload KTM / Transkrip</label>
                                <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                    <button type="button" class="w-100 btn btn-download">
                                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                            width="20" height="20">
                                        KTM / Transkrip
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">
                                    Upload SK Mahasiswa Aktif</label>
                                <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                    <button type="button" class="w-100 btn btn-download">
                                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                            width="20" height="20">
                                        SK Mahasiswa Aktif
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="titleheading mb-2 mb-lg-2 mb-1 mt-1">Identitas Anggota 2</div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nama Anggota
                            2</label>
                        <input disabled readonly type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Ketua Tim">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Program
                                    Studi</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">
                                    Mahasiswa</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">

                                <label for="staticEmail" class="form-pendaftaran mb-1">email</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="email">

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nomer
                                    Telefon</label>
                                <input disabled readonly type="email" class="form-control"
                                    id="exampleFormControlInput1" value="testing123">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Program
                                    Upload KTM / Transkrip</label>
                                <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                    <button type="button" class="w-100 btn btn-download">
                                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                            width="20" height="20">
                                        KTM / Transkrip
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Nomer Induk
                                    Upload SK Mahasiswa Aktif</label>
                                <a href="{{ $dataPeserta->file_zip }}" class="detail" target="_blank">
                                    <button type="button" class="w-100 btn btn-download">
                                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                            width="20" height="20">
                                        SK Mahasiswa Aktif
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Berkas Tim</div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Bukti Pembayaran</label>
                        @if ($dataPeserta->file_zip == null)
                            <p class="w-100 text-center"><i>tim belum melakuakan Pembayaran berkas</i></p>
                        @elseif ($dataPeserta->file_zip != null)
                            <a href="{{ $dataPeserta->file_zip }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    [Bukti Pembayaran Tim
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
                        <label for="staticEmail" class="form-pendaftaran mb-1">File Submission Presntasi</label>
                        @if ($dataPeserta->submission_proposal == null)
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->submission_proposal != null)
                            <a href="{{ $dataPeserta->submission_proposal }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                    Submission Presntasi
                                </button>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1 detail">
                        <label for="staticEmail" class="form-pendaftaran mb-1">Url Submission Youtube</label>
                        @if ($dataPeserta->submission_proposal == null)
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->submission_proposal != null)
                            <a href="{{ $dataPeserta->submission_proposal }}" class="" target="_blank">
                                <button type="button" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Url Submission Youtube
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
