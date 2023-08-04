<div class="container-galery">
    <div class="container-bg">
        <img class="ornamen" src="{{ asset('civex/img/landingpage/activity-ornamen4.svg') }}" alt="">
        <img class="ornamen2" src="{{ asset('civex/img/landingpage/activity-ornamen5.svg') }}" alt="">
    </div>
    <div class="container">
        <p class="title">Event Gallery
            <img src="{{ asset('civex/img/landingpage/galery-miracle.svg') }}" alt="">
        </p>
        <div class="sub">
            <p>from the past</p>
        </div>
        <div id="container">
            <div id="slider-container">
                <span onclick="slideRight()" style="box-shadow: none;" class="btn"><img
                        src="{{ asset('civex/img/landingpage/galeri-icon-prev.svg') }}" alt=""></span>
                <div id="slider">
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                    <div class="slide"><img src="https://via.placeholder.com/234" alt="Image 1"></div>
                </div>
                <span onclick="slideLeft()" style="box-shadow: none;" class="btn"><img
                        src="{{ asset('civex/img/landingpage/galeri-icon-next.svg') }}" alt=""></span>
            </div>
        </div>
    </div>
</div>

<script>
    var container = document.getElementById('container')
    var slider = document.getElementById('slider');
    var slides = document.getElementsByClassName('slide').length;
    var buttons = document.getElementsByClassName('btn');


    var currentPosition = 0;
    var currentMargin = 0;
    var slidesPerPage = 0;
    var slidesCount = slides - slidesPerPage;
    var containerWidth = container.offsetWidth;
    var prevKeyActive = false;
    var nextKeyActive = true;

    window.addEventListener("resize", checkWidth);

    function checkWidth() {
        containerWidth = container.offsetWidth;
        setParams(containerWidth);
    }

    function setParams(w) {
        if (w < 551) {
            slidesPerPage = 1;
        } else {
            if (w < 901) {
                slidesPerPage = 2;
            } else {
                if (w < 1101) {
                    slidesPerPage = 3;
                } else {
                    slidesPerPage = 4;
                }
            }
        }
        slidesCount = slides - slidesPerPage;
        if (currentPosition > slidesCount) {
            currentPosition -= slidesPerPage;
        };
        currentMargin = -currentPosition * (100 / slidesPerPage);
        slider.style.marginLeft = currentMargin + '%';
        if (currentPosition > 0) {
            buttons[0].classList.remove('inactive');
        }
        if (currentPosition < slidesCount) {
            buttons[1].classList.remove('inactive');
        }
        if (currentPosition >= slidesCount) {
            buttons[1].classList.add('inactive');
        }
    }

    setParams();

    function slideRight() {
    if (currentPosition != 0) {
        slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
        currentMargin += (100 / slidesPerPage);
        currentPosition--;
    } else {
        slider.style.marginLeft = -(100 / slidesPerPage) * slidesCount + '%';
        currentMargin = -(100 / slidesPerPage) * slidesCount;
        currentPosition = slidesCount;
    }
    buttons[0].classList.remove('inactive');
    buttons[1].classList.remove('inactive');
};

function slideLeft() {
    if (currentPosition != slidesCount) {
        slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
        currentMargin -= (100 / slidesPerPage);
        currentPosition++;
    } else {
        slider.style.marginLeft = '0%';
        currentMargin = 0;
        currentPosition = 0;
    }
    buttons[0].classList.remove('inactive');
    buttons[1].classList.remove('inactive');
};
</script>
