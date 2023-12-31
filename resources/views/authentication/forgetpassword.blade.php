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
                <h5 class="title">Lupa Password ?</h5>
                <p class="subtitle mt-1">masukkan email anda, kami akan mengirim link reset password melalui email anda.</p>
                
                @if (session('status') == 'We have emailed your password reset link!')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('Link reset password telah terkirim.') }}
                    </div>
                @else
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1 formtitle" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="civex@its.ac.id" name="email" required>
                    </div>
                    <div class="actionfield mt-4">
                        <button class="submitbutton">Reset Password</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
