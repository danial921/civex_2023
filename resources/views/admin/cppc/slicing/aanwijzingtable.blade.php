<div class="card mb-2">
    <div class="card-body">
        <div class="title">Daftar pertanyaan CPPC</div>
        <div class="table-responsive p-lg-2 p-1">
            <table id="myTable" class="table table-hover table-borderless" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center wd-40p">nama tim</th>
                        <th class="text-center wd-20">pertanyaan</th>
                        <th class="text-center wd-20">status</th>
                        <th class="text-center wd-5p">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr class="bd-b">
                            <td>
                                <p class="mg-b-0">{{ $team->nama_tim }}</p>
                            </td>
                            <td>
                                <p class="mg-b-0">{{ $team->aanwijzing_tanya }}</p>
                            </td>
                            <td class="text-center">
                            @if ($team->aanwijzing_jawab === null)
                                <div class="mb-2 admin-teamstatus gec-01">
                                    <p>belum dijawab</p>
                                </div>
                            @elseif ($team->status_tim != null)
                                <div class="mb-2 admin-teamstatus gec-1">
                                    <p>sudah dijawab</p>
                                </div>
                            @else
                                <p>error</p>
                            @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a href="\admin\detailpertanyaan-cppc\{{ $team->id }}" class="btn btn-icon pd-0">
                                        <div class="avatar"><span
                                                class="avatar-initial rounded-circle btn-its-custom-1 tx-color-01"
                                                data-toggle="tooltip" data-placement="bottom"
                                                title="detail aanwijzing"><ion-icon name="ellipsis-vertical"
                                                    class="tx-18"></ion-icon></span></div>
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
