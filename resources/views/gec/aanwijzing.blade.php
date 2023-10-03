@extends('gec.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12 mb-lg-5 mb-2">
                {{-- status bar --}}
                @if($pertanyaanAanwijzing === null )
                    @include('gec.slicing.aanwijzing-status')
                @elseif(($pertanyaanAanwijzing !== null) && strtotime(date("Y-m-d H:i:s")) <= strtotime('2023-10-11 23:59:59'))
                    @include('gec.slicing.aanwijzing-status2')
                @elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-11 23:59:59'))
                    @include('gec.slicing.aanwijzing-status3')
                @endif

                {{-- saat belum bertanya --}}
                @if($aanwijizing_tanya === null && strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-8 23:59:59') && strtotime(date("Y-m-d H:i:s")) <= strtotime('2023-10-11 23:59:59'))
                    @include('gec.slicing.aanwijzing-form')
                @elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-11 23:59:59'))
                {{-- hasil jawaban aanwijzing, ditampilkan jika sudah masuk waktunya --}}
                    @include('gec.slicing.aanwijzing-resultpreview')
                {{-- recap aanwijzing --}}
                    @include('gec.slicing.aanwijzing-resulttable')
                @else
                    {{-- preview sudah mengajukan --}}
                    @include('gec.slicing.aanwijzing-preview')
                @endif


                
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
                    <h5 class="tx-poppins tx-medium">Submit Jawaban Aanwijizing</h5>
                    <p class="mg-b-0">Anda memiliki kesempatan sekali untuk bertanya, Apakah anda yakin ingin bertanya?</p>
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
