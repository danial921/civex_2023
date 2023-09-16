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
    $('input[type="radio"]').on('change', function() {
        $('.fade-form').removeClass('visible');
        $('#div' + this.id.replace('option', '')).addClass('visible');
    });
</script>
