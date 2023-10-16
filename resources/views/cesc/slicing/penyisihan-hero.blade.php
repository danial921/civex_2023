<div class="card mg-b-20">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6 col-12 mb-lg-0 mb-2">
                <p class="tx-poppins tx-medium mb-lg-2 mb-0 tx-15"><b>Tahap <span class="dark-blue">Penyisihan</span></b></p>
                <p class="hero-subtitle">Guidebook Peyisihan dan kisi kisi dapat diakses pada link berikut :</p>
                <a href="">
                    <button type="button" class="btn btn-daftar  w-100">
                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                            width="20" height="20">
                        <b>GuideBook</b> Penyisihan
                    </button>
                </a>
                {{-- Tunggu Release --}}
                @if(strtotime(date("Y-m-d H:i:s")) >= strtotime('2023-10-24 23:59:59'))
                <div class="mb-2"></div>
                <a href="https://drive.google.com/file/d/10FssaXM7nFjx2eTLNmfTaAxPuExk64fw/view?usp=drivesdk" target="_blank">
                    <button type="button" class="btn btn-daftar  w-100">
                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                            width="20" height="20">
                        <b>Kisi Kisi</b> Tryout
                    </button>
                </a>
                @else
                <div class="mb-2"></div>
                <a href="https://drive.google.com/file/d/10FssaXM7nFjx2eTLNmfTaAxPuExk64fw/view?usp=drivesdk">
                    <button type="button" class="btn btn-daftar  w-100">
                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                            width="20" height="20">
                        <b>Kisi Kisi</b> Tryout
                    </button>
                </a>
                @endif
            </div>
            <div class="col-lg-6 col-12">
                <p class="tx-poppins tx-medium mb-lg-2 mb-0 tx-15"><b>Akun <span class="dark-blue">Penyisihan Peserta</span></b></p>
                <p class="hero-subtitle">akses web cbt dapat dilakukan dengan menggunakan akun berikut : </p>
                <table class="transparent-table hero-desc" border="0">
                    <tr>
                        <th class="pr-3">Link </th>
                        <td><a href="https://www.youtube.com/watch?v=omvCDkyNTOA">: {{ ENV('URL_CBT') }}</a></td>
                      </tr>
                      <tr>
                        <th class="pr-3">Username</th>
                        <td>: {{ $usernamelomba }}</td>
                      </tr>
                      <tr>
                        <th class="pr-3">Password</th>
                        <td>: {{ $pwlomba }}</td>
                      </tr>
                    </table>
            </div>
        </div>
    </div>
</div>
