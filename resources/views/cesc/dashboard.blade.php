@extends('cesc.master')

@section('content')
    <div class="container verifikasi pt-5 mt-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                {{ $status }}
                @if($status == '2')
                    {{-- pendaftaran di verifikasi --}}
                    @include('cesc.slicing.dashboard-status')
                @elseif($status == '2')
                    {{-- proses verif --}}
                    @include('cesc.slicing.dashboard-status2')
                @elseif($status == '2')
                    {{-- DiTolak --}}
                    @include('cesc.slicing.dashboard-status3')
                @endif
                {{-- video --}}
                <div class="card mg-b-20">
                    <div class="card-body">
                        <p class="title">Video Tutorial Pendaftaran</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3I_IusWHxaA?si=BjaWcDsaWrOSl9RZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
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
