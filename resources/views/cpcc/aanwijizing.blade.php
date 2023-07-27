@extends('cpcc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12 mb-lg-5 mb-2">
                {{-- status bar --}}
                @include('cpcc.slicing.aanwijizing-status')
                @include('cpcc.slicing.aanwijizing-status2')
                @include('cpcc.slicing.aanwijizing-status3')

                {{-- saat belum bertanya --}}
                @include('cpcc.slicing.aanwijizing-form')

                {{-- preview sudah mengajukan --}}
                @include('cpcc.slicing.aanwijizing-preview')

                {{-- hasil jawaban aanwijizing, ditampilkan jika sudah masuk waktunya --}}
                @include('cpcc.slicing.aanwijizing-resultpreview')

                {{-- recap aanwijizing --}}
                @include('cpcc.slicing.aanwijizing-resulttable')
            </div>
            <div class="col-lg-4 col-12">
                @include('cpcc.slicing.timeline')
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
