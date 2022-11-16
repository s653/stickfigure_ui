@extends('layouts.app')
@push('css')
    <style>
        .image-container {
            background: url('{{ asset("assets/images/Images/register.png") }}');
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
                <h1 style="font-family: Brittany Signature">Lets Get Started</h1>
                <h3 class="signin pb-3 justify-content-start">sign up to account</h3>
                <div class="form-style">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Choose Username" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0px;">
                                <div class="form-group">
                                    <input type="text" placeholder="First Name" class="form-control"
                                        id="exampleInputFirst1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-left: 7px;">
                                <div class="form-group">
                                    <input type="text" placeholder="Last Name" class="form-control"
                                        id="exampleInputSecond1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0px;">
                                <div class="form-group">
                                    <select class="form-control" style="background-color: #E9E9E9;height: calc(2.25rem + 15px);border-radius: 10px;">
                                        <option selected disabled>Country Code</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-left: 7px;">
                                <div class="form-group">
                                    <input type="text" placeholder="Mobile No" class="form-control"
                                        id="exampleInputSecond1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>


                        <div class="pb-2">
                            <button type="submit" class="get-started w-100 mt-2">Next</button>
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
