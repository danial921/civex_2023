<div class="card container mt-4">
    <div class="card-header">
        <h3 class="mt-2">Submission Video</h3>
    </div>
    <div class="card-body">

@if (true)
    <div class="text-center"><p><em>Submission Video Submited</em></p></div>
@else
<div class="row">
    <label for="url_video" class="form-pendaftaran mb-2">Unggah Video (URL)</label>
    <input type="text" class="form-control" id="url_video" name="url_video">
    @error('url_video')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mt-3 d-flex justify-content-end align-items-center">
        <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit" data-toggle="modal" data-animation="effect-scale" data-target="#simpan"></input>
    </div>
</div>
@endif

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
