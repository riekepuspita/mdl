@extends('layout.app')

@section('title')
    Registrasi
@endsection

@section('content')

    <body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <style>
                body {
                    background-image: url('assets/media/auth/bgcream.jpg');
                }
            </style>
            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                    <div class="d-flex flex-center flex-lg-start flex-column">
                        <img alt="Logo" src="assets/media/logos/mdl.png" />
                        </a>
                        <h2 class="text-black fw-normal m-0">---SLOGAN MDL TRANSPORT---</h2>
                    </div>
                </div>
                <div class="d-flex flex-center w-lg-50 p-10">
                    <div class="card rounded-3 w-md-550px">
                        <div class="card-body p-10 p-lg-20">
                            <form action="/registeruser" method="POST">
                                @csrf
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Registasi</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">Selamat Datang di MDL Transport</div>
                                    <!--end::Subtitle=-->
                                </div>
                                
                                    <div class="fv-row mb-8">
                                        <!--begin::Email-->
                                        <input type="text" placeholder="Nama" name="name" autocomplete="off"
                                            class="form-control bg-transparent" />
                                        <!--end::Email-->
                                    </div>
                                    <div class="fv-row mb-8">
                                        <!--begin::Email-->
                                        <input type="text" placeholder="Email" name="email" autocomplete="off"
                                            class="form-control bg-transparent" />
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Input group=-->
                                    <div class="fv-row mb-3">
                                        <!--begin::Password-->
                                        <input type="password" placeholder="Password" name="password" autocomplete="off"
                                            class="form-control bg-transparent" />
                                        <!--end::Password-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                        <div></div>
                                        <!--begin::Link-->
                                        <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html"
                                            class="link-primary">Lupa Password?</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10">
                                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">Registrasi</button>
                                    </div>
                                    <div class="text-gray-500 text-center fw-semibold fs-6">Sudah punya akun?
                                        <a href="{{ route('login') }}" class="link-primary">Login</a>
                                    </div>
                                </>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
