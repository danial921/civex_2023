<div class="card mt-2">
    <form id="gec_form" class="row m-4 pr-4" method="post" route="{{ route('register-workshop') }}" enctype="multipart/form-data">
        <div class="col-12 mb-0 mb-lg-2 mb-1">
            <label for="nama" class="form-pendaftaran">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama[]" required autofocus>
        </div>
        <div class="col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="instansi" class="form-pendaftaran">Asal Instansi</label>
            <input type="text" class="form-control" id="instansi" name="instansi[]" required autofocus>

        </div>
        <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="email" class="form-pendaftaran">Email</label>
            <input type="text" class="form-control" id="email" name="email[]" required autofocus>

        </div>
        <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="notelp" class="form-pendaftaran">Nomor Telefon</label>
            <input type="text" class="form-control" id="notelp" name="notelp[]" required autofocus>

        </div>
        <div class="col-12 mb-0 mb-lg-2 mb-1">
            <label for="nama" class="form-pendaftaran">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama[]" required autofocus>
        </div>
        <div class="col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="instansi" class="form-pendaftaran">Asal Instansi</label>
            <input type="text" class="form-control" id="instansi" name="instansi[]" required autofocus>

        </div>
        <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="email" class="form-pendaftaran">Email</label>
            <input type="text" class="form-control" id="email" name="email[]" required autofocus>

        </div>
        <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="notelp" class="form-pendaftaran">Nomor Telefon</label>
            <input type="text" class="form-control" id="notelp" name="notelp[]" required autofocus>

        </div>
        <div class="col-12 mb-0 mb-lg-2 mb-1">
            <label for="nama" class="form-pendaftaran">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama[]" required autofocus>
        </div>
        <div class="col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="instansi" class="form-pendaftaran">Asal Instansi</label>
            <input type="text" class="form-control" id="instansi" name="instansi[]" required autofocus>

        </div>
        <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="email" class="form-pendaftaran">Email</label>
            <input type="text" class="form-control" id="email" name="email[]" required autofocus>

        </div>
        <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1 mt-2">

            <label for="notelp" class="form-pendaftaran">Nomor Telefon</label>
            <input type="text" class="form-control" id="notelp" name="notelp[]" required autofocus>

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

    </form>
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
                <button type="button" class="btn btn-civex tx-poppins tx-medium" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

