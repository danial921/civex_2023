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
                <h5 class="title">Reset Password </h5>
                <p class="subtitle mt-1">masukkan password baru anda.</p>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email"
                            placeholder="civex@its.ac.id" name="email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password"
                            placeholder="civex@its.ac.id" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            placeholder="civex@its.ac.id" name="password_confirmation" oninput="validatePassword()" required>
                        <div class="invalid-feedback" id="password_confirmation-false"></div>
                    </div>
                    <div class="actionfield mt-4">
                        <button class="submitbutton" id="btnSubmit">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src=" {{ asset('js/resetpassword.js') }} " ></script>
@endsection
