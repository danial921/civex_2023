<div class="card mb-2">
    <form id="gec_form" class="mt-2 " method="post" route="{{ route('submit-aanwizing-cppc') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body aanwijzing">
            <p class="title mb-lg-2 mb-1">Tahap Aanwijzing</p>
            <p class="subtitle mb-2">Anda dapat mengajukan <b>beberapa pertanyaan</b> sekaligus dalam satu kali submit dengan kesempatan untuk submit hanya <b>1 kali</b></p>

            <div class="mb-2">
                <label for="aanwijzing_judul" class="form-pendaftaran mb-1">Judul Pertanyaan</label>
                <input type="email" class="form-control" id="aanwijzing_judul"
                    placeholder="Judul Pertanyaanmu" name="aanwijzing_judul">
                    @error('aanwijzing_judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-2">
                <label for="aanwijzing_tanya" class="form-pendaftaran mb-1">Deskripsi Pertanyaan</label>
                <textarea type="text" class="mb-2 form-control" id="aanwijzing_tanya"
                    placeholder="Alamat Perguruan Tinggi" name="aanwijzing_tanya"></textarea>
                <div class="sublabel mb-2">*pertanyaan dapat ditulis dalam maksimal 1000 huruf</div>
                @error('aanwijzing_tanya')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-3 d-flex justify-content-end align-items-center">
                <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit" data-toggle="modal" data-animation="effect-scale" data-target="#simpan"></input>
            </div>
        </div>
    </form>
</div>
