<div class="card mb-2">
    <div class="card-body aanjwizing">
        <div class="table-responsive p-lg-2 p-1">
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
                @foreach ($questions as $question )
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
                        <a href="\gec\detail-aanwijzing\{{ $question->id }}" class="btn btn-icon pd-0">
                          <div class="avatar"><span class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01" data-toggle="tooltip" data-placement="bottom" title="detail Aaanwijizing"><ion-icon name="ellipsis-vertical" class="tx-18"></ion-icon></span></div>
                        </a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>
