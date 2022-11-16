@extends('layouts.app')
@push('css')
    <style>
        .image-container {
            background: url('{{ asset("assets/images/Images/login.png") }}');
            background-position: center;
            background-repeat: no-repeat;
            object-fit: cover;
            background-origin: content-box;
            background-size: contain;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row m-5 no-gutters">
            <div class="col-md-6 d-none d-md-block image-container">
            </div>
            <div class="col-md-6 bg-white p-5">
                <h1 style="font-family: Brittany Signature">Welcome</h1>
                <h3 class="signin pb-3 justify-content-start">sign in to account</h3>
                <div class="form-style">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Email or Username" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div><a href="/forgot_password">Forget Password?</a></div>
                            <div class="d-flex align-items-center">
                                <input name="" type="checkbox" value="" />
                                <span class="pl-2 font-weight-bold">Remember Me</span>
                            </div>
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="get-started w-100 mt-2">Sign In</button>
                        </div>
                    </form>
                    <div class="sideline">OR</div>
                    <div class="row justify-content-center pt-2">
                        <div class="col-md-6 d-flex justify-content-between">
                            <div class="social" style="background-image: url('{{ asset('assets/images/google.png') }}')">
                            </div>
                            <div class="social" style="background-image: url('{{ asset('assets/images/fb.png') }}')"></div>
                            <div class="social" style="background-image: url('{{ asset('assets/images/instagram.png') }}')">
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 text-center">
                        Don’t have an account?<a href="#">Sign Up</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
