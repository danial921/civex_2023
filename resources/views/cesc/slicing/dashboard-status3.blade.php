<div class="card mg-b-20">
    <div class="card-body">
        <p class="title">Status Pendaftaran</p>
        <div class="row">
            <div class="col-12">
                <div class="d-flex bd-highlight mb-1 justify-content-start">
                    <div class="d-none d-lg-block  bd-highlight"><img
                            src="{{ asset('civex/img/icon/icon-regular.png') }}" class=" mg-l-10 mg-r-25 ">
                    </div>
                    <div class=" bd-highlight">
                        <p class=" tx-poppins tx-medium mb-1 tx-15 ">Pendaftaran</p>
                        <p class="mb-lg-2 mb-1 danger text-center">Formulir Pendaftaran <span class="bold">ditolak,</span>silahkan hubungi
                            Contact Person</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <p class="tx-poppins tx-medium mb-1 tx-15">Contact Person</p>
                <div class="d-flex align-items-center">
                    <!-- CP -->
                    <div class="container-fluid">
                        <p class="tx-poppins tx-medium mg-b-0 tx-15">{{ ENV('CESC_CP1') }}</p>
                        <p class="mg-b-1 sub-cp mt-lg-2 mt-1">{{ ENV('CESC_NO_CP1') }}</p>
                    </div>
                    <div class="container-fluid">
                        <p class="tx-poppins tx-medium mg-b-0 tx-15">{{ ENV('CESC_CP2') }}</p>
                        <p class="mg-b-1 sub-cp mt-lg-2 mt-1">{{ ENV('CESC_NO_CP2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>