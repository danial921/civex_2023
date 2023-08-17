@extends('cpcc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                @if($status === '1')
                    {{-- pendaftaran di verifikasi, timbelum melengkapi berkas --}}
                    @include('cpcc.slicing.verif-status')
                @elseif($status === '12')
                    {{-- proses verif berkas--}}
                    @include('cpcc.slicing.verif-status2')
                @elseif($status === '11')
                    {{-- tolak berkas--}}
                    @include('cpcc.slicing.verif-status5')
                @elseif($status === '01')
                    {{-- formulir DiTolak --}}
                    @include('cpcc.slicing.verif-status3')
                @elseif($status === '00')
                    {{-- formulir direview --}}
                    @include('cpcc.slicing.verif-status4')
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
