<div class="card mg-b-20">
    <div class="card-body">
        <p class="title mb-lg-2 mb-0">Status Pendaftaran</p>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="d-flex bd-highlight mb-2 justify-content-start">
                    <div class="d-none d-lg-block  bd-highlight"><img
                            src="{{ asset('civex/img/icon/icon-paper.png') }}"
                            class=" mg-l-10 mg-r-25 "></div>
                    <div class=" bd-highlight">
                        <p class=" tx-poppins tx-medium mb-1 tx-15 ">Submission Proposal</p>
                        <p class="mb-0 success text-center">Tim sudah Mengunggah Proposal</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="d-flex bd-highlight mb-2 justify-content-start">
                    <div class="d-none d-lg-block  bd-highlight"><img
                            src="{{ asset('civex/img/icon/icon-submission.png') }}"
                            class=" mg-l-10 mg-r-25 "></div>
                    <div class=" bd-highlight">
                        <p class=" tx-poppins tx-medium mb-1 tx-15 ">Submission Final</p>
                        <p class="mb-0 danger text-center">Tim Belum Mengunggah Berkas Final</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p class="form mb-1">upload berkas final pada link berikut :
                </p>
            </div>
            <div class="col-lg-6 col-12">
                <a href="submission-final">
                    <button type="button" class="btn btn-daftar w-100">
                        <img src="{{ asset('civex/img/icon/icon-paper.svg') }}" alt="your_image"
                            width="20" height="20">
                        <b>Upload</b> Berkas Final
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
