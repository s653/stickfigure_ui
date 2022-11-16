@extends('layouts.app')

@push('css')
    <style>
        .list-group-item {
            border: none !important;
            background-color: transparent !important;
        }
        .card{
            background-color: transparent !important;
        }
        .card-footer i{
            width: 100%;
        }
    </style>
@endpush
@section('content')
    <main style="background-color: rgba(249, 249, 249, 1)">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card my-3">
                                <div class="card-body">
                                    <textarea placeholder="Share something" rows="4" style="background-color: rgba(233, 233, 233, 1);"></textarea>
                                </div>
                                <div class="card-footer" style="background-color: rgba(233, 233, 233, 1) !important;">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-between">
                                            <div class="col-md-4 d-flex align-items-center">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                <i class="fa fa-at" aria-hidden="true"></i>
                                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                <i class="fa fa-tag" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-1">
                                                <i class="fa fa-paper-plane-o d-flex justify-content-end" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="background-color: #E9E9E9 !important;">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="row pt-3">
                                            <div class="col-md-1 d-flex align-items-center">
                                                <img src="{{ asset('assets/images/vector.png') }}" />
                                            </div>
                                            <div class="col-md-4 d-flex align-items-center p-0">
                                                <h5 class="card-title mr-2">Martin Cooper </h5>
                                                <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-11 p-0">
                                                <p class="card-text">In publishing and graphic design, Lorem ipsum is a
                                                    placeholder text commonly used to demonstrate the visual
                                                    document or a typeface without relying on meaningful content. Lorem
                                                    ipsum may be used as a placeholder...See More</p>
                                            </div>
                                        </div>
                                        <div class="container my-3">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="card-img-bottom"
                                                            src="{{ asset('assets/images/image 3.png') }}"
                                                            alt="Card image cap" />
                                                    </div>
                                                    <div class="card-footer" style="border: none;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-12 d-flex justify-content-between align-items-center">
                                                                <p class="px-3"
                                                                    style="margin-bottom: 0px; background-color: #D9D9D9; border-radius: 10px;">
                                                                    $23.99</p>
                                                                <button class="get-started"
                                                                    style="width: 93px; height: 42px;">Buy it</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 d-flex justify-content-between my-2">
                                                    {{-- <img src="{{ asset('assets/images/Group 699.png') }}" /> --}}
                                                    <a href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: red"></i> 1.5k
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: black"></i> 2k
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o" aria-hidden="true" style="color: black"></i> 2.4k
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-share-square-o" aria-hidden="true" style="color: black"></i> 200
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 pl-0">
                                                    <input type="text" placeholder="Add your comment"
                                                        style="width: 100%; background-color: #F6F6F6" />
                                                        <i class="fa fa-paper-plane-o" aria-hidden="true" style="position: absolute;top: 13px;right: 40px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3" style="background-color: #E9E9E9 !important; border-radius: 10px;">
                    <div class="row">
                        <div class="card w-100" style="border: none;">
                            <div class="card-body">
                                <h5 class="card-title" style="padding-left: 1.25rem; margin-bottom: 0px;">Followers</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar1.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar2.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar3.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar4.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar1.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar2.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar3.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="user-container" style="font-weight: 500;">
                                        <img src="{{ asset('assets/images/avatar4.png') }}"/> Cras justo odio
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center" style="width: 10px; height: 10px; background: rgba(95, 216, 0, 1);"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
