<nav class="mb-4 navbar navbar-expand-lg navbar-light navbar-countdown cyan fixed-top">
    <a class="navbar-brand font-bold" href="/">
        <img class="nav-icon" src="{{ asset('civex/img/Logo.svg') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ $active == 'home' ? 'civex-active' : '' }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ $active == 'opening' ? 'civex-active' : '' }}">
                <a class="nav-link " href="/opening">Opening</a>
            </li>
            <li class="nav-item {{ $active == 'competition' ? 'civex-active' : '' }}">
                <a class="nav-link" href="/competition">Competition</a>
            </li>
            <li class="nav-item {{ $active == 'merchandise' ? 'civex-active' : '' }}">
                <a class="nav-link" href="/merchandise">Merchandise</a>
            </li>
            <li class="nav-item {{ $active == 'closing' ? 'civex-active' : '' }}">
                <a class="nav-link" href="/closing">Closing</a>
            </li>
            <li class="nav-item  active">

                <a class="nav-link" href="/login">Login</a>

            </li>
        </ul>
    </div>
</nav>
