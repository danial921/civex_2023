<div class="card">
    <div class="card-body">
        <div class="title mb-2">IDENTITAS TIM</div>
        <div class="row mb-3">
            <div class="col-lg-6 col-12">
                <label for="staticEmail" class="form-pendaftaran">Nama Tim</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                        value="{{ $namatim }}"">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <label for="staticEmail" class="form-pendaftaran">Sekolah Asal</label>
                <div class="">
                    <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                        value="{{ $institusi }}">
                </div>
            </div>
        </div>

        <div class="title mb-2">IDENTITAS KETUA TIM</div>
        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Ketua Tim</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Tingkat Pendidikan</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected hidden>Open this select menu</option>
                            <option value="Kelas X">Kelas X</option>
                            <option value="Kelas XI">Kelas XI</option>
                            <option value="Kelas XII">Kelas XII</option>
                          </select>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomor Telepon</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nomor Telepon">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu Pelajar</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Pas Foto</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Ketua Tim">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu Pelajar</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">
                        Upload bukti follow IG <a class="c-blue bold" href="https://www.instagram.com/civilexpoits/">CIVEX</a></label>
                    <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Ketua Tim">
                </div>
            </div>
        </div>

        <div class="title mb-2">IDENTITAS ANGGOTA 1</div>
        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nama Anggota Tim</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Ketua Tim">
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Tingkat Pendidikan</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected hidden>Open this select menu</option>
                            <option value="Kelas X">Kelas X</option>
                            <option value="Kelas XI">Kelas XI</option>
                            <option value="Kelas XII">Kelas XII</option>
                          </select>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Nomor Telepon</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nomor Telepon">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu Pelajar</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Pas Foto</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Ketua Tim">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Upload Kartu Pelajar</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">
                        Upload bukti follow IG <a class="c-blue bold" href="https://www.instagram.com/civilexpoits/">CIVEX</a></label>
                    <input type="file" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Ketua Tim">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-lg-3 mt-2">
            <a href="#simpan" data-toggle="modal" data-animation="effect-scale">
                <button type="submit" class="btn btn-civex">Submit</button>
            </a>
        </div>

    </div>
</div>


<!-- Modal simpan -->
<div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="tx-poppins tx-medium">Pendaftaran Berkas Tim</h5>
                <p class="mg-b-0">Apakah anda yakin ingin melengkapi bio data tim yang telah diisi ?
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
