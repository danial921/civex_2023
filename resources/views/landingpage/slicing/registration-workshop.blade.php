<div class="registration-workshop-background">
    <h1 class="d-none d-lg-block">Hello, Friend!</h1>
    <p class="d-none d-lg-block">Fill up personal information and start your journey with us.</p>
    <img src="{{ asset('civex/img/landingpage/background-registration-workshop.svg') }}" alt="">
</div>

<div class="registration-workshop">
    <div class="container">
        <h1 class="d-block d-lg-none">Hello, Friend!</h1>
        <p class="d-block d-lg-none">Fill up personal information and start your journey with us.</p>
        <div class="row">
            <div class="col-lg-10 col-12">
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
                    @include('landingpage.slicing.reg-workshop-1person')
                </div>
                <div id="div2" class="fade-form">
                    @include('landingpage.slicing.reg-workshop-2person')
                </div>
                <div id="div3" class="fade-form">
                    @include('landingpage.slicing.reg-workshop-3person')
                </div>
            </div>
        </div>


    </div>

</div>


<script>
  
    const gecForm = document.getElementById('gec_form');
    const btnSubmit2 = document.getElementById('btnSubmit2');
    function submitForm() {
        // $('#simpan').modal('hide');
        // setTimeout(() => $('#successModal').modal('show'), 500); // Delay is used to ensure a smoother transition
        btnSubmit2.setAttribute("disabled", "disabled");
        // alert(gecForm.action);
        gecForm.submit();
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

<script>
    $('input[type="radio"]').on('change', function() {
        $('.fade-form').removeClass('visible');
        $('#div' + this.id.replace('option', '')).addClass('visible');
    });
</script>
