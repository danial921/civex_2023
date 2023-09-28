@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/admin/workshop"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Detail Pendaftar Workshop</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="title mb-lg-3 mb-1">
                    <span class="ct-black">Data Peserta :</span> {{ $dataPeserta->nama }}
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Nama</label>
                        <textarea type="text" readonly disabled class="form-control" id="staticEmail1" style="min-height: 100px">{!! $dataPeserta->nama !!}</textarea>
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Email</label>
                        <textarea type="text" readonly disabled class="form-control" id="staticEmail2" style="min-height: 100px">{!! $dataPeserta->email !!}</textarea>
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Instansi</label>
                        <textarea type="text" readonly disabled class="form-control" id="staticEmail3" style="min-height: 100px">{!! $dataPeserta->instansi !!}</textarea>
                    </div>
                    <div class="titleheading mb-lg-3 mb-1">Berkas Pembayaran</div>
                    <div class="col-lg-12 col-12 mb-lg-3 mb-1 detail">
                        @if ($dataPeserta->bukti_bayar == null)
                            <p class="w-100 text-center"><i>tim belum mengirimkan berkas</i></p>
                        @elseif ($dataPeserta->bukti_bayar != null)
                            <form method="POST" action="{{ route('show-image') }}" target="_blank">
                                @csrf
                                <input type="hidden" name="url" value=" {{ $dataPeserta->bukti_bayar }} ">
                                <button type="submit" class="w-100 btn btn-download">
                                    <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                                        width="20" height="20">
                                        Bukti story
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
