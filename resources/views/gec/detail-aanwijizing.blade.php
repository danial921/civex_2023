@extends('gec.master')

@section('content')
<div class="container verifikasi pt-5 mt-5 mb-2">
    <div class="d-flex align-items-center justify-content-start">
        <a href="/gec/aanwijizing"
            class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
            title="Kembali">
            <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
        </a>
        <h4 class="tx-poppins tx-medium mg-b-0">Form Kelengkapan Tim <span class="c-gec">GEC</span>
            Geotechnical Engineering Competition</h4>
    </div>
</div>
    <div class="container verifikasi">
        <div class="row">
            <div class="col-lg-8 col-12 mb-lg-5 mb-2">
                {{-- hasil jawaban aanwijizing, ditampilkan jika sudah masuk waktunya --}}
                @include('gec.slicing.aanwijizing-detailquestion')

            </div>
            <div class="col-lg-4 col-12">
                @include('gec.slicing.timeline')
            </div>
        </div>
    </div>


    <!-- Modal simpan -->
    <div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan" aria-hidden="true">
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
