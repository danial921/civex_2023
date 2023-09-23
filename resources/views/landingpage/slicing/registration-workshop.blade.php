<div class="registration-webinar-background text-end mr-xxl-3 mr-1" style="text-align: right;">
    <div class="text">
        <h1 class="d-none d-xl-block">Hello, Friend!</h1>
        <p class="d-none d-xl-block">Fill up personal information and start <br>  your journey  with us.</p>
    </div>
    <img src="{{ asset('civex/img/landingpage/background-registration-workshop.svg') }}" alt="">
</div>

<div class="registration-workshop">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 col-12">
                <h1 class="d-block d-lg-none">Hello, Friend!</h1>
                <p class="d-block d-lg-none">Fill up personal information and start your journey with us.</p>
                <p>Chose your bundling</p>
                <div class="row">
                    <div class="col-4">
                        <input type="radio" name="choice" id="option1" checked>
                        <label for="option1">1 Person</label>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="choice" id="option2">
                        <label for="option2">2 Person</label>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="choice" id="option3">
                        <label for="option3">3 Person</label>
                    </div>
                </div>

                <div id="div1" class="fade-form visible">
                    @include('landingpage.slicing.reg-workshop-1Person')
                </div>
                <div id="div2" class="fade-form">
                    @include('landingpage.slicing.reg-workshop-2Person')
                </div>
                <div id="div3" class="fade-form">
                    @include('landingpage.slicing.reg-workshop-3Person')
                </div>
            </div>
        </div>


    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    function submitForm(form) {
        const btnSubmit2 = document.getElementById('btnSubmit2-'+form);

        const Form_workshop = document.getElementById(form);
        form_obj = new FormData(Form_workshop);
        btnSubmit2.setAttribute("disabled", "disabled");


        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
            url: "{{ route('register-workshop') }}",
            method: "POST",
            dataType: "json",
            data: form_obj,
            processData: false, // Jangan memproses data
            contentType: false, // Jangan mengatur tipe konten
            success: function (data) {
                // Tangani respons dari server
                // console.log("bisa")
                console.log(data)
                $('#simpan-'+form).modal('hide');
                setTimeout(() => $('#successModal-'+form).modal('show'), 500); // Delay is used to ensure a smoother transition
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

                    document.getElementById("bukti_bayar-false-form1").setAttribute('hidden', 'hidden')
                    document.getElementById("bukti_bayar-false-form2").setAttribute('hidden', 'hidden')
                    document.getElementById("bukti_bayar-false-form3").setAttribute('hidden', 'hidden')

                    for(const [key_resp, value_resp] of Object.entries(errorRequest) ){
                        console.log(key_resp, value_resp[0])
                        if(key_resp == "bukti_bayar"){
                            document.getElementById(key_resp+"-false-" + form).classList.add("is-invalid");
                            document.getElementById(key_resp+"-false-" + form).innerHTML = value_resp[0]
                            document.getElementById(key_resp+"-false-" + form).removeAttribute('hidden')
                        }else if(value_resp[0] != ""){
                            document.getElementById(key_resp + "-" + form).classList.add("is-invalid");
                            document.getElementById(key_resp+"-false-" + form).innerHTML = value_resp[0]

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
                let id = $(event.target).data('id');

                // console.log(event.target)
                // console.log(id)

                el
                    .find('#actions_item-' + id)
                    .css({
                        'padding': '135px'
                    });

                el
                    .find('#file_preview-' + id)
                    .css({
                        'background-image': 'url(' + window.URL.createObjectURL(event.target.files[0]) +
                            ')'
                    });
            });
    });

    $('input[type="radio"]').on('change', function() {
        $('.fade-form').removeClass('visible');
        $('#div' + this.id.replace('option', '')).addClass('visible');
    });
</script>


