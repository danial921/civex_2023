<div class="registration-webinar-background text-end mr-xxl-3 mr-1" style="text-align: right;">
    <div class="text">
        <h1 class="d-none d-xl-block">Hello, Friend!</h1>
        <p class="d-none d-xl-block">Fill up personal information and start <br>  your journey  with us.</p>
    </div>
    <img src="{{ asset('civex/img/landingpage/background-registration-workshop.svg') }}" alt="">
</div>

<div class="registration-webinar">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-12">
                <h1 class="d-block d-xl-none">Hello, Friend!</h1>
                <p class="d-block d-xl-none">Fill up personal information and start your journey with us.</p>
                <div class="card mt-2">
                    <div class="row m-4 pr-4">
                        <div class="col-12 mb-0 mb-lg-2 mb-1">
                            <label for="nama_tim" class="form-pendaftaran">Nama</label>
                            <input type="text" class="form-control" id="nama_tim" name="nama_tim" required autofocus>
                        </div>
                        <div class="col-12 mb-0 mb-lg-2 mb-1 mt-2">

                            <label for="nama_tim" class="form-pendaftaran">Asal Instansi</label>
                            <input type="text" class="form-control" id="nama_tim" name="nama_tim" required autofocus>

                        </div>
                        <div class="col-12 mb-0 mb-lg-2 mb-1 mt-2">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Unggah Bukti Bayar</label>
                            <p class="image-sub-label"></span></p>
                            <div class="fileupload-opening">
                                <label for="fileField" class="attachment w-100">
                                    <div class="w-100 row btn-file">
                                        <div class="w-100 btn-file__preview"></div>
                                        <div class="w-100 btn-file__actions">
                                            <div class="w-100 btn-file__actions__item col-xs-12 text-center">
                                                <div class="w-100 btn-file__actions__item--shadow py-3">
                                                    <div class="visible-xs-block"></div>
                                                    <p class="imagetitle">Upload Gambarmu <span class="c-cppc">Disini</span></p>
                                                    <p class="imagesubtitle">supports: jpg, jpeg, png</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="bukti_bayar" type="file" id="fileField" style="display: none"
                                        accept="image/jpeg, image/png" required>
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end align-items-center w-100">
                            <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit"
                                data-toggle="modal" data-animation="effect-scale" data-target="#simpan">
                        </div>

                    </div>
                </div>
            </div>
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
            <div class="modal-footer">
                <a class="btn btn-civex-danger tx-poppins tx-medium" data-dismiss="modal">Batal</a>
                <button href="#" class="btn btn-civex tx-poppins tx-medium" onclick="submitForm()"
                    id="btnSubmit2">Ya, Saya Yakin</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal success -->
<div class="modal fade effect-scale" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document"> <!-- Note the added modal-dialog-centered class -->
        <div class="modal-content text-center">
            <img src="{{ asset('civex/img/landingpage/paper-plane.gif') }}" alt="">
            <h1>Woo hoo!</h1>
            <p>Your registration has been successfully submitted. Please check your email for further information.</p>
            <div class="justify-content-center pb-3 pt-4">
                <a href="{{ route('webinar') }}" type="button" class="btn btn-civex tx-poppins tx-medium">Close</a>
            </div>

        </div>
    </div>
</div>

<script>
    function submitForm() {
        $('#simpan').modal('hide');
        setTimeout(() => $('#successModal').modal('show'), 500); // Delay is used to ensure a smoother transition
    }

    jQuery(($) => {
        $('.attachment input[type="file"]')
            .on('change', (event) => {
                let el = $(event.target).closest('.attachment').find('.btn-file');

                el
                    .find('.btn-file__actions__item')
                    .css({
                        'padding': '135px'
                    });

                el
                    .find('.btn-file__preview')
                    .css({
                        'background-image': 'url(' + window.URL.createObjectURL(event.target.files[0]) +
                            ')'
                    });
            });
    });
</script>
