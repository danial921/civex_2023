@extends('authentication.master')

@section('content')
    <div class="authcard d-flex align-items-center justify-content-center pt-5">
        <div class="col-lg-6 col-md-8 col-12 mx-auto">
            <div class="card card">
                <div class="card-header" style="background-color: #003459">
                    <div class="d-flex justify-content-end">
                        <img class="closebutton" src="{{ asset('/civex/img/colse_vector.svg') }}" alt="">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="title">Login</h5>
                    <p class="subtitle mt-1">Silahkan Masuk dengan akun anda</p>
                    <form method="POST" action="{{route('login')}}" class="mt-2">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1 formtitle" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" name="password" required>
                        </div>
                        <div class="actionfield mt-4">
                            <button class="submitbutton" type="submit">Masuk</button>
                            <p class="mt-3">tidak memiliki akun ? <a href="/register" ><span class="actiontext">daftar sekarang</span></a></p>
                            <p>atau</p>
                            <p><a href="/forgot-password"><span class="actiontext">lupa password</span></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
