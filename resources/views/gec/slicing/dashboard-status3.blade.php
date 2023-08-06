<div class="card mg-b-20">
    <div class="card-body">
        <p class="title">Status Pendaftaran</p>
        <div class="row">
            <div class="col-lg-7 col-12 mb-2">
                <div class="d-flex bd-highlight mb-1 justify-content-start">
                    <div class="d-none d-lg-block  bd-highlight"><img
                            src="{{ asset('civex/img/icon/icon-regular.png') }}" class=" mg-l-10 mg-r-25 ">
                    </div>
                    <div class=" bd-highlight">
                        <p class=" tx-poppins tx-medium mb-1 tx-15 ">Pendaftaran</p>
                        <p class="mg-b-1 danger text-center">Formulir Pendaftaran ditolak, silahkan hubungi
                            Contact Person</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 mb-2">
                <p class="tx-poppins tx-medium mb-1 tx-15">Contact Person</p>
                <div class="d-flex align-items-center">
                    <!-- CP -->
                    <div class="container-fluid">
                        <p class="tx-poppins tx-medium mb-1 tx-15">{{ ENV('GEC_CP1') }}</p>
                        <p class="sub-cp mb-1">{{ ENV('GEC_NO_CP1') }}</p>
                        <p class="sub-cp">{{ ENV('GEC_LINE_CP1') }}</p>
                    </div>
                    <div class="container-fluid">
                        <p class="tx-poppins tx-medium mb-1 tx-15">{{ ENV('GEC_CP2') }}</p>
                        <p class="sub-cp mb-1">{{ ENV('GEC_NO_CP2') }}</p>
                        <p class="sub-cp">{{ ENV('GEC_LINE_CP2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
