<div id="menu-sidebar" class="off-canvas off-canvas-overlay wd-300 wd-md-400 shadow">
    <div class="off-canvas-header bd-b-0">
    <a href="{{url('/')}}" class="d-flex justify-content-center align-items-center">
        <img src="{{ asset('civex/img/Logo.svg') }}" class="ht-35">
    </a>
        <a href="#" class="close"><i data-feather="x"></i></a>
    </div>
    <div class="off-canvas-body pd-t-5 pd-md-t-10">
        <ul class="sidebar-nav">
            <li class="nav-item d-flex justify-content-between align-items-center"><a href="{{url('/admin/gec')}}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('civex/img/icon/icon-gec.svg') }}" class="wd-20 mg-r-15">
                <span class="c-gec">GEC</span> Geotechnical Engineering Competition</a>
                <button class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-gec" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon></button>
            </li>
            <div class="collapse mg-l-35" id="collapse-gec">
                <li class="nav-item"><a href="{{url('/admin/gec')}}" class="nav-link-its tx-poppins tx-medium text-truncate">Data Peserta</a></li>
                <!-- <li class="nav-item"><a href="{{url('/admin/gec-aanwijizing')}}" class="nav-link-its tx-poppins tx-medium text-truncate"></span>Aanwijizing</a></li> -->
            </div>
            <li class="nav-item d-flex justify-content-between align-items-center"><a href="{{url('/admin/cppc')}}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('civex/img/icon/icon-cpcc.svg') }}" class="wd-20 mg-r-15"><span class="c-cpcc">CPCC</span> Construction Project Planning Competition</a>
                <button class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-cpcc" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon></button>
            </li>
            <div class="collapse mg-l-35" id="collapse-cpcc">
                <li class="nav-item"><a href="{{url('/admin/cppc')}}" class="nav-link-its tx-poppins tx-medium text-truncate">Data Peserta</a></li>
                <!-- <li class="nav-item"><a href="{{url('/admin/cppc-aanwijizing')}}" class="nav-link-its tx-poppins tx-medium text-truncate"></span>Aanwijizing</a></li> -->
            </div>
            <li class="nav-item d-flex justify-content-between align-items-center"><a href="{{url('/admin/cesc')}}" class="nav-link-its tx-poppins tx-medium text-truncate flex-grow-1"><img src="{{ asset('civex/img/icon/icon-cesc.svg') }}" class="wd-20 mg-r-15">
                <span class="c-cesc">CESC</span> Civil Engginering Student Competition</a>
                <button class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" type="button" data-toggle="collapse" data-target="#collapse-cesc" aria-expanded="false" aria-controls="collapse-menu-portofolio"><ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon></button>
            </li>
            <div class="collapse mg-l-35" id="collapse-cesc">
                <li class="nav-item"><a href="{{url('/admin/cesc')}}" class="nav-link-its tx-poppins tx-medium text-truncate">Data Peserta</a></li>
            </div>
            <li class="nav-item mx-3"><img src="{{ asset('civex/img/line.svg') }}" alt=""></li>
            <li class="nav-item"><a href="{{url('/logout')}}" class="nav-link-its d-flex justify-content-start align-items-center"><img src="{{ asset('civex/img/icon/logout.png') }}" class="wd-20 mg-r-15"><span class="tx-poppins tx-medium text-truncate">Keluar</span></a></li>
        </ul>
    </div>
</div><!-- off-canvas -->
