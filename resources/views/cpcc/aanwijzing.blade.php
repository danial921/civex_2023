@extends('cpcc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12 mb-lg-5 mb-2">
                {{-- status bar --}}
                @if($pertanyaanAanwijzing == null)
                    @include('cpcc.slicing.aanwijzing-status')
                @elseif(($pertanyaanAanwijzing != null) && strtotime(date("Y-m-d H:i:s")) <= strtotime('2023-10-13 23:59:59'))
                    @include('cpcc.slicing.aanwijzing-status2')
                @elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-13 23:59:59'))
                    @include('cpcc.slicing.aanwijzing-status3')
                @endif

                {{-- @include('cpcc.slicing.aanwijzing-form')
                @include('cpcc.slicing.aanwijzing-resulttable') --}}

                @if($aanwijizing_tanya == null && strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-8 23:59:59') && strtotime(date("Y-m-d H:i:s")) <= strtotime('2023-10-14 23:59:59'))
                    @include('cpcc.slicing.aanwijzing-form')
                @elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-13 23:59:59'))
                    @include('cpcc.slicing.aanwijzing-resulttable')
                @endif

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
                <div class="modal-footer">
                    <a class="btn btn-civex-danger tx-poppins tx-medium"
                        data-dismiss="modal">Batal</a>
                    <button href="#" class="btn btn-civex tx-poppins tx-medium" onclick="submitForm()" id="btnSubmit2">Ya, Saya Yakin</button>
                </div>
            </div>
        </div>
    </div>

    <script src=" {{ asset('js/form-gec.js') }} " ></script>
@endsection
