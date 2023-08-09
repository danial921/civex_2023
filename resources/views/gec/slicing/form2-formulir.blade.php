    <div class="card">
        <div class="card-body">
            <form id="gec_form" class="mt-2 " method="post" route="{{ route('submit-berkas-gec') }}" enctype="multipart/form-data">
                @csrf
                <div class="title mb-lg-3 mb-1">Identitas Tim</div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1">
                        <label for="nama_tim" class="form-pendaftaran mb-1">Nama Tim</label>
                        <div class="">
                            <input type="text" readonly class="form-control mb-0" id="nama_tim"
                                value="{{ $namatim }}" name="nama_tim" required>
                                @error('nama_tim')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1">
                        <label for="institusi" class="form-pendaftaran mb-1">Institusi Asal</label>
                        <div class="">
                            <input type="text" readonly class="form-control mb-0" id="institusi"
                                value="{{ $institusi }}" name="institusi" required>
                                @error('institusi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1">

                        <label for="alamat_institusi" class="form-pendaftaran mb-1">Alamat Perguruan
                            Tinggi</label>
                        <input type="text" class="form-control mb-0" id="alamat_institusi"
                            placeholder="Alamat Perguruan Tinggi" name="alamat_institusi" required>
                            @error('alamat_institusi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                    </div>
                    <div class="col-lg-6 col-12 mb-0 mb-lg-2 mb-1">
                        <label for="dosen_pembimbing" class="form-pendaftaran mb-1">Dosen
                            Pembimbing</label>
                        <input type="text" class="form-control mb-0" id="dosen_pembimbing"
                            placeholder="Dosen Pembimbing" name="dosen_pembimbing" required>
                            @error('dosen_pembimbing')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="titleheading mb-lg-3 mb-1 mt-2">Identitas Ketua TIM</div>
                <div class="mb-lg-2 mb-1">
                    <label for="ketua_nama" class="form-pendaftaran mb-1">Nama Ketua Tim</label>
                    <input type="text" class="form-control mb-0" id="ketua_nama"
                        placeholder="Nama Ketua Tim" value="{{ $ketua_nama}}" name="ketua_nama" required>
                        @error('ketua_nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-lg-2 mb-1">
                            <label for="ketua_prodi" class="form-pendaftaran mb-1">Program
                                Studi</label>
                            <input type="text" class="form-control mb-0" id="ketua_prodi"
                                placeholder="Program Studi Ketua Tim" name="ketua_prodi" required>
                                @error('ketua_prodi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-0">
                        <div class="mb-lg-2 mb-1">
                            <label for="ketua_nim" class="form-pendaftaran mb-1">Nomer Induk
                                Mahasiswa</label>
                            <input type="text" class="form-control mb-0" id="ketua_nim"
                                placeholder="Nomer Induk Ketua Tim" name="ketua_nim" required>
                                @error('ketua_nim')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-0">
                        <div class="mb-lg-2 mb-1">
                            <label for="ketua_notelp" class="form-pendaftaran mb-1">Nomer
                                Telefon</label>
                            <input type="text" class="form-control mb-0" id="ketua_notelp"
                                value="{{ $nomerhp }}" name="ketua_notelp" required>
                                @error('ketua_notelp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="titleheading mb-lg-3 mb-1">Identitas Anggota 1</div>
                <div class="mb-lg-2 mb-1">
                    <label for="anggota1_nama" class="form-pendaftaran mb-1">Nama Anggota
                        1</label>
                    <input type="text" class="form-control mb-0" id="anggota1_nama"
                        placeholder="Nama Anggota 1" name="anggota1_nama" required>
                        @error('anggota1_nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-0">
                        <div class="mb-lg-2 mb-1">
                            <label for="anggota1_prodi" class="form-pendaftaran mb-1">Program
                                Studi</label>
                            <input type="text" class="form-control mb-0" id="anggota1_prodi"
                                placeholder="Anggota 1 Program Studi" name="anggota1_prodi" required>
                                @error('anggota1_prodi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-0">
                        <div class="mb-lg-2 mb-1">
                            <label for="anggota1_nim" class="form-pendaftaran mb-1">Nomer Induk
                                Mahasiswa</label>
                            <input type="text" class="form-control mb-0" id="anggota1_nim"
                                placeholder="Anggota 1 Nomer Induk Mahasiswa" name="anggota1_nim" required>
                                @error('anggota1_nim')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="titleheading mb-lg-3 mb-1">Identitas Anggota 2</div>
                <div class="mb-lg-2 mb-1">
                    <label for="anggota2_nama" class="form-pendaftaran mb-1">Nama Anggota
                        2</label>
                        <input type="text" class="form-control mb-0" id="anggota2_nama"
                        name="anggota2_nama" placeholder="Nama Anggota 2" required>
                        @error('anggota2_nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror                    
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-0">
                        <div class="mb-lg-2 mb-1">
                            <label for="anggota2_prodi" class="form-pendaftaran mb-1">Program
                                Studi</label>
                            <input type="text" class="form-control mb-0" id="anggota2_prodi"
                                placeholder="Anggota 2 Program Studi" name="anggota2_prodi" required>
                                @error('anggota2_prodi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-0">
                        <div class="mb-lg-2 mb-1">
                            <label for="anggota2_nim" class="form-pendaftaran mb-1">Nomer Induk
                                Mahasiswa</label>
                            <input type="text" class="form-control mb-0" id="anggota2_nim"
                                placeholder="Anggota 2 Nomer Induk Mahasiswa" name="anggota2_nim" required>
                                @error('anggota2_nim')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                        </div>
                    </div>
                </div>
                <div class="titleheading mb-lg-3 mb-1 mt-2">Dokumen Kelengkapan</div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-0">
                        <div class="mb-lg- mb-1">
                            <input type="file" class="form-control mb-0" id="file_zip"
                                name="file_zip">
                                @error('file_zip')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <label for="exampleFormControlInput1 formtitle" class="image-sub-label mb-1 mt-1">Upload SK Mahasiswa Aktif, Scan KTM Ketua dan Anggota (Dalam 1 berkas PDF)</label>
                <div class="d-flex justify-content-end align-items-center mt-2">
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
                    <a href="#" class="btn btn-civex tx-poppins tx-medium" onclick="submitForm()">Ya, Saya Yakin</a>
                </div>
            </div>
        </div>
    </div>

    
<script src=" {{ asset('js/form-gec.js') }} " ></script>
