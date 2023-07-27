<div class="card mb-2">
    <div class="card-body aanwijizing">
        <p class="title">Detail Pertanyaan Aanjwizing</p>
        <p class="subtitle">Setiap tim diberikan kesempatan untuk bertanya dalam 1 x submit, diperbolehkan bertanya lebih dari 1 pertanyaan dalam setiap submissionnya</p>

        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Judul Pertanyaan</label>
            <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
            value="{{ $judulAanwijzing }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Deskripsi Pertanyaan</label>
            <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
                value="{{ $pertanyaanAanwijzing }}">
        </div>
    </div>
</div>
