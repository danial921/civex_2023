@extends('gec.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12 mb-lg-5 mb-2">
                {{-- status bar --}}
                @include('gec.slicing.aanwijizing-status')
                @include('gec.slicing.aanwijizing-status2')
                @include('gec.slicing.aanwijizing-status3')

                {{-- saat belum bertanya --}}
                @include('gec.slicing.aanwijizing-form')

                {{-- preview sudah mengajukan --}}
                @include('gec.slicing.aanwijizing-preview')

                {{-- hasil jawaban aanwijizing, ditampilkan jika sudah masuk waktunya --}}
                @include('gec.slicing.aanwijizing-resultpreview')
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
