<div class="card">
    <div class="card-body">
        <form id="gec_form" class="mt-2 " method="post" route="{{ route('form-cppc') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_tim" class="form-pendaftaran">Nama Tim</label>
                <input type="text" class="form-control" id="nama_tim" name="nama_tim" placeholder="Nama Tim" required autofocus>
                @error('nama_tim')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ketua_nama" class="form-pendaftaran">Nama Ketua Tim</label>
                <input type="text" class="form-control" id="ketua_nama" name="ketua_nama" placeholder="Nama Ketua Tim" required>
                @error('ketua_nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="institusi" class="form-pendaftaran">Asal Universitas</label>
                <input type="text" class="form-control" id="institusi" name="institusi" placeholder="Asal Universitas" required>
                @error('institusi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
                        <label for="ketua_notelp" class="form-pendaftaran">Nomer Handphone
                            (Whatsapp)</label>
                        <input type="text" class="form-control" id="ketua_notelp"
                            value="{{ $nomerhp }}" name="ketua_notelp" required>
                            @error('ketua_notelp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Unggah Bukti Bayar</label>
                <p class="image-sub-label">pembayaran dapat dilakukan pada nomer rekening <span
                        class="c-cpcc">{{ $rekening_transfer }}</span> Sebesar <span
                        class="c-cpcc">{{ $biaya_daftar }}</span></p>
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
                        <input name="bukti_bayar" type="file" id="fileField" style="display: none" accept="image/jpeg, image/png" required>
                        @error('bukti_bayar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </label>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit" data-toggle="modal" data-animation="effect-scale" data-target="#simpan"></input>
                <!-- <button type="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit">Submit</button> -->
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
                <h5 class="tx-poppins tx-medium">Pendaftaran TIM</h5>
                <p class="mg-b-0">Apakah anda yakin ingin melakukan pendaftaran tim dengan data tim yang telah diisi?
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
