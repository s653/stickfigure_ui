@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4" style="background: rgba(243, 243, 243, 1);
    ">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: transparent; border: none;">
                    <a href="#">
                        <div class="row d-flex">
                            <div class="col-md-10 d-flex align-items-center">
                                <img class="mr-3" src="{{ asset('assets/images/notification4.png') }}" />
                                <div class="wrapper">
                                    <p style="margin-bottom: 0px;">Johnny Den</p>
                                    <p style="margin-bottom: 0px;">It's Okay</p>
                                </div>

                            </div>
                            <div class="col-md-2 d-flex justify-content-end align-items-center">
                                <div class="d-flex flex-column align-items-center" style="width: 36px; height: 36px;">
                                    <small>5 min</small>
                                    <img src="{{ asset('assets/images/inbox_seen.png') }}" />
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="list-group-item" style="background-color: transparent; border: none;">
                    <a href="#">
                        <div class="row d-flex">
                            <div class="col-md-10 d-flex align-items-center">
                                <img class="mr-3" src="{{ asset('assets/images/notification3.png') }}" />
                                <p style="margin-bottom: 0px;">Martin Cooper Likes A Meme You shared</p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-end align-items-center">
                                <div class="d-flex flex-column align-items-center" style="width: 36px; height: 36px;">
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
@endsection
