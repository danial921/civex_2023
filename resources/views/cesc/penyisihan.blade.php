@extends('cesc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                @if($status === "2")
                    {{-- pendaftaran di verifikasi --}}
                    @include('cesc.slicing.penyisihan-hero')
                @elseif($status === "31")
                    {{--  Tidak Lolos --}}
                    @include('cesc.slicing.penyisihan-release-tidaklolos')
                @elseif($status === "3")
                    {{--  Lolos Penyisihan --}}
                    @include('cesc.slicing.penyisihan-release-lolos')
                @endif    
            </div>
            <div class="col-lg-4 col-12">
                @include('cesc.slicing.timeline')
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
