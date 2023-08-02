<div class="card container">
    <div class="card-body">
        <div class="title mb-lg-4 mb-2">Pengumpulan Berkas Semifinal</div>
        <div class="row">
            <div class="col-lg-6 col-12 mb-lg-2 mb-0">
                <label for="staticEmail" class="form-pendaftaran mb-0">Nama Tim</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext mb-lg-2 mb-0" id="staticEmail"
                        value="{{ $namatim }}">
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-lg-2 mb-0">
                <label for="staticEmail" class="form-pendaftaran mb-0">Institusi Asal</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext mb-lg-2 mb-0" id="staticEmail"
                        value="{{ $institusi }}">
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-lg-2 mb-0">
                <label for="staticEmail" class="form-pendaftaran mb-0">Nama Ketua Tim</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext mb-lg-2 mb-0" id="staticEmail"
                        value="{{ $ketuatim }}">
                </div>
            </div>
            <div class="col-12 mb-lg-2 mb-0">
                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-2">Unggah Proposal</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Nama Tim">
            </div>
            <div class="mt-3 d-flex justify-content-end align-items-center">
                <a href="#simpan" data-toggle="modal" data-animation="effect-scale">
                    <button type="submit" class="btn btn-civex">Submit</button>
                </a>
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
                <p class="mg-b-0">Apakah anda yakin ingin melakukan pendaftaran tim dengan data tim yang telah
                    diisi?</p>
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
