@extends('layouts.authentication.master')

@section('title', 'Register with Image Two')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/1.jpg') }}"
                    alt="looginpage"></div>
            <div class="col-xl-5 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo text-start" href="{{ route('admin.default_dashboard') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main create-account">
                            <form class="theme-form">
                                <h4>Create your account</h4>
                                <p>Enter your personal details to create account</p>
                                <div class="form-group">
                                    <label class="col-form-label pt-0">Your Name</label>
                                    <div class="row g-2">
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" required=""
                                                placeholder="First name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" required=""
                                                placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" required="" placeholder="test@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                        <label class="text-muted form-check-label" for="checkbox1">I agree to the terms &
                                            conditions and <a class="ms-2" href="#">Privacy Policy</a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Create
                                        Account</button>
                                </div>
                                <h6 class="text-muted mt-4 or">Or create your account with</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                            target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><a
                                            class="btn btn-light" href="https://twitter.com/login?lang=en"
                                            target="_blank"><i class="fa-brands fa-x-twitter"></i></a><a
                                            class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a><a class="btn btn-light"
                                            href="https://www.google.com/" target="_blank"><i
                                                class="fa-brands fa-google"></i></a></div>
                                </div>
                                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2"
                                        href="{{ route('login') }}">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
