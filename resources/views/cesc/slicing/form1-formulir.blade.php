<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Tim</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Tim">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Ketua Tim</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Asal Universitas</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Asal Universitas">
        </div>
        <div class="row mb-3">
            <div class="col-lg-6 col-12">
                <label for="staticEmail" class="form-pendaftaran">Email Pendaftar</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                        value="{{ $email }}">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomer Handphone (Whatsapp)</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        value="{{ $nomerhp }}">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Unggah Bukti Bayar</label>
            <p class="image-sub-label">pembayaran dapat dilakukan pada nomer rekening <span
                    class="c-cpcc">{{ $rekening_transfer }}</span> Sebesar <span class="c-cpcc">{{ $biaya_daftar }}</span></p>
            <div class="fileupload">
                <label for="fileField" class="attachment">
                    <div class="row btn-file">
                        <div class="btn-file__preview"></div>
                        <div class="btn-file__actions">
                            <div class="btn-file__actions__item col-xs-12 text-center">
                                <div class="btn-file__actions__item--shadow py-3">
                                    <div class="visible-xs-block"></div>
                                    <p class="imagetitle">Upload Gambarmu <span class="c-cppc">Disini</span></p>
                                    <p class="imagesubtitle">supports: jpg, jpeg, png</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input name="file" type="file" id="fileField" style="display: none">
                </label>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href="#simpan" data-toggle="modal" data-animation="effect-scale">
                <button type="submit" class="btn btn-civex  mg-b-20 mg-r-20">Submit</button>
            </a>
        </div>

    </div>
</div>

        <!-- Modal simpan -->
        <div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <h5 class="tx-poppins tx-medium">Pendaftaran TIM</h5>
                  <p class="mg-b-0">Apakah anda yakin ingin melakukan pendaftaran tim dengan data tim yang telah diisi?</p>
                </div>
                <form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-civex-danger tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-civex tx-poppins tx-medium">Ya, Saya Yakin</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
