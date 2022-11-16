@extends('layouts.app')
@push('css')
    <style>
        .image-container {
            background: url('{{ asset("assets/images/Images/reset-password.png") }}');
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
                <h3 class="signin pb-3">reset password</h3>
                <div class="form-style">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Verification Code" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Your New Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Re-Enter Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <button type="submit" class="get-started w-100 mt-2">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="row pt-2">
                        <div class="col-md-12">
                            <h5>Include the following:</h5>
                            <ul>
                                <li>Atleast One Capital Letter</li>
                                <li>Atleast One Special Character</li>
                                <li>Atleast 9 letters in your password</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
