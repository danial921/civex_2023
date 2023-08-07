<div class="opening-time">
    <div class="compe-bg">
        <img class="ornamen1" src="{{ asset('civex/img/icon/opening-ornamen1.svg') }}" alt="">
        <img class="ornamen2" src="{{ asset('civex/img/icon/opening-ornamen2.svg') }}" alt="">
    </div>
<div class="jumbo">
    <div class="container d-flex align-items-center justify-content-center">
        <div>
            <p class="text-center title">Launching Soon</p>
            <p class="text-center sub">Opening</p>
        </div>
    </div>
    <div class="container pt-0">
        <div class="landingpage-conter row pt-0">
            <div class="col-3">
                <div class="card-counter text-center">
                    <div class="nominal">
                        <p id="countdown-hari" class="count">0</p>
                        <div class="subtitle day">DAYS</div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-counter text-center">
                <div class="nominal">
                    <p id="countdown-jam" class="count">0</p>
                    <div class="subtitle hour">HOUR</div>
                </div></div>
            </div>
            <div class="col-3">
                <div class="card-counter text-center">
                <div class="nominal">
                    <p id="countdown-menit" class="count">0</p>
                    <div class="subtitle minute">MINUTES</div>
                </div></div>
            </div>
            <div class="col-3">
                <div class="card-counter text-center">
                <div class="nominal">
                    <p id="countdown-detik" class="count">0</p>
                    <div class="subtitle second">SECOND</div>
                </div></div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    var countDownDate = new Date("{{ $time }}").getTime();
    console.log(countDownDate);
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






