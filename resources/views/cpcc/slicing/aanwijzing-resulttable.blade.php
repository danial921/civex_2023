<div class="card mb-2">
    <div class="card-body aanjwizing">
        <p class="title mb-lg-2 mb-1">Hasil Jawaban Aanwijzing</p>
        <a href="">
            <button type="button" class="btn btn-daftar">
                <img src="{{ asset('civex/img/icon/icon-cloud.svg') }}" alt="your_image"
                    width="20" height="20">
                <b>Download</b> Hasil Aanwijzing
            </button>
        </a>
        {{-- <div class="table-responsive p-lg-2 p-1">
            <table id="myTable" class="table table-hover table-borderless" style="width:100%">
                <thead>
                    <tr>
                        <th class="table-its wd-20p">Nama Tim</th>
                        <th class="table-its wd-30p">Judul Pertanyaan</th>
                        <th class="table-its wd-45">Deskripsi Pertanyaan</th>
                        <th class="table-its wd-5p">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                        <tr class="bd-b">
                            <td class="table-its">
                                <p class="mg-b-0">{{ $question->nama_tim }}</p>
                            </td>
                            <td class="table-its">
                                <p class="mg-b-0">{{ $question->aanwijzing_judul }}</p>
                            </td>
                            <td class="table-its">
                                <p class="mg-b-0">{{ $question->aanwijzing_tanya }}</p>
                            </td>
                            <td class="table-its">
                                <div class="dropdown">
                                    <a href="\cppc\detail-aanwijzing\{{ $question->id }}" class="btn btn-icon pd-0">
                                        <div class="avatar"><span
                                                class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01"
                                                data-toggle="tooltip" data-placement="bottom"
                                                title="detail Aaanwijizing"><ion-icon name="ellipsis-vertical"
                                                    class="tx-18"></ion-icon></span></div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
    </div>
</div>
