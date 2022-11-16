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
        .get-started{
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
    <main style="background-color: rgba(249, 249, 249, 1)">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="container">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h2>Notifications</h2>
                                <img src="{{ asset('assets/images/setting.png') }}" />
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
                                                            <p style="margin-bottom: 0px;">Martin Cooper Likes A Meme You shared</p>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <small>5 min</small>
                                                                <img src="{{ asset('assets/images/notify_menu.png') }}" />
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
                                                            <p style="margin-bottom: 0px;">Martin Cooper Likes A Meme You shared</p>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <small>5 min</small>
                                                                <img src="{{ asset('assets/images/notify_menu.png') }}" />
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
                                                                src="{{ asset('assets/images/notification2.png') }}" />
                                                            <div class="description">
                                                                <p style="margin-bottom: 0px;">Solayam Yanha Sent you a Request</p>
                                                                <button class="get-started" style="background-color: rgba(36, 36, 36, 1); color: white">Confirm</button>
                                                                <button class="get-started">Delete</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <small>5 min</small>
                                                                <img src="{{ asset('assets/images/notify_menu.png') }}" />
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
                                                            <p style="margin-bottom: 0px;">Martin Cooper Likes A Meme You shared</p>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end align-items-center">
                                                            <div class="d-flex flex-column align-items-center"
                                                                style="width: 36px; height: 36px;">
                                                                <small>5 min</small>
                                                                <img src="{{ asset('assets/images/notify_menu.png') }}" />
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
            </div>
        </div>
    </main>
@endsection
