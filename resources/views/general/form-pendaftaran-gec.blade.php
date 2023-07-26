@extends('general.master')

@section('content')
    <div class="container pt-5 mt-5">
        <div class="back d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Form Pendaftaran <span class="c-gec">GEC</span> Geotechnical Engineering Competition</h4>
            </div>
        </div>
        <div class="card mg-b-20">
            <div class="card-header">
                <p class="title">Biaya Pendaftaran</p>
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex bd-highlight mb-3 justify-content-center">
                            <div class="p-2 bd-highlight"><img src="{{ asset('civex/img/icon/icon-earlybird.png') }}"
                                    class=" mg-l-10 mg-r-25 "></div>
                            <div class="p-2 bd-highlight">
                                <p class=" tx-poppins tx-medium mg-b-0 tx-15 ">Early Bird</p>
                                <p class="mg-b-1 ">Rp.250.000,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex bd-highlight mb-3 justify-content-center">
                            <div class="p-2 bd-highlight"><img src="{{ asset('civex/img/icon/icon-regular.png') }}"
                                    class=" mg-l-10 mg-r-25 "></div>
                            <div class="p-2 bd-highlight">
                                <p class=" tx-poppins tx-medium mg-b-0 tx-15 ">Regular</p>
                                <p class="mg-b-1 ">Rp.300.000,00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="term">* Kuota Early Bird Terbatas</p>
            </div>
        </div>
        {{-- jumbotronkalo udah abis --}}
        <div class="card mg-b-20">
            <div class="card-header">
                <p class="title">Biaya Pendaftaran</p>
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex bd-highlight mb-3 justify-content-center">
                            <div class="p-2 bd-highlight"><img src="{{ asset('civex/img/icon/icon-earlybird.png') }}"
                                    class=" mg-l-10 mg-r-25 "></div>
                            <div class="p-2 bd-highlight">
                                <p class=" tx-poppins tx-medium mg-b-0 tx-15 ">Early Bird</p>
                                <p class="mg-b-1 kuotahabis">Kuota Sudah Habis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex bd-highlight mb-3 justify-content-center">
                            <div class="p-2 bd-highlight"><img src="{{ asset('civex/img/icon/icon-regular.png') }}"
                                    class=" mg-l-10 mg-r-25 "></div>
                            <div class="p-2 bd-highlight">
                                <p class=" tx-poppins tx-medium mg-b-0 tx-15 ">Regular</p>
                                <p class="mg-b-1 ">Rp.300.000,00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="term">* Kuota Early Bird Terbatas</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Tim</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Tim">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Ketua Tim</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Asal Universitas</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Asal Universitas">
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 col-12">
                        <label for="staticEmail" class="form-pendaftaran">Email Pendaftar</label>
                        <div class="">
                            <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                                value="{{ $email }}"">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Handphone (Whatsapp)</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                value="{{ $nomerhp }}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Unggah Bukti Bayar</label>
                    <p class="image-sub-label">pembayaran dapat dilakukan pada nomer rekening <span
                            class="c-cpcc">{{ $rekening_transfer }}</span> Sebesar <span class="c-cpcc">{{ $biaya_daftar }}</span></p>
                    <div class="fileupload">
                        <label for="fileField" class="attachment">
                            <div class="row btn-file">
                                <div class="btn-file__preview"></div>
                                <div class="btn-file__actions">
                                    <div class="btn-file__actions__item col-xs-12 text-center">
                                        <div class="btn-file__actions__item--shadow py-3">
                                            <div class="visible-xs-block"></div>
                                            <p class="imagetitle">Upload Gambarmu <span class="c-cppc">Disini</span></p>
                                            <p class="imagesubtitle">supports: jpg, jpeg, png</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input name="file" type="file" id="fileField" style="display: none">
                        </label>
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


        <!-- Modal simpan -->
        <div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <h5 class="tx-poppins tx-medium">Pendaftaran TIM</h5>
                  <p class="mg-b-0">Apakah anda yakin ingin melakukan pendaftaran tim dengan data tim yang telah diisi?</p>
                </div>
                <form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-civex-danger tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-civex tx-poppins tx-medium">Ya, Saya Yakin</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
@endsection
