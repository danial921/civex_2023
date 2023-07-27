<div class="card md-2 soal">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 d-none d-lg-block">
                <img class="w-100" src="{{ asset('civex/img/icon/hero-scooter.png') }}" alt="">
            </div>
            <div class="col-lg-8 col-12">
                <div class="d-flex align-items-end h-100 w-100">
                    <div class="w-100">
                        <div class="pb-1 bd-highlight title">Tahap <span class="bold-blue">{{ $countDownName }}</span>
                        </div>
                        <div class="pb-1 bd-highligt sub-title">situs dapat di akses dalam</div>
                        <div class="countdownBar row w-100">
                            <div class="col-3">
                                <div class="nominal">
                                    <p id="countdown-hari" class="count">0</p>
                                    <div class="subtitle day">DAYS</div>
                                </div>
                            </div>
                            <div class="col-3">

                                <div class="nominal">
                                    <p id="countdown-jam" class="count">0</p>
                                    <div class="subtitle hour">HOUR</div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="nominal">
                                    <p id="countdown-detik" class="count">0</p>
                                    <div class="subtitle minute">MINUTES</div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="nominal">
                                    <p id="countdown-menit" class="count">0</p>
                                    <div class="subtitle second">SECOND</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var countDownDate = new Date("{{ $time }}").getTime();

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown-hari").innerHTML = days;
        document.getElementById("countdown-jam").innerHTML = hours;
        document.getElementById("countdown-menit").innerHTML = minutes;
        document.getElementById("countdown-detik").innerHTML = seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown-hari").innerHTML = "0";
            document.getElementById("countdown-jam").innerHTML = "0";
            document.getElementById("countdown-menit").innerHTML = "0";
            document.getElementById("countdown-detik").innerHTML = "0";
        }
    }, 1000);
</script>
