@extends('layout.app')

@section('title')
    Login
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
                            <form action="{{ route('loginproses') }}" method="post">
                                @csrf
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Login</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">Selamat Datang di MDL Transport</div>
                                    <!--end::Subtitle=-->
                                </div>

                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                                        class="form-control bg-transparent" />
                                    <!--end::Email-->
                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                                        class="form-control bg-transparent" />
                                    <!--end::Password-->
                                    @error('password')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Wrapper-->
                                {{-- <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>
                                    <!--begin::Link-->
                                    <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html"
                                        class="link-primary">Lupa Password?</a>
                                    <!--end::Link-->
                                </div> --}}
                                <!--end::Wrapper-->
                                <!--begin::Submit button-->
                                <div class="d-grid mb-10 ">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Login</span>
                                        <!--end::Indicator label-->
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <div class="separator separator-content my-10">
                                    <span class="w-125px text-gray-500 fw-semibold fs-7">atau</span>
                                </div>
                                <div class=" d grid row g-3 mb-0">
                                    <!--begin::Col-->
                                    <!--begin::Google link--->
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                            class="h-15px me-3">
                                        Masuk dengan Google
                                    </a>
                                    <!--end::Google link--->
                                </div>
                                <!--end::Col-->
                                <div class="text-gray-500 text-center fw-semibold fs-6 mt-8">
                                    Belum punya akun? <a href="{{ route('register') }}" class="link-primary">Registrasi</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
