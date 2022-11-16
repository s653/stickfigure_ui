@extends('layouts.app')

@push('css')
    <style>
        .list-group-item {
            border: none !important;
            border-radius: 10px !important;
            background-color: transparent;
        }

        .list-group-item:hover {
            background-color: #E9E9E9;
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
    <main style="background-color: rgba(249, 249, 249, 1)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="container">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h2>All Followers</h2>
                                <p style="margin-bottom: 0px;">Total 137 Friends</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="w-100" placeholder="Search your products"
                                            style="background-color: #E9E9E9; height: 50px;" />
                                        <img src="{{ asset('assets/images/search.png') }}"
                                            style="position: absolute;bottom: 20px; right: 40px; top: 13px;" />
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-6 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/follower1.png') }}" />
                                                            <h4>Cras justo odio</h4>
                                                        </div>
                                                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                                                            <div class="mr-3 d-flex align-items-center"
                                                                style="width: 32px; height: 32px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                            <div class="d-flex align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/menu_bar.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-6 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/follower1.png') }}" />
                                                            <h4>Cras justo odio</h4>
                                                        </div>
                                                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                                                            <div class="mr-3 d-flex align-items-center"
                                                                style="width: 32px; height: 32px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                            <div class="d-flex align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/menu_bar.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-6 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/follower1.png') }}" />
                                                            <h4>Cras justo odio</h4>
                                                        </div>
                                                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                                                            <div class="mr-3 d-flex align-items-center"
                                                                style="width: 32px; height: 32px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                            <div class="d-flex align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/menu_bar.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-6 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/follower1.png') }}" />
                                                            <h4>Cras justo odio</h4>
                                                        </div>
                                                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                                                            <div class="mr-3 d-flex align-items-center"
                                                                style="width: 32px; height: 32px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                            <div class="d-flex align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/menu_bar.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <div class="row d-flex">
                                                        <div class="col-md-6 d-flex align-items-center">
                                                            <img class="mr-3"
                                                                src="{{ asset('assets/images/follower1.png') }}" />
                                                            <h4>Cras justo odio</h4>
                                                        </div>
                                                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                                                            <div class="mr-3 d-flex align-items-center"
                                                                style="width: 32px; height: 32px;">
                                                                <img src="{{ asset('assets/images/comment_icon.png') }}" />
                                                            </div>
                                                            <div class="d-flex align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <img src="{{ asset('assets/images/menu_bar.png') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3" style="background-color: #E9E9E9 !important; border-radius: 10px;">
                    <div class="row">
                        <div class="card w-100" style="border: none;">
                            <div class="card-header">
                                <h2 class="card-title">Followers Request</h2>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="row w-100">
                                        <div class="col-md-9 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/avatar1.png') }}" />
                                            <h4 class="ml-3"> Cras justo odio </h4>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle image-container mr-2">
                                                    <img src="{{ asset('assets/images/accept.png') }}" />
                                                </div>
                                                <div class="rounded-circle image-container">
                                                    <img src="{{ asset('assets/images/cancel.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="row w-100">
                                        <div class="col-md-9 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/avatar3.png') }}" />
                                            <h4 class="ml-3"> Cras justo odio </h4>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle image-container mr-2">
                                                    <img src="{{ asset('assets/images/accept.png') }}" />
                                                </div>
                                                <div class="rounded-circle image-container">
                                                    <img src="{{ asset('assets/images/cancel.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="row w-100">
                                        <div class="col-md-9 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/avatar2.png') }}" />
                                            <h4 class="ml-3"> Cras justo odio </h4>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle image-container mr-2">
                                                    <img src="{{ asset('assets/images/accept.png') }}" />
                                                </div>
                                                <div class="rounded-circle image-container">
                                                    <img src="{{ asset('assets/images/cancel.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="row w-100">
                                        <div class="col-md-9 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/avatar4.png') }}" />
                                            <h4 class="ml-3"> Cras justo odio </h4>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle image-container mr-2">
                                                    <img src="{{ asset('assets/images/accept.png') }}" />
                                                </div>
                                                <div class="rounded-circle image-container">
                                                    <img src="{{ asset('assets/images/cancel.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="row w-100">
                                        <div class="col-md-9 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/avatar3.png') }}" />
                                            <h4 class="ml-3"> Cras justo odio </h4>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle image-container mr-2">
                                                    <img src="{{ asset('assets/images/accept.png') }}" />
                                                </div>
                                                <div class="rounded-circle image-container">
                                                    <img src="{{ asset('assets/images/cancel.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="row w-100">
                                        <div class="col-md-9 d-flex align-items-center">
                                            <img src="{{ asset('assets/images/avatar2.png') }}" />
                                            <h4 class="ml-3"> Cras justo odio </h4>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle image-container mr-2">
                                                    <img src="{{ asset('assets/images/accept.png') }}" />
                                                </div>
                                                <div class="rounded-circle image-container">
                                                    <img src="{{ asset('assets/images/cancel.png') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
