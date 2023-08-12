<div class="card container mb-2">
    <div class="card-body">
    <form id="gec_form" class="mt-2 " method="post" route="{{ route('submit-berkasfinal-cppc') }}" enctype="multipart/form-data">
        @csrf
        <div class="formbody-header">Pengumpulan Berkas Final</div>
        <div class="row">
            <div class="col-lg-6 col-12 mb-2">
                <label for="staticEmail" class="form-pendaftaran mb-0">Nama Tim</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                        value="{{ $namatim }}">
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-2">
                <label for="staticEmail" class="form-pendaftaran mb-0">Institusi Asal</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                        value="{{ $institusi }}">
                </div>
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail" class="form-pendaftaran mb-0">Nama Ketua Tim</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                        value="{{ $ketuatim }}">
                </div>
            </div>
            @if(strtotime(date("Y-m-d H:i:s")) <= strtotime('2023-11-30 23:59:59'))
            <div class="col-lg-6 col-12 mb-2">
                <label for="ppt" class="form-pendaftaran mb-1">Unggah Power Point</label>
                <input type="file" class="form-control" id="ppt" name="ppt">
            </div>
            @error('ppt')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="col-lg-6 col-12 mb-2">
                <label for="url_video" class="form-pendaftaran mb-1">Url Video</label>
                <input type="text" class="form-control" id="url_video" name="url_video">
            </div>
            @error('url_video')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="subtitleform">* video dapat di upload di youtube, dan pastikan video tidak di private</div>
            @endif
            <div class="mt-3 d-flex justify-content-end align-items-center">
                <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit" data-toggle="modal" data-animation="effect-scale" data-target="#simpan"></input>
            </div>
        </div>
    </form>
    </div>
</div>
<!-- Modal simpan -->
<div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="tx-poppins tx-medium">Pendaftaran TIM</h5>
                <p class="mg-b-0">Apakah anda yakin ingin melakukan pendaftaran tim dengan data tim yang telah
                    diisi?</p>
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
