@extends('authentication.master')

@section('content')
<div class="authcard d-flex align-items-center justify-content-center pt-5">
    <div class="col-lg-6 col-md-8 col-12 mx-auto">
        <div class="card card">
            <div class="card-header" style="background-color: #003459">
                <div class="d-flex justify-content-end">
                    <a href="/">
                        <img class="closebutton" src="{{ asset('/civex/img/colse_vector.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="card-body">
                <h5 class="title">Verifikasi Email </h5>
                <p class="subtitle mt-1">Terima kasih telah mendaftar! Sebelum memulai, dapatkah Anda memverifikasi alamat email Anda dengan mengeklik tautan yang baru saja kami kirimkan melalui email kepada Anda? Jika Anda tidak menerima email tersebut, kami dengan senang hati akan mengirimkan email yang lain kepada Anda.</p>
                
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('Tautan verifikasi baru telah dikirim ke alamat email.') }}
                    </div>
                @endif
                
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="submitbutton">
                            {{ __('Kirim Ulang Verifikasi Email') }}
                        </button>
                    </div>
                </form>

                <form method="GET" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="submitbutton">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
