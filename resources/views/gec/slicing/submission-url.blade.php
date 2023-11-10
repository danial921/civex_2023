<div class="card container mt-4">
    <div class="card-header">
        <h3 class="mt-2">Submission Video</h3>
    </div>
    <div class="card-body">

@if ($status_url != '-')
    <div class="text-center"><p><em>Submission Video Submited</em></p></div>
@elseif(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-11-16 23:59:59'))
    <div class="text-center"><p><em>Exceeded The Deadline</em></p></div>
@else
    <div class="row">
        <form id="url_form" class="mt-2 " method="post" action="{{ route('submit-url-gec') }}" enctype="multipart/form-data">
            @csrf
            <label for="url_video" class="form-pendaftaran mb-2">Unggah Video (URL)</label>
            <input type="text" class="form-control" id="url_video" name="url_video">
            @error('url_video')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mt-3 d-flex justify-content-end align-items-center">
                <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit" data-toggle="modal" data-animation="effect-scale" data-target="#simpan2"></input>
            </div>
        </form>
    </div>
@endif

    </div>
</div>
<!-- Modal simpan -->
<div class="modal fade effect-scale" id="simpan2" tabindex="-1" role="dialog" aria-labelledby="simpan"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <h5 class="tx-poppins tx-medium">Submit Url Video</h5>
                <p class="mg-b-0">Apakah anda yakin ingin melakukan Url Video?</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-civex-danger tx-poppins tx-medium"
                    data-dismiss="modal">Batal</a>
                <button href="#" class="btn btn-civex tx-poppins tx-medium" onclick="submitForm2()" id="btnSubmit3">Ya, Saya Yakin</button>
            </div>
        </div>
    </div>
</div>
<script src=" {{ asset('js/form-gec2.js') }} " ></script>
