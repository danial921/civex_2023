<header class="navbar navbar-header navbar-header-fixed pos-fixed z-index-10 wd-100p t-0 blur-transparent d-flex justify-content-between">
    <div class="d-flex align-items-center mg-l-10 mg-lg-l-20">
        <a href="#menu-sidebar" class="btn btn-icon btn-its-custom-1 off-canvas-menu rounded-its-50p d-flex align-items-center"><ion-icon name="menu" class="mg-y-2 tx-18"></ion-icon></a>
        <a href="{{url('/')}}" class="justify-content-center align-items-center mg-l-5 mg-lg-l-15 d-none d-lg-block">
            <img src="{{ asset('civex/img/Logo.svg') }}" class="ht-35">
            <p class="tx-poppins tx-medium tx-18 tx-md-20 tx-color-02 tx-spacing-1 mg-b-0 mg-l-10"><span class="tx-semibold"></p>
        </a>
    </div>
    {{-- Avatar --}}
    <div class="d-flex align-items-center mg-r-10 mg-lg-r-20">
        <div class="dropdown dropdown-profile">
            <a href="" class="dropdown-link profiledropdown" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm"><img src="{{ asset('civex/img/profile1.svg')}}" class="rounded-circle" alt=""></div>
                <p class="my-auto d-none d-lg-block">{{ $username }}</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right allow-focus shadow rounded-its-10">
                <a target="_blank" class="dropdown-item-its tx-poppins tx-medium bd-b" style="padding-top: 20px !important; padding-bottom: 20px !important;">
                    <div class="avatar avatar-md mg-r-15">
                        <img src="{{ asset('civex/img/profile1.svg')}}" class="rounded-circle" alt="">
                    </div>
                    <div class="media-body">
                        <p class="tx-15 tx-poppins tx-semibold mg-b-0 crop-text-1">{{ $username }}</p>
                    </div>
                </a>
                <a href="{{url('/logout')}}" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="log-out-sharp" class="tx-18"></ion-icon></span></div> Keluar</a>
            </div>
        </div>
    </div>
</header>

