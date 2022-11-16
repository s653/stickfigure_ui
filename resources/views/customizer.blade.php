@extends('layouts.app')
@push('css')
    <style>
        .active {
            background-color: #D9D9D9 !important;
        }

        .tab-btns {
            border: none !important;
            font-size: 20px;
            font-weight: 700;
        }

        .customizer-tools div {
            padding: 15px 0px;
        }

        #search {
            width: 70%;
            font-family: "RockoFLF Regular";
            font-size: 14px;
        }

        .products {
            font-family: "RockoFLF Bold";
            font-size: 20px;
        }

        li a {
            font-family: "RockoFLF Bold";
        }
        .next{
            top: 10px !important;
            left: calc(50% + 130px) !important;
            right: 0px !important;
            background-color: #71c0ef;
        }
    </style>
@endpush
@section('content')
    <div class="row" style="background-color: rgba(249, 249, 249, 1); height: 100vh">
        <div class="col-md-12 d-flex justify-content-between">
            <div class="col-md-3" style="background-color: #E9E9E9; padding-right: 0px; padding-left: 0px;">
                <div class="container">
                    <h1>Explore</h1>
                    <div class="wrapper d-flex align-items-center mb-3">
                        <input type="text" id="search" placeholder="Search anything you want" />
                        <img src="{{ asset('assets/images/search.png') }}" alt="">
                    </div>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation" style="width: 50%;">
                        <a data-toggle="tab" class="nav-link tab-btns active" href="#home">Stickfigures</a>
                        {{-- <button class="nav-link tab-btns active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true"
                            style="color: black; border-radius: 0px; letter-spacing: 0px;">Stickfigures</button> --}}
                    </li>
                    <li class="nav-item" role="presentation" style="width: 50%;">
                        <a data-toggle="tab" class="nav-link tab-btns" href="#profile">Creations</a>
                        {{-- <button class="nav-link tab-btns" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"
                            style="color: black; border-radius: 0px; letter-spacing: 0px;">Creations</button> --}}
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent" style="overflow-y: auto;">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container">
                            <div class="row" style="max-width: 491px;">
                                <div class="col-md-12 d-flex justify-content-center flex-wrap my-4">
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                        style="background-color: #D9D9D9">
                        <div class="container">
                            <div class="row" style="max-width: 491px">
                                <div class="col-md-12 d-flex justify-content-center flex-wrap my-4">
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />
                                    <img class="m-1 cursor" src="{{ asset('assets/images/notification3.png') }}" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-3" style="position: relative;">
                    <h1 class="products">Products</h1>
                    <div class="response-product product-list-owl owl-slick equal-container better-height" id="owl-carousel"
                        data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:5,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                        data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">

                        <div><a href="#">Bag</a></div>
                        <div><a href="#">T-shirt</a></div>
                        <div><a href="#">Cap</a></div>
                        <div><a href="#">Mask</a></div>
                    </div>

                </div>
            </div>

            <div class="col-md-8"></div>
            <div class="col-md-1 d-flex justify-content-center flex-column align-items-center px-0"
                style="max-width: 4.333333%;">
                <div class="col-md-12 d-flex flex-column px-0 text-center customizer-tools"
                    style="position: relative; background-color: #F3F3F3">
                    {{-- <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><img
                                src="{{ asset('assets/images/customizer/move_on.png') }}" />
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="test" tabindex="-1" href="#">Shape Tool <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">3rd level dropdown</a></li>
                                            <li><a href="#">3rd level dropdown</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="test" tabindex="-1" href="#">Scale</a>
                            </li>
                            <li><a tabindex="-1" href="#"></a></li>
                            <li><a tabindex="-1" href="#">CSS</a></li>
                        </ul>
                    </div> --}}

                    {{-- <div class="btn-group dropleft">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Dropleft
                        </button>
                        <ul class="dropdown-menu"
                            style="transform: translate3d(-204px, 15px, 0px) !important; width: 202px !important;">
                            <li class="dropdown-submenu list-group-item">
                                <a class="test" tabindex="-1" href="#">Shape Tool <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" style="width: 202px;">
                                    <li class="list-group-item"><a tabindex="-1" href="#" class="mr-2">
                                            <img src="{{ asset('assets/images/customizer/Square.png') }}" /> Rectangle</a>
                                    </li>
                                    <li class="list-group-item"><a tabindex="-1" href="#" class="mr-2">
                                            <img src="{{ asset('assets/images/customizer/triangle.png') }}" /> Polygon</a>
                                    </li>
                                    <li class="list-group-item"><a tabindex="-1" href="#" class="mr-2">
                                            <img src="{{ asset('assets/images/customizer/LineSegment.png') }}" /> Line</a>
                                    </li>
                                    <li class="list-group-item"><a tabindex="-1" href="#" class="mr-2">
                                            <img src="{{ asset('assets/images/customizer/Hexagon.png') }}" /> Hexagon</a>
                                    </li>
                                    <li class="list-group-item"><a tabindex="-1" href="#" class="mr-2">
                                            <img src="{{ asset('assets/images/customizer/Circle.png') }}" /> Circle</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a tabindex="-1" href="#" class="mr-2">
                                            <img src="{{ asset('assets/images/customizer/Star.png') }}" />
                                        </a>
                                        <h6>Star</h6>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Another dropdown <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">3rd level dropdown</a></li>
                                            <li><a href="#">3rd level dropdown</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="test list-group-item" tabindex="-1" href="#">Scale</a>
                            </li>
                            <li><a tabindex="-1" href="#"></a></li>
                            <li><a tabindex="-1" href="#">CSS</a></li>
                        </ul>
                    </div> --}}
                    <div>
                        <img src="{{ asset('assets/images/customizer/move_on.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/Diamond.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/Pen.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/PaintBrush.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/Eraser.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/TextT.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/Stack.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/Palette.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/PaintBucket.png') }}" />
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/customizer/ClockClockwise.png') }}" />
                    </div>
                    <div
                        style="position: absolute;
                    bottom: 0px;
                    /* text-align: center; */
                    left: 0px;
                    right: 0px;">
                        <img src="{{ asset('assets/images/customizer/CloudArrowDown.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
@endpush
