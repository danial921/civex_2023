<div class="back-button pl-lg-4 pl-2"><a href="/" class="back"><img class="back" src="{{ asset('civex/img/icon/icon-back.svg') }}" alt=""></a></div>
<div class="container container-about-detail">
    <p class="about">About</p>
    <p class="title pt-0">Civil Expo ITS 2023 </p>
    <p class="desc pt-4"><span>Civil Expo ITS 2023</span> is a series of <span>national</span> and <span>international
            events</span> organized <span>by Civil Engineering Students</span> in the form of <span>seminars,
            competitions</span> in the field of civil engineering, and <span>talkshow</span> will be held from October
        to December 2023. <br>
        The purpose of holding this year's civil expo along with the theme is hoping that new enthusiasm and innovation
        will emerge from competition participants from all fields of civil engineering which can be a provision for the
        next generation of civil engineers in facing a new era, namely the era of economic globalization which demands
        an increase in strong competitiveness in technology, management, human resources and continuous efforts in
        developing innovation and creating cost efficiency so as to compete in the preparation of a borderless world.
    </p>
</div>


<div id="openGroup" class="ourthem" style="display: show">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="title">
                <img class="line d-lg-block d-none" src="{{ asset('civex/img/icon/details-ourtheme-line.svg') }}" alt=""
                    srcset="">
                <span class="details">
                    <img src="{{ asset('civex/img/icon/details-ourtheme.svg') }}" alt="" srcset="">
                    <p>“Preparing Youth Engineer for Golden Indonesia 2045 by Optimizing Technology Utilization”</p>
                    <button id="openButton">
                        <p>See Details</p>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-lg-6 col-12 contianer-image">
            <img class="run mt-4" src="{{ asset('civex/img/icon/details-run.png') }}" alt="">
        </div>
    </div>
</div>


<div id="closeGroup" class="ourthem" style="display: none;">
    <img class="ornamen1" src="{{ asset('civex/img/icon/about-ornamen.svg') }}" alt="">
    <div class="row mb-lg-4">
        <div class="col-lg-6 col-12">
            <div class="title">
                <img class="line d-lg-block d-none" src="{{ asset('civex/img/icon/details-ourtheme-line.svg') }}" alt=""
                    srcset="">
                <span class="details">
                    <img src="{{ asset('civex/img/icon/details-ourtheme.svg') }}" alt="" srcset="">
                    <p>“Preparing Youth Engineer for Golden Indonesia 2045 by Optimizing Technology Utilization”</p>
                    <button id="closeButton">
                        <p>See Details</p>
                    </button>
                    <img class="arrow d-lg-block d-none" src="{{ asset('civex/img/icon/details-arrow.svg') }}"
                        alt="">
                </span>
            </div>
        </div>
        <div class="col-lg-6 col-12 contianer-image">
            <img class="run mt-lg-2 mt-4" src="{{ asset('civex/img/icon/details-run.png') }}" alt="">
        </div>
    </div>
    <div class="container ">
        <p>&ensp;&ensp;<span>Indonesia will become a golden age in 2045.</span> At that time, Indonesia will be <span>100 years</span> old after independence.
            At that time, it is targeted that Indonesia will have become a developed country and has been aligned with
            superpowers. The historic momentum is still about a quarter of a century away. But to make it happen
            requires careful preparation in advance. Indonesia's human resources must be superior, qualified, and have
            character. <br>
            &ensp;&ensp;Mr. Muhadjir Effendy (Coordinating Minister for Human Development and Culture) explained that students and
            university graduates with bachelor's degrees or people who are currently at the age of 20, by the time
            Indonesia is 100 years old in 2045, their age will reach around 40 years and above which is the peak age of
            professional careers. Therefore, this Golden Indonesia belongs to all of us, not to those who are currently
            40 years old and above. We who will be responsible or the leaders of Indonesia 2045 are called the Golden
            Generation 2045. <br>
            &ensp;&ensp;A generation that is smart and willing to make a difference must be formed early to achieve Indonesia's
            dream of becoming the golden generation of 2045. In realizing this, Civil Expo 2023 decided to raise issues
            that are being felt by many students. Of the 4 pillars that have been compiled by the National Development
            Planning Agency as the <span>vision of Indonesia in 2045</span>, Civil Expo 2023 is more concerned with the first pillar,
            namely <span>"Human Development and Mastery of Science and Technology"</span>. This is because there are still many
            students who have not utilized technology in the application of their knowledge, while the world of work is
            currently looking for experts in the field of technology, especially BIM.</p>
    </div>

</div>

<script>
$(document).ready(function() {
    $('#openButton').click(function() {
        $('#openGroup').fadeOut('slow', function() {
            $('#closeGroup').fadeIn('slow');
        });
    });

    $('#closeButton').click(function() {
        $('#closeGroup').fadeOut('slow', function() {
            $('#openGroup').fadeIn('slow');
        });
    });
});
</script>
