@extends('admin.master')

@section('content')
    <div class="container pt-5 mt-5 mb-lg-3 mb-1">
        <div class="back d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-start">
                <a href="/admin/gec-aanwijizing"
                    class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"
                    title="Kembali">
                    <ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon>
                </a>
                <h4 class="tx-poppins tx-medium mg-b-0">Detail Pertanyaan Aanjwizing</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="title mb-lg-3 mb-1">
                    <span class="ct-black">Tim :</span> {{ $dataPeserta->nama_tim }}
                </div>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('errors'))
                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                    {{ session('errors') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Judul Pertanyaan</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->aanwijzing_judul }}">
                    </div>
                    <div class="col-12 mb-lg-3 mb-1">
                        <label for="staticEmail" class="form-pendaftaran mb-0">Pertanyaan</label>
                        <input type="text" readonly disabled class="form-control" id="staticEmail"
                            value="{{ $dataPeserta->aanwijzing_tanya }}">
                    </div>
                    <form id="jawab-gec" action="{{ route('admin.jawaban-gec') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" value="{{ $dataPeserta->id }}" hidden>
                    @if ( $dataPeserta->aanwijzing_jawab == null)
                        <div class="col-12 mb-lg-3 mb-1">
                            <label for="aanwijzing_jawab" class="form-pendaftaran mb-0">Jawab Aanwijizing</label>
                            <input type="text" class="form-control" id="aanwijzing_jawab" name="aanwijzing_jawab"
                            placeholder = "pertanyaan belum di jawab">
                        </div>
                    @else
                        <div class="col-12 mb-lg-3 mb-1">
                            <label for="aanwijzing_jawab" class="form-pendaftaran mb-0">Jawab Aanwijizing</label>
                            <input type="text" class="form-control" id="aanwijzing_jawab" name="aanwijzing_jawab"
                                value="{{ $dataPeserta->aanwijzing_jawab }}">
                        </div>
                    @endif
                    {{-- button --}}
                        <div class="mt-3 d-flex justify-content-end align-items-center">
                            <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit" data-toggle="modal" data-animation="effect-scale" data-target="#simpan"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- modal update --}}
<div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="tx-poppins tx-medium">Simpan Perubahana Aanwijizing</h5>
                <p class="mg-b-0">Apakah anda yakin ingin melakukan perubahan pada aanwijizing peserta</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-civex-danger tx-poppins tx-medium" data-dismiss="modal">Batal</a>
                <button class="btn btn-civex tx-poppins tx-medium" id="btnSubmit2" onclick="submit()">Ya, Saya Yakin</button>
            </div>
        </div>
    </div>
</div>

<script>
    function submit(){
        document.getElementById('jawab-gec').submit()
    }
</script>
