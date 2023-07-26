@extends('general.master')

@section('content')
    <div class="container pt-5 mt-5 mb-1">
        <div class="back d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Form Kelengkapan Tim <span class="c-gec">GEC</span>
                    Geotechnical Engineering Competition</h4>
            </div>
        </div>
    </div>
    <div class="container formkelengkapan">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="titleheading mb-2">Identitas Tim</div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-12">
                                <label for="staticEmail" class="form-pendaftaran">Nama Tim</label>
                                <div class="">
                                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                                        value="{{ $namatim }}"">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <label for="staticEmail" class="form-pendaftaran">Institusi Asal</label>
                                <div class="">
                                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                                        value="{{ $institusi }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Alamat Perguruan
                                Tinggi</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Alamat Perguruan Tinggi">
                        </div>
                        <div class="titleheading mb-2">Identitas Ketua TIM</div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Ketua Tim</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama Ketua Tim">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Program
                                        Studi</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Program Studi Ketua Tim">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Induk
                                        Mahasiswa</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nomer Induk Ketua Tim">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="staticEmail" class="form-pendaftaran">email</label>
                                    <div class="">
                                        <input type="text" readonly disabled class="form-control-plaintext"
                                            id="staticEmail" value="{{ $email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer
                                        Telefon</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $nomerhp }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Program
                                        Upload KTM / Transkrip</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Induk
                                        Upload SK Mahasiswa Aktif</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                        </div>

                        <div class="titleheading mb-2">Identitas Anggota 1</div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Anggota
                                1</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama Anggota 1">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Program
                                        Studi</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Induk
                                        Mahasiswa</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="staticEmail" class="form-pendaftaran">email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer
                                        Telefon</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $nomerhp }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Program
                                        Upload KTM / Transkrip</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Induk
                                        Upload SK Mahasiswa Aktif</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                        </div>
                        <div class="titleheading mb-2">Identitas Anggota 2</div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Anggota
                                2</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama Ketua Tim">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Program
                                        Studi</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Induk
                                        Mahasiswa</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="staticEmail" class="form-pendaftaran">email</label>
                                    <div class="">
                                        <input type="text" readonly disabled class="form-control-plaintext"
                                            id="staticEmail" value="{{ $email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer
                                        Telefon</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        value="{{ $nomerhp }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Program
                                        Upload KTM / Transkrip</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Induk
                                        Upload SK Mahasiswa Aktif</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                        </div>
                        <div class="titleheading mb-2">Dokuem Kelengkapan</div>
                        <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Form
                            Pendaftaran</label>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-lg-3 mb-0">
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nama Ketua Tim">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <a href="" class="">
                                    <button type="button" class="btn btn-download">
                                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                            width="20" height="20">
                                        <b>Download</b> Template Form Pendaftaran
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#simpan" data-toggle="modal" data-animation="effect-scale">
                                <button type="submit" class="btn btn-civex  mg-b-20 mg-r-20">Submit</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                @include('gec.slicing.timeline')
            </div>
        </div>
    </div>


    <!-- Modal simpan -->
    <div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="tx-poppins tx-medium">Pendaftaran Berkas Tim</h5>
                    <p class="mg-b-0">Apakah anda yakin ingin melengkapi bio data tim yang telah diisi ?
                    </p>
                </div>
                <form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-civex-danger tx-poppins tx-medium"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-civex tx-poppins tx-medium">Ya, Saya Yakin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
