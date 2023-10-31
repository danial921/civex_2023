<div class="card mb-2">
    <div class="card-body aanwijzing">
        <p class="title">Detail Pertanyaan Aanjwizing</p>
        <div class="mb-2">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Penanya</label>
            <input type="text" readonly disabled class="form-control-plaintext mb-0" id="staticEmail"
            value="{{ $username }}">
        </div>
        <!-- <div class="mb-2">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Judul Pertanyaan</label>
            <input type="text" readonly disabled class="form-control-plaintext mb-0" id="staticEmail"
            value="{{ $judulAanwijzing }}">
        </div> -->
        <div class="mb-2">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Deskripsi Pertanyaan</label>
            <input type="text" readonly disabled class="form-control-plaintext mb-0" id="staticEmail"
                value="{{ $pertanyaanAanwijzing }}">
        </div>
        @if(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-16 23:59:59'))
        <!-- <div class="mb-2">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-1">Deskripsi Pertanyaan</label>
            <input type="text" readonly disabled class="form-control-plaintext mb-0" id="staticEmail"
                value="{{ $jawabanAanwijizing }}">
        </div> -->
        @endif
    </div>
</div>
