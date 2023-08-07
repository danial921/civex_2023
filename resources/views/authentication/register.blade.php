@extends('authentication.master')

@section('content')
    <div class="authcard d-flex align-items-center justify-content-center pt-5 vh-95">
        <div class="col-lg-6 col-md-8 col-12 mx-auto">
            <div class="card card">
                <div class="card-header" style="background-color: #003459">
                    <div class="d-flex justify-content-end">
                        <img class="closebutton" src="{{ asset('/civex/img/colse_vector.svg') }}" alt="">
                    </div>
                </div>
                <div class="card-body registercard">
                    <div class="registerform pr-2 mr-0 pt-sm-2">
                        <h5 class="title">Register</h5>
                        <p class="subtitle mt-1">Daftarkan Akun Anda</p>
                        <form id="register_form" class="mt-2 " method="POST" action=" {{ route ('register')}} " enctype="multipart/form-data">
                            @csrf
                        
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="TEXT" class="form-control" id="name" name="name"
                                    placeholder="Masukkan Nama Lengkapmu" required autofocus>
                                <div class="invalid-feedback" id="name-false">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="masukkan emailmu" required>
                                <div class="invalid-feedback" id="email-false">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="masukkan password" required>
                                <div class="invalid-feedback" id="password-false">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">confirm password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                    placeholder="ulangipassword" oninput="validatePassword()" required>
                                <div class="invalid-feedback" id="password_confirmation-false">
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">nomer telefon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp"
                                    placeholder="masukkan nomer telefonmu" required>
                                <div class="invalid-feedback" id="no_telp-false">
                            </div>
                            <div class="actionfield mt-4">
                            <button type="submit" class="submitbutton" id="btnSubmit">Daftar</button>
                                <a  href="#simpan" data-toggle="modal"  data-animation="effect-scale" style="width: 100%" id="btnModal" hidden>modal</a>

                                <p class="mt-3">sudah punya akun ? <a href="/login"><span class="actiontext">Login
                                            Sekarang</span></a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade effect-scale show" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpan"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modalregister " role="document" style="top: 100px">
            <button type="button colsemodal " class="btn tx-poppins tx-medium" data-dismiss="modal">
                <img src="{{ asset('civex/img/loginornamen/closeblack.svg') }}">
            </button>
            <img class="heromodal" src="{{ asset('civex/img/loginornamen/flayerdaftarakun.svg') }}" alt=""
                srcset="">
        </div>
    </div>
    <div id="overlay" class="overlay"></div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src=" {{ asset('js/register.js') }} " ></script>
@endsection
