<form method="POST" action="{{ url('admin/updatestatus/' . $dataPeserta->id) }}">
    @csrf

    <div class="row">
        <div class="col-lg-6 col-12 mb-lg-3 mb-1">
            {{-- @if ($dataPeserta->status_tim === '00') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-00">
                <p>Pembayaran Belum Dikonfirmasi</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '01') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-01">
                <p>Konfirmasi Pembayaran ditolak</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '1') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-1">
                <p>Pembayaran Terkonfirmasi</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '11') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-11">
                <p>Biodata Ditolak</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '2') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-2">
                <p>Biodata Terkonfirmasi</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '3') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-3">
                <p>Peserta Semifinal</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '31') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-31">
                <p>Tidak Lolos Semifinal</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '3') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-3">
                <p>Peserta Final</p>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '31') --}}
            <div class="mb-2 w-100 text-center admin-teamstatus gec-31">
                <p>Tidak Lolos Final</p>
            </div>
            {{-- @else --}}
            <p>error</p>
            {{-- @endif --}}
        </div>

        <div class="col-lg-6 col-12 mb-lg-3 mb-1">
            {{-- @if ($dataPeserta->status_tim === '00' || $dataPeserta->status_tim === '01') --}}
            <p>button untuk konfirmasi pembayaran</p>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '00')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios1"
                        value="00">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios1" value="00">
                @endif
                <label class="form-check-label" for="exampleRadios1">
                    Pembayaran Belum Dikonfirmasi
                </label>
            </div>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '1')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios2"
                        value="1">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios2" value="1">
                @endif
                <label class="form-check-label" for="exampleRadios2">
                    Konfirmasi Pembayaran
                </label>
            </div>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '01')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios2"
                        value="01">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios2" value="01">
                @endif
                <label class="form-check-label c-red" for="exampleRadios2">
                    Tolak Konfirmasi Pembayaran
                </label>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '11' || $dataPeserta->status_tim === '1') --}}
            <p class="pt-2">button untuk konfirmasi biodata</p>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '1')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios1"
                        value="1">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios1" value="2">
                @endif
                <label class="form-check-label" for="exampleRadios1">
                    Konfirmasi Biodata TIM
                </label>
            </div>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '11')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios2"
                        value="11">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios2" value="11">
                @endif

                <label class="form-check-label c-red" for="exampleRadios2">
                    Tolak Biodata
                </label>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '2' || $dataPeserta->status_tim === '3' || $dataPeserta->status_tim === '31') --}}
            <p class="pt-2">button untuk konfirmasi checklist Semifinal</p>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '3')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios1"
                        value="3">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios1" value="3">
                @endif
                <label class="form-check-label" for="exampleRadios1">
                    Peserta Semifinal
                </label>
            </div>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '31')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios2"
                        value="31">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios2"
                        value="31">
                @endif
                <label class="form-check-label c-red" for="exampleRadios2">
                    Tidak Lolos Semifinal
                </label>
            </div>
            {{-- @elseif ($dataPeserta->status_tim === '2' || $dataPeserta->status_tim === '3' || $dataPeserta->status_tim === '31') --}}
            <p class="pt-2">button untuk konfirmasi checklist Final</p>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '3')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios1"
                        value="3">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios1"
                        value="3">
                @endif
                <label class="form-check-label" for="exampleRadios1">
                    Peserta Final
                </label>
            </div>
            <div class="form-check">
                @if ($dataPeserta->status_tim === '31')
                    <input checked class="form-check-input" type="radio" name="status_tim" id="exampleRadios2"
                        value="31">
                @else
                    <input class="form-check-input" type="radio" name="status_tim" id="exampleRadios2"
                        value="31">
                @endif
                <label class="form-check-label c-red" for="exampleRadios2">
                    Tidak Lolos Final
                </label>
            </div>
            {{-- @endif --}}
        </div>
    </div>

    <div class="d-flex justify-content-end align-items-center mt-2">
        <a href="#simpan" data-toggle="modal" data-animation="effect-scale">
            <button type="submit" class="btn btn-civex">Submit</button>
        </a>
    </div>

    <!-- Modal simpan -->
    <div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="tx-poppins tx-medium">Pendaftaran Berkas Tim</h5>
                    <p class="mg-b-0">Apakah anda yakin ingin Merubah Data tim <b>{{ $dataPeserta->nama_tim }}</b>
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
</form>
