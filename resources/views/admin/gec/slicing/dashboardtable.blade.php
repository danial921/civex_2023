<div class="card mb-2">
    <div class="card-body">
        <div class="title">Daftar Peserta GEC</div>
        <div class="table-responsive p-lg-2 p-1">
            <table id="myTable" class="table table-hover table-borderless" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center wd-40p">nama tim</th>
                        <th class="text-center wd-35">institusi</th>
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
                                <p class="mg-b-0">{{ $team->institusi }}</p>
                            </td>
                            <td class="text-center">
                                @switch($team->status_tim)
                                    @case('00')
                                        <div class="mb-2 admin-teamstatus gec-00">
                                            <p>Pembayaran Belum Dikonfirmasi</p>
                                        </div>
                                    @break

                                    @case('01')
                                        <div class="mb-2 admin-teamstatus gec-01">
                                            <p>Konfirmasi Pembayaran ditolak</p>
                                        </div>
                                    @break

                                    @case('1')
                                        <div class="mb-2 admin-teamstatus gec-1">
                                            <p>Pembayaran Terkonfirmasi</p>
                                        </div>
                                    @break

                                    @case('11')
                                        <div class="mb-2 admin-teamstatus gec-11">
                                            <p>Biodata Ditolak</p>
                                        </div>
                                    @break

                                    @case('2')
                                        <div class="mb-2 admin-teamstatus gec-2">
                                            <p>Biodata Terkonfirmasi</p>
                                        </div>
                                    @break

                                    @case('3')
                                        <div class="mb-2 admin-teamstatus gec-3">
                                            <p>Peserta Final</p>
                                        </div>
                                    @break

                                    @case('31')
                                        <div class="mb-2 admin-teamstatus gec-31">
                                            <p>Tidak Lolos Final</p>
                                        </div>
                                    @break

                                    @default
                                        <p>error</p>
                                @endswitch
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a href="\admin\detailteamgec\{{ $team->id }}" class="btn btn-icon pd-0">
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
        </div>
    </div>
</div>
