<div class="card mb-2">
    <div class="card-body aanwijzing">
        <p class="title mb-lg-2 mb-0">Detail Pertanyaan Aanjwizing</p>
        <p class="subtitle mb-2">Setiap tim diberikan kesempatan untuk bertanya dalam 1 x submit, diperbolehkan bertanya lebih dari 1 pertanyaan dalam setiap submissionnya</p>
        <!-- <div class="mb-2">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-0">Judul Pertanyaan</label>
            <input type="text" readonly disabled class="form-control-plaintext" id="staticEmail"
            value="{{ $judulAanwijzing }}">
        </div> -->
        <div class="mb-2">
            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran mb-0">Deskripsi Pertanyaan</label>
            <textarea type="text" readonly disabled class="form-control" id="staticEmail">{{ $pertanyaanAanwijzing }}</textarea>
        </div>
    </div>
</div>
