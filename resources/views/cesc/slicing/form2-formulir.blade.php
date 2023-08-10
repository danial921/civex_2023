<div class="card">
    <div class="card-body">
        <form id="gec_form" class="mt-2 " method="post" route="{{ route('submit-berkas-cesc') }}" enctype="multipart/form-data">
            @csrf
            <div class="title mb-2">IDENTITAS TIM</div>
            <div class="row mb-3">
                <div class="col-lg-6 col-12">
                    <label for="nama_tim" class="form-pendaftaran">Nama Tim</label>
                    <div class="">
                        <input type="text" readonly class="form-control-plaintext" id="nama_tim"
                            value="{{ $namatim }}" name="nama_tim" required>
                            @error('nama_tim')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <label for="sekolah" class="form-pendaftaran">Sekolah Asal</label>
                    <div class="">
                        <input type="text" readonly class="form-control-plaintext" id="sekolah"
                            value="{{ $institusi }}" name="sekolah" required>
                            @error('sekolah')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>

            <div class="title mb-2">IDENTITAS KETUA TIM</div>
            <div class="mb-3">
                <label for="ketua_nama" class="form-pendaftaran">Nama Ketua Tim</label>
                <input type="text" class="form-control" id="ketua_nama" 
                    placeholder="Nama Ketua Tim" name="ketua_nama" required>
                    @error('ketua_nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_kelas " class="form-pendaftaran">Tingkat Pendidikan</label>
                            <select class="form-select" aria-label="Default select example" name="ketua_kelas" required>
                                <option selected hidden>Open this select menu</option>
                                <option value="Kelas X" selected>Kelas X</option>
                                <option value="Kelas XI">Kelas XI</option>
                                <option value="Kelas XII">Kelas XII</option>
                            </select>
                        @error('ketua_kelas')
                            <div class="alert alert-danger">{{ ('Pilih salah satu') }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_notelp " class="form-pendaftaran">Nomor Telepon</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            value="{{$nomerhp}}" name="ketua_notelp" required>
                            @error('ketua_notelp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_kartu " class="form-pendaftaran">Upload Kartu Pelajar</label>
                        <input type="file" class="form-control" id="ketua_kartu" name="ketua_kartu" required>
                        @error('ketua_kartu')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_foto " class="form-pendaftaran">Pas Foto</label>
                        <input type="file" class="form-control" id="ketua_foto"
                            name="ketua_foto" required>
                        @error('ketua_foto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_twibbon " class="form-pendaftaran">Upload Twibbon</label>
                        <input type="file" class="form-control" id="ketua_twibbon" name="ketua_twibbon" required>
                        @error('ketua_twibbon')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_follow " class="form-pendaftaran">
                            Upload bukti follow IG <a class="c-blue bold" href="https://www.instagram.com/civilexpoits/">CIVEX</a></label>
                        <input type="file" class="form-control" id="ketua_follow"
                            placeholder="Nama Ketua Tim" name="ketua_follow" required>
                            @error('ketua_follow')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>

            <div class="title mb-2">IDENTITAS ANGGOTA</div>
            <div class="mb-3">
                <label for="anggota_nama " class="form-pendaftaran">Nama Anggota Tim</label>
                <input type="text" class="form-control" id="anggota_nama" 
                    placeholder="Nama Anggota Tim" name="anggota_nama" required>
                    @error('anggota_nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota_kelas " class="form-pendaftaran">Tingkat Pendidikan</label>
                            <select class="form-select" aria-label="Default select example" name="anggota_kelas" required>
                                <option selected hidden>Open this select menu</option>
                                <option value="Kelas X" selected>Kelas X</option>
                                <option value="Kelas XI">Kelas XI</option>
                                <option value="Kelas XII">Kelas XII</option>
                            </select>
                            @error('anggota_kelas')
                                <div class="alert alert-danger">{{ ('Pilih salah satu') }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota_notelp " class="form-pendaftaran">Nomor Telepon</label>
                        <input type="text" class="form-control" id="anggota_notelp"
                            placeholder="Nomor Telepon" name="anggota_notelp" required>
                            @error('anggota_notelp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota_kartu " class="form-pendaftaran">Upload Kartu Pelajar</label>
                        <input type="file" class="form-control" id="anggota_kartu" name="anggota_kartu">
                            @error('anggota_kartu')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota_foto " class="form-pendaftaran">Pas Foto</label>
                        <input type="file" class="form-control" id="anggota_foto"
                            name="anggota_foto" required>
                            @error('anggota_foto')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota_twibbon " class="form-pendaftaran">Upload Twibbon</label>
                        <input type="file" class="form-control" id="anggota_twibbon" name="anggota_twibbon">
                        @error('anggota_twibbon')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota_follow " class="form-pendaftaran">
                            Upload bukti follow IG <a class="c-blue bold" href="https://www.instagram.com/civilexpoits/">CIVEX</a></label>
                        <input type="file" class="form-control" id="anggota_follow"
                            name="anggota_follow">
                            @error('anggota_follow')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center mt-lg-3 mt-2">
                <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit" data-toggle="modal" data-animation="effect-scale" data-target="#simpan"></input>
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
                <h5 class="tx-poppins tx-medium">Pendaftaran Berkas Tim</h5>
                <p class="mg-b-0">Apakah anda yakin ingin melengkapi bio data tim yang telah diisi ?
                </p>
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