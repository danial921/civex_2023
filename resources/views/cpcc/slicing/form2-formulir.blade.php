<div class="card">
    <div class="card-body">
        <form id="gec_form" class="mt-2 " method="post" route="{{ route('submit-berkas-cppc') }}" enctype="multipart/form-data">
            @csrf
            <div class="titleheading mb-2">Identitas Tim</div>
            <div class="row mb-3">
                <div class="col-lg-6 col-12">
                    <label for="nama_tim" class="form-pendaftaran mb-1">Nama Tim</label>
                    <div class="">
                        <input type="text" readonly class="form-control-plaintext" id="nama_tim"
                            value="{{ $namatim }}" name="nama_tim" required>
                            @error('nama_tim')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <label for="institusi" class="form-pendaftaran mb-1">Institusi Asal</label>
                    <div class="">
                        <input type="text" readonly class="form-control-plaintext" id="institusi"
                            value="{{ $institusi }}" name="institusi" required>
                            @error('institusi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <label for="alamat_institusi" class="form-pendaftaran mb-1">Alamat Perguruan
                        Tinggi</label>
                    <input type="text" class="form-control" id="alamat_institusi"
                        placeholder="Alamat Perguruan Tinggi" name="alamat_institusi" required>
                        @error('alamat_institusi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
            </div>

            <div class="titleheading mb-lg-2 mb-1 mt-1">Identitas Ketua TIM</div>
            <div class="mb-3">
                <label for="ketua_nama" class="form-pendaftaran mb-1">Nama Ketua Tim</label>
                <input type="text" class="form-control" id="ketua_nama" 
                    placeholder="Nama Ketua Tim" name="ketua_nama" required>
                    @error('ketua_nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_prodi" class="form-pendaftaran mb-1">Program
                            Studi</label>
                        <input type="text" class="form-control" id="ketua_prodi"
                            placeholder="Program Studi Ketua Tim" name="ketua_prodi" required>
                            @error('ketua_prodi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_nim" class="form-pendaftaran mb-1">Nomer Induk
                            Mahasiswa</label>
                        <input type="text" class="form-control" id="ketua_nim"
                            placeholder="Nomer Induk Ketua Tim" name="ketua_nim">
                            @error('ketua_nim')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_email" class="form-pendaftaran mb-1">email</label>
                        <div class="">
                            <input type="email" readonly class="form-control-plaintext" id="ketua_email"
                                value="{{ $email }}" name="ketua_email" required>
                                @error('ketua_email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_notelp" class="form-pendaftaran mb-1">Nomer
                            Telefon</label>
                        <input type="text" class="form-control" id="ketua_notelp"
                            value="{{ $nomerhp }}" name="ketua_notelp">
                            @error('ketua_notelp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_ktm" class="form-pendaftaran mb-1">Program
                            Upload KTM / Transkrip</label>
                        <input type="file" class="form-control" id="ketua_ktm"
                            name="ketua_ktm" required>
                            @error('ketua_ktm')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="ketua_sk" class="form-pendaftaran mb-1">Nomer Induk
                            Upload SK Mahasiswa Aktif</label>
                        <input type="file" class="form-control" id="ketua_sk"
                            name="ketua_sk" required>
                            @error('ketua_sk')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>

            <div class="titleheading mb-2 mb-lg-2 mb-1 mt-1">Identitas Anggota 1</div>
            <div class="mb-3">
                <label for="anggota1_nama" class="form-pendaftaran mb-1">Nama Anggota
                    1</label>
                <input type="text" class="form-control" id="anggota1_nama" placeholder="Nama Anggota 1"
                    name="anggota1_nama" required>
                    @error('anggota1_nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota1_prodi" class="form-pendaftaran mb-1">Program
                            Studi</label>
                        <input type="text" class="form-control" id="anggota1_prodi"
                            placeholder="Nama Anggota 1" name="anggota1_prodi" required>
                            @error('anggota1_prodi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota1_nim" class="form-pendaftaran mb-1">Nomer Induk
                            Mahasiswa</label>
                        <input type="text" class="form-control" id="anggota1_nim"
                            placeholder="Nomer Induk Mahasiswa Anggota 1" name="anggota1_nim" required>
                            @error('anggota1_nim')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota1_email" class="form-pendaftaran mb-1">email</label>
                        <input type="email" class="form-control" id="anggota1_email" placeholder="Email Anggota 1"
                            name="anggota1_email">
                            @error('anggota1_email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota1_notelp" class="form-pendaftaran mb-1">Nomer
                            Telefon</label>
                        <input type="text" class="form-control" id="anggota1_notelp"
                            name="anggota1_notelp" required>
                            @error('anggota1_notelp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota1_ktm" class="form-pendaftaran mb-1">Program
                            Upload KTM / Transkrip</label>
                        <input type="file" class="form-control" id="anggota1_ktm"
                            name="anggota1_ktm" required>
                            @error('anggota1_ktm')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota1_sk" class="form-pendaftaran mb-1">Nomer Induk
                            Upload SK Mahasiswa Aktif</label>
                        <input type="file" class="form-control" id="anggota1_sk"
                            name="anggota1_sk" required>
                            @error('anggota1_sk')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="titleheading mb-2 mb-lg-2 mb-1 mt-1">Identitas Anggota 2</div>
            <div class="mb-3">
                <label for="anggota2_nama" class="form-pendaftaran mb-1">Nama Anggota
                    2</label>
                <input type="text" class="form-control" id="anggota2_nama" 
                    placeholder="Nama Anggota 2" name="anggota2_nama" required>
                    @error('anggota2_nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota2_prodi" class="form-pendaftaran mb-1">Program
                            Studi</label>
                        <input type="text" class="form-control" id="anggota2_prodi"
                            placeholder="Program Studi Anggota 2" name="anggota2_prodi" required>
                            @error('anggota2_prodi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota2_nim" class="form-pendaftaran mb-1">Nomer Induk
                            Mahasiswa</label>
                        <input type="text" class="form-control" id="anggota2_nim"
                            placeholder="Nomer Induk Mahasiswa Anggota 2" name="anggota2_nim" required>
                            @error('anggota2_nim')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">

                        <label for="anggota2_email" class="form-pendaftaran mb-1">email</label>
                        <input type="email" class="form-control" id="anggota2_email" placeholder="email" 
                        name="anggota2_email" required>
                        @error('anggota2_email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota2_notelp " class="form-pendaftaran mb-1">Nomer
                            Telefon</label>
                        <input type="text" class="form-control" id="anggota2_notelp"
                            name="anggota2_notelp" required>
                            @error('anggota2_notelp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota2_ktm " class="form-pendaftaran mb-1">Program
                            Upload KTM / Transkrip</label>
                        <input type="file" class="form-control" id="anggota2_ktm"
                            name="anggota2_ktm" required>
                            @error('anggota2_ktm')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mb-3">
                        <label for="anggota2_sk " class="form-pendaftaran mb-1">Nomer Induk
                            Upload SK Mahasiswa Aktif</label>
                        <input type="file" class="form-control" id="anggota2_sk"
                            name="anggota2_sk" required>
                            @error('anggota2_sk')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="titleheading mb-lg-2 mb-1 mt-1">Dokumen Kelengkapan</div>
            <label for="exampleFormControlInput1 " class="form-pendaftaran mb-1">Upload Form
                Pendaftaran</label>
            <div class="row">
                <div class="col-lg-6 col-12 mb-lg-0 mb-2">
                    <div class="mb-lg-3 m-0">
                        <input type="file" class="form-control" id="form_pendaftaran"
                            name="form_pendaftaran">
                            @error('form_pendaftaran')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <a href="" class="">
                        <button type="button" class="w-100 btn btn-download">
                            <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image" width="20"
                                height="20">
                            <b>Download</b> Template Form Pendaftaran
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-lg-0 mt-3 d-flex justify-content-end align-items-center">
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