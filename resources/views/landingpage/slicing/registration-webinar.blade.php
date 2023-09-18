<div class="registration-webinar-background">
    <h1 class="d-none d-lg-block">Hello, Friend!</h1>
    <p class="d-none d-lg-block">Fill up personal information and start your journey with us.</p>
    <img src="{{ asset('civex/img/landingpage/background-registration-workshop.svg') }}" alt="">
</div>

<div class="registration-webinar">
    <div class="container">
        <h1 class="d-block d-lg-none">Hello, Friend!</h1>
        <p class="d-block d-lg-none">Fill up personal information and start your journey with us.</p>
        <div class="row">
            <div class="col-lg-10 col-12">
                <div class="card mt-2">
                    <form id="form-webinar" class="row m-4 pr-4" method="post" action="{{ route('register-webinar') }}" enctype="multipart/form-data">
                        <div class="col-12 mb-0 mb-lg-2 mb-1">
                            <label for="email" class="form-pendaftaran">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autofocus>
                            <div class="invalid-feedback" id="email-false"></div>
                        </div>
                        <div class="col-12 mb-0 mb-lg-2 mb-1">
                            <label for="nama" class="form-pendaftaran">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required autofocus>
                            <div class="invalid-feedback" id="nama-false"></div>
                        </div>
                        <div class="col-12 mb-0 mb-lg-2 mb-1 mt-2">

                            <label for="instansi" class="form-pendaftaran">Asal Instansi</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" required autofocus>
                            <div class="invalid-feedback" id="instansi-false"></div>

                        </div>
                        <div class="col-12 mb-0 mb-lg-2 mb-1 mt-2">
                            <label for="exampleFormControlInput1 formtitle" class="form-pendaftaran">Unggah Bukti Bayar</label>
                            <p class="image-sub-label"></span></p>
                            <div class="fileupload-opening">
                                <label for="fileField" class="attachment w-100">
                                    <div class="w-100 row btn-file">
                                        <div class="w-100 btn-file__preview"></div>
                                        <div class="w-100 btn-file__actions">
                                            <div class="w-100 btn-file__actions__item col-xs-12 text-center">
                                                <div class="w-100 btn-file__actions__item--shadow py-3">
                                                    <div class="visible-xs-block"></div>
                                                    <p class="imagetitle">Upload Gambarmu <span class="c-cppc">Disini</span></p>
                                                    <p class="imagesubtitle">supports: jpg, jpeg, png</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="bukti_bayar" type="file" id="fileField" style="display: none"
                                        accept="image/jpeg, image/png" required>
                                        <div class="alert alert-danger" id="bukti_bayar-false" hidden></div>
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end align-items-center w-100">
                            <input type="button" value="submit" class="btn btn-civex  mg-b-20 mg-r-20" id="btnSubmit"
                                data-toggle="modal" data-animation="effect-scale" data-target="#simpan">
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>

</div>

<!-- Modal simpan -->
<div class="modal fade effect-scale" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="tx-poppins tx-medium">Pendaftaran TIM</h5>
                <p class="mg-b-0">Apakah anda yakin ingin melakukan pendaftaran tim dengan data tim yang telah diisi?
                </p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-civex-danger tx-poppins tx-medium" data-dismiss="modal">Batal</a>
                <button href="#" class="btn btn-civex tx-poppins tx-medium" onclick="submitForm()"
                    id="btnSubmit2">Ya, Saya Yakin</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal success -->
<div class="modal fade effect-scale" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document"> <!-- Note the added modal-dialog-centered class -->
        <div class="modal-content text-center">
            <img src="{{ asset('civex/img/landingpage/paper-plane.gif') }}" alt="">
            <h1>Woo hoo!</h1>
            <p>Your registration has been successfully submitted. Please check your email for further information.</p>
            <div class="justify-content-center pb-3 pt-4">
                <a href="{{ route('webinar') }}" type="button" class="btn btn-civex tx-poppins tx-medium">Close</a>
            </div>

        </div>
    </div>
</div>

<script>
    function submitForm() {
        const btnSubmit2 = document.getElementById('btnSubmit2');

        const Form_webinar = document.getElementById('form-webinar');
        form_obj = new FormData(Form_webinar);
        btnSubmit2.setAttribute("disabled", "disabled");
        

        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
            url: "{{ route('register-webinar') }}", 
            method: "POST", 
            dataType: "json", 
            data: form_obj, 
            processData: false, // Jangan memproses data
            contentType: false, // Jangan mengatur tipe konten
            success: function (data) {
                // Tangani respons dari server
                // console.log("bisa")
                console.log(data)
                $('#simpan').modal('hide');
                setTimeout(() => $('#successModal').modal('show'), 500); // Delay is used to ensure a smoother transition
            },
            error: function (xhr, status, error) {
                // Tangani kesalahan jika ada
                // var errorMessage = xhr.responseJSON && xhr.responseJSON.errors ? xhr.responseJSON.errors : "Terjadi kesalahan dalam permintaan.";
                errorMessage = xhr.responseJSON.error
                errorRequest = xhr.responseJSON.errors
                
                if(errorMessage){
                    console.error(errorMessage);
                }else if(errorRequest){
                    console.log(errorRequest)
                    // console.error("Terjadi kesalahan: " + error);
                    var elements_false = Array.from(document.querySelectorAll(".is-invalid"));
                    elements_false.forEach(function(element) {
                        element.classList.remove("is-invalid");
                    });

                    document.getElementById("bukti_bayar-false").setAttribute('hidden', 'hidden')
                    
                    for(const [key_resp, value_resp] of Object.entries(errorRequest) ){
                        console.log(key_resp, value_resp[0])
                        if(key_resp == "bukti_bayar"){
                            document.getElementById(key_resp+"-false").classList.add("is-invalid");
                            document.getElementById(key_resp+"-false").innerHTML = value_resp[0]
                            document.getElementById(key_resp+"-false").removeAttribute('hidden')
                        }else if(value_resp[0] != ""){
                            document.getElementById(key_resp).classList.add("is-invalid");
                            document.getElementById(key_resp+"-false").innerHTML = value_resp[0]

                        }
                    }
                    btnSubmit2.removeAttribute("disabled");
                }else{
                    console.error("Terjadi kesalahan: " + error);
                }
                
            }
        });
        
    }

    jQuery(($) => {
        $('.attachment input[type="file"]')
            .on('change', (event) => {
                let el = $(event.target).closest('.attachment').find('.btn-file');

                el
                    .find('.btn-file__actions__item')
                    .css({
                        'padding': '135px'
                    });

                el
                    .find('.btn-file__preview')
                    .css({
                        'background-image': 'url(' + window.URL.createObjectURL(event.target.files[0]) +
                            ')'
                    });
            });
    });
</script>