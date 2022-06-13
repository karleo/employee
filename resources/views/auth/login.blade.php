@extends('layouts.login')

@section('content')
<div class="login login-2 login-signin-on d-flex flex-column flex-column-fluid bg-white position-relative overflow-hidden" id="kt_login">
    <!--begin::Header-->
    <div class="login-header py-10 flex-column-auto">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
            <!--begin::Logo-->
            <a href="#" class="flex-column-auto py-5 py-md-0">
                <img src="{{ asset('assets/assets/media/logos/logo-6.svg') }}" alt="logo" class="h-50px" />
            </a>
            <!--end::Logo-->
            <!--
            <span class="text-muted font-weight-bold font-size-h4">New Here?
                    <a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Create an Account</a></span>
            -->
        </div>
    </div>
     <!--end::Header-->
    <!--begin::Body-->
    <div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
        <div class="container row">
            <div class="col-lg-6 d-flex align-items-center">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('login') }}" class="form w-xxl-550px rounded-lg p-20" novalidate="novalidate" id="kt_login_signin_form">
                        @csrf
                        <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome User</h3>
                        </div>
                        <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">{{ __('Email') }}</label>
                            <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="email" name="email" id="email" autocomplete="off" />
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">{{ __('Password') }}</label>
                                {{-- <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a> --}}
                            </div>
                            <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password" name="password" autocomplete="off" />
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">
                            <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
                
            </div>
            <div class="col-lg-6 bgi-size-contain bgi-no-repeat bgi-position-y-center bgi-position-x-center min-h-150px mt-10 m-md-0" style="background-image: url({{asset('assets/assets/media/svg/illustrations/accomplishment.svg')}})"></div>
        </div>
    </div>
    <!--end::Body-->
     <!--begin::Footer-->
     <div class="login-footer py-10 flex-column-auto">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
            <div class="font-size-h6 font-weight-bolder order-2 order-md-1 py-2 py-md-0">
                <span class="text-muted font-weight-bold mr-2">2022©</span>
                <a href="{{ url('') }}" target="_blank" class="text-dark-50 text-hover-primary">karleo</a>
            </div>
        </div>
    </div>
    <!--end::Footer-->
</div>
<!--end::Login-->
@endsection
