@extends('layouts.app')
@push('css')
    <style>
        .image-container {
            background: url('{{ asset("assets/images/Images/stick images-06.png") }}');
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
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center bg-white p-5">
                <h3 class="signin" style="margin-bottom: 10px;">forgot password</h3>
                <p style="text-align: center;">You will  get an verification code at  your email address</p>
                <div class="form-style">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Verification Code" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <button type="submit" class="get-started w-100 mt-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
