@extends('layouts.app')
@push('css')
    <style>
        body {
            overflow-y: hidden !important;
        }

        .active {
            background-color: #D9D9D9 !important;
        }

        .tab-btns {
            border: none !important;
            font-size: 20px;
            font-weight: 700;
        }

        .customizer-tools div {
            padding: 10px 0px;
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

        .next {
            top: 10px !important;
            left: calc(50% + 130px) !important;
            right: 0px !important;
        }

        .slick-slide {
            margin: 0 5px !important;
        }

        .owl-slick .slick-arrow.prev {
            right: calc(50% + 140px);
            top: 12px;
            left: -15px;
        }

        .footer p {
            font-family: "RockoFLF Regular";
            font-size: 14px;
            color: #242424;
            margin-bottom: 0px;
        }

        .slider {
            -webkit-appearance: none;
            width: 80%;
            height: 3px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        ::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 23px;
            height: 24px;
            border: 0;
            background: url('{{ asset('assets/images/slider.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            object-fit: cover;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 23px;
            height: 24px;
            border: 0;
            background: url('{{ asset('assets/images/slider.png') }}');
            cursor: pointer;
        }

        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
        }

        .suggestionBtn {
            background-color: #E9E9E9 !important;
            font-family: "RockoFLF Regular";
            color: black;
            border: none;
            text-transform: capitalize;
        }

        .suggestionInput {
            background: #F3F3F3 !important;
            border-radius: 5px !important;
        }

        .modal1 {
            max-width: 523px !important;
            top: 62% !important;
            left: 63% !important;
        }

        .modal-open .modal {
            overflow-y: hidden !important;
        }

        .get-started {
            width: 100px !important;
            height: 40px;
            border-radius: 10px;
        }

        h5,
        h6 {
            font-family: "RockoFLF Regular";
        }

        input {
            font-family: "RockoFLF Regular";
        }

        .tools {
            transform: translate3d(-204px, 15px, 0px) !important;
            width: 202px !important;
            position: absolute;
            top: -17px !important;
            left: 0px !important
        }

        .checkoutBtn {
            font-size: 20px;
            font-family: 'RockoFLF Bold';
            line-height: 27px;
            background: #242424;
            width: 100% !important;
            color: white;
            border-radius: 30px;
        }
    </style>
@endpush
@section('content')
    <div class="row" style="background-color: rgba(249, 249, 249, 1); max-height: 100vh;">
        <div class="col-md-12 d-flex justify-content-between">
            <div class="col-md-3"
                style="background-color: #E9E9E9; padding-right: 0px; padding-left: 0px; max-height: 666px; min-height: 666px;overflow-y: auto">
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
                        data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:1,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                        data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">

                        <div class="d-flex justify-content-center align-items-center"
                            style="border: 1px solid black; border-radius: 30px; height: 38px; font-family: RockoFLF Regular; width: 0px; padding: 18px;">
                            <a href="#">Bag</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center"
                            style="border: 1px solid black; border-radius: 30px; height: 38px; font-family: RockoFLF Regular; width: 0px; padding: 18px;">
                            <a href="#">T-shirt</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center"
                            style="border: 1px solid black; border-radius: 30px; height: 38px; font-family: RockoFLF Regular; width: 0px; padding: 18px;">
                            <a href="#">Cap</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center"
                            style="border: 1px solid black; border-radius: 30px; height: 38px; font-family: RockoFLF Regular; width: 0px; padding: 18px;">
                            <a href="#">Mask</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-8 pr-0">
                <div class="row my-3" style="position: absolute;">
                    <img src="{{ asset('assets/images/maxScreen.png') }}" />
                </div>
                <div class="wrapper w-100 h-100 d-flex justify-content-center align-items-center">
                    <div class="file-wrapper d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('assets/images/PlusCircle.svg') }}" />
                        <h2 style="font-family: RockoFLF Regular">Create</h2>
                    </div>
                </div>
                <div class="footer" style="position: absolute; bottom: 52px; right: 0px;">
                    <!-- Small modal -->
                    <button type="button" class="btn btn-primary"
                        style="background: #E9E9E9;
                    border-radius: 10px 10px 0px 0px; border: none; color: black; text-transform: capitalize; font-family: RockoFLF Regular;"
                        data-toggle="modal" data-target="#exampleModal">
                        <img src="{{ asset('assets/images/LightBulbFilament.png') }}" />
                        Your Suggestions
                    </button>
                </div>
                <div class="footer d-flex justify-content-between align-items-center w-100"
                    style="background-color: #F9F9F9; position: absolute; bottom: 0px; height: 52px; min-width: 106%;">
                    <div class="footer-wrapper d-flex justify-content-between align-items-center w-100 mr-3">
                        <div class="row w-100">
                            <div class="col-md-12 d-flex">
                                <div class="col-md-4">
                                    <p>Resize:500 x 500 px</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Click Here For Extented Explore panel</p>
                                </div>
                                <div class="col-md-4 d-flex justify-content-between align-items-center pr-0">
                                    <img src="{{ asset('assets/images/Zoomout.svg') }}" />
                                    <input type="range" min="1" max="100" value="50" class="slider"
                                        id="myRange">
                                    <img src="{{ asset('assets/images/Zoomin.svg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/Question.png') }}" />
                </div>
            </div>
            <div class="col-md-1 d-flex justify-content-center flex-column align-items-center px-0"
                style="max-width: 4.333333%; max-height: 615px;">
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
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="background: none;">
                            <img src="{{ asset('assets/images/customizer/move_on.png') }}" />
                        </button>
                        <ul class="dropdown-menu tools">
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

    {{-- Product Carts Modal --}}
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content"
                style="background: #E9E9E9; filter: drop-shadow(1px 1px 20px rgba(36, 36, 36, 0.15));">
                <div class="row justify-content-center my-4">
                    <div class="col-md-8 mr-3" style="background: white;">
                        <div class="modal-header flex-column">
                            <div class="wrapper w-100 d-flex justify-content-between align-items-center">
                                <h2 class="modal-title mt-0" id="exampleModalLabel" style="font-family: RockoFLF Bold">
                                    Your
                                    Cart</h2>
                                <h6 class="my-0" style="font-family: RockoFLF Regular">Total 1 items</h6>
                            </div>
                            <div class="d-flex" style="width: 70%">
                                <h5 class="my-0">
                                    You can be able to use high resolution images in your
                                    customizer after checking out from here :)
                                </h5>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="wrapper w-100 d-flex justify-content-between align-items-center">
                                <h2 class="modal-title mt-0" id="exampleModalLabel"
                                    style="font-family: RockoFLF Bold; font-size: 28px;">Print Design</h2>
                                <h6 class="my-0" style="font-family: RockoFLF Regular">1 items</h6>
                            </div>
                            <div class="card mb-3" style="max-width: 540px; border: none;">
                                <div class="row no-gutters">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/images/black-tshirt.png') }}" alt="..."
                                            style="max-width: 70%;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-family: RockoFLF Bold;">$25.95</h5>
                                            <h6 class="card-text">Navy blue t-shirt full resolution image Lorem Ipsum,
                                                giving information on its origins </h6>
                                            <h5 class="card-text" style="font-family: RockoFLF Bold;">Colors</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-0" style="background: white;">
                        <div class="modal-header flex-column">
                            <div class="wrapper w-100 d-flex justify-content-between align-items-center">
                                <h2 class="modal-title mt-0" id="exampleModalLabel" style="font-family: RockoFLF Bold">
                                    Total</h2>
                                <h6 class="my-0" style="font-family: RockoFLF Regular">1 items</h6>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="wrapper w-100 d-flex justify-content-between align-items-center">
                                <h4 class="modal-title mt-0" id="exampleModalLabel" style="font-family: RockoFLF Bold;">
                                    Sub-Total:</h4>
                                <h6 class="my-0" style="font-family: RockoFLF Bold">$25.95</h6>
                            </div>
                            <button class="get-started checkoutBtn my-4">Checkout</button>
                            <h5 style="font-family: RockoFLF Bold">We Accept</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- suggestion Modal --}}
    <div class="modal modal1 fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content"
                style="background: #E9E9E9; filter: drop-shadow(1px 1px 20px rgba(36, 36, 36, 0.15)); border-radius: 10px;">
                <div class="m-3" style="background: white; border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="exampleModalLabel" style="font-family: RockoFLF Bold">Let Us
                            Know,
                            How we can help you?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control suggestionInput" rows="4" id="message-text"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="email" value="Nadeem097@gmail.com" class="form-control suggestionInput"
                                    id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark get-started"
                            style="background: #242424;color: white;">Submit</button>
                        <button type="button" class="btn btn-secondary get-started" data-dismiss="modal">Cancel</button>
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

            $('#opencartModal').on('click', () => {
                $('#cartModal').modal('toggle');
            })
        });
    </script>
@endpush
