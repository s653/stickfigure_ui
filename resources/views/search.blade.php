@extends('layouts.app')

@push('css')
    <style>
        .list-group-item {
            border: none !important;
            border-radius: 10px !important;
            background-color: transparent;
        }

        .list-group-item:hover {
            background-color: #F3F3F3;
        }

        .card,
        .card-header {
            background-color: #F3F3F3;
            border: none;
            border-radius: 10px;
        }

        .card-header,
        .card-footer {
            border: none;
            padding: 0.25rem 0.75rem;
        }

        .image-container {
            width: 37px;
            height: 37px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
        }

        .get-started {
            width: 155px;
            height: 42px;
            border-radius: 30px;
        }

        h4 {
            font-weight: 700;
            font-size: 20px;
        }

        h2 {
            font-weight: 700;
            font-size: 28px;
        }
    </style>
@endpush
@section('content')
    <main class="my-4" style="background-color: rgba(249, 249, 249, 1)">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 mt-3">
                    <div class="card" style="background: #E9E9E9;">
                        <div class="container p-3" style="position: relative;">
                            <input type="text" value="Nick"
                                style="width: 100%; background-color: #F3F3F3; color: black" />
                            <img src="{{ asset('assets/images/search.png') }}"
                                style="width: 25px;position: absolute;right: 35px;bottom: 0px;top: 22px;" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 d-flex justify-content-around pt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        All
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="users"
                                        id="users" checked>
                                    <label class="form-check-label" for="users">
                                        User
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="creations"
                                        id="creations" >
                                    <label class="form-check-label" for="creations">
                                        Creations
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="products"
                                        id="products" >
                                    <label class="form-check-label" for="products">
                                        Products
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-3">
                    <div class="card" style="background: #E9E9E9;">
                        <div class="container">
                            <div class="card-header d-flex justify-content-between align-items-center"
                                style="background-color: transparent !important;">
                                <h2 style="font-family: auto;">Search Results</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-10 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/notification4.png') }}" />
                                                            <div class="text-container">
                                                                <h4 style="margin-bottom: 0px;">Nick Maiden</h4>
                                                                <h6 style="margin-top: 0px;font-family: system-ui;">56
                                                                    Friends</h6>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-10 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/notification3.png') }}" />
                                                            <div class="text-container">
                                                                <h4 style="margin-bottom: 0px;">Nicky Jones Creation</h4>
                                                                <h6 style="margin-top: 0px;font-family: system-ui;">Martin’s
                                                                    Meme</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-10 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/t-shirt.png') }}"
                                                                style="width: 15%;" />
                                                            <div class="text-container">
                                                                <h4 style="margin-bottom: 0px;">Nick Tshirt</h4>
                                                                <h6 style="margin-top: 0px;font-family: system-ui;">Sahil’s
                                                                    Product</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-10 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/notification1.png') }}" />
                                                            <div class="text-container">
                                                                <h4 style="margin-bottom: 0px;">Nicky Jones Creation</h4>
                                                                <h6 style="margin-top: 0px;font-family: system-ui;">Martin’s
                                                                    Meme</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button class="get-started" style="width: 332px;">View More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
