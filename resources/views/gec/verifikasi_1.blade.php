@extends('general.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                {{-- pendaftaran di verifikasi, timbelum melengkapi berkas --}}
                <div class="card mg-b-20">
                    <div class="card-header">
                        <p class="title">Status Pendaftaran</p>
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="d-flex bd-highlight mb-3 justify-content-start">
                                    <div class="d-none d-lg-block  bd-highlight"><img src="{{ asset('civex/img/icon/icon-regular.png') }}"
                                            class=" mg-l-10 mg-r-25 "></div>
                                    <div class=" bd-highlight">
                                        <p class=" tx-poppins tx-medium mb-1 tx-15 ">Pendaftaran</p>
                                        <p class="mg-b-1 danger text-center">Tim belum melengkapi berkas pendaftaran</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <p class="form mb-1">Lengkapi Berkas Pendaftaran Disini</p>
                                <a href="">
                                    <button type="button" class="btn btn-daftar">
                                        <img src="{{ asset('civex/img/icon/icon-daftar.svg') }}" alt="your_image" width="20" height="20">
                                    <b>Formulir</b> Berkas Pendaftar
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- proses verif --}}
                <div class="card mg-b-20">
                    <div class="card-header">
                        <p class="tx-poppins tx-medium mb-1 tx-15">Status Pendaftaran</p>
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="d-flex bd-highlight mb-3 justify-content-start">
                                    <div class="d-none d-lg-block  bd-highlight"><img src="{{ asset('civex/img/icon/icon-regular.png') }}"
                                            class=" mg-l-10 mg-r-25 "></div>
                                    <div class=" bd-highlight">
                                        <p class=" tx-poppins tx-medium mb-1 tx-15 ">Pendaftaran</p>
                                        <p class="mg-b-1 medium text-center">Berkas Pendaftaran sedang direview</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <p class="tx-poppins tx-medium mb-1 tx-15">Contact Person</p>
                                <div class="d-flex align-items-center">
                                    <!-- CP -->
                                    <div class="container-fluid">
                                      <p class="tx-poppins tx-medium mg-b-0 tx-15">{{ ENV('GEC_CP1') }}</p>
                                      <p class="mg-b-1">{{ ENV('GEC_NO_CP1') }}</p>
                                    </div>
                                    <div class="container-fluid">
                                      <p class="tx-poppins tx-medium mg-b-0 tx-15">{{ ENV('GEC_CP2') }}</p>
                                      <p class="mg-b-1">{{ ENV('GEC_NO_CP2') }}</p>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DiTolak --}}
                <div class="card mg-b-20">
                    <div class="card-header">
                        <p class="tx-poppins tx-medium mb-1 tx-15">Status Pendaftaran</p>
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="d-flex bd-highlight mb-3 justify-content-start">
                                    <div class="d-none d-lg-block  bd-highlight"><img src="{{ asset('civex/img/icon/icon-regular.png') }}"
                                            class=" mg-l-10 mg-r-25 "></div>
                                    <div class=" bd-highlight">
                                        <p class=" tx-poppins tx-medium mb-1 tx-15 ">Pendaftaran</p>
                                        <p class="mg-b-1 danger text-center">Formulir Pendaftaran ditolak, silahkan hubungi Contact Person</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <p class="tx-poppins tx-medium mb-1 tx-15">Contact Person</p>
                                <div class="d-flex align-items-center">
                                    <!-- CP -->
                                    <div class="container-fluid">
                                      <p class="tx-poppins tx-medium mg-b-0 tx-15">{{ ENV('GEC_CP1') }}</p>
                                      <p class="mg-b-1">{{ ENV('GEC_NO_CP1') }}</p>
                                    </div>
                                    <div class="container-fluid">
                                      <p class="tx-poppins tx-medium mg-b-0 tx-15">{{ ENV('GEC_CP2') }}</p>
                                      <p class="mg-b-1">{{ ENV('GEC_NO_CP2') }}</p>
                                    </div>
                                  </div>
                            </div>
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
                    <h5 class="tx-poppins tx-medium">Pendaftaran TIM</h5>
                    <p class="mg-b-0">Apakah anda yakin ingin melakukan pendaftaran tim dengan data tim yang telah diisi?
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
