@extends('layouts.app')

@section('content')
    <section class="banner py-5">
        <div class="slide-home-04">
            <div class="response-product product-list-owl owl-slick equal-container better-height" id="owl-carousel"
                data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
                data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
                <div class="slide-wrap">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('assets/images/Stick figure logos (1)-01 2.png') }}" />
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row align-items-center my-4">
                            <div class="col-md-4">
                                <h1 class="create_and mb-0">Create And</h1>
                                <h1 class="interact mt-0">interact</h1>
                                <button class="get-started">Get Started</button>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/image-46.png') }}" />
                            </div>
                            <div class="col-md-4 d-flex align-items-center">
                                <h1>Soul new way of living your social life</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-wrap">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('assets/images/Stick figure logos (1)-01 2.png') }}" />
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h1 class="create_and mb-0">Create And</h1>
                                <h1 class="interact mt-0">interact</h1>
                                <button class="get-started">Get Started</button>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/image 46.png') }}" />
                            </div>
                            <div class="col-md-4 d-flex align-items-center">
                                <h1>Soul new way of living your social life</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-wrap">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('assets/images/Stick figure logos (1)-01 2.png') }}" />
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h1 class="create_and mb-0">Create And</h1>
                                <h1 class="interact mt-0">interact</h1>
                                <button class="get-started">Get Started</button>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/image 46.png') }}" />
                            </div>
                            <div class="col-md-4 d-flex align-items-center">
                                <h1>Soul new way of living your social life</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TOP CREATion --}}
    <div>
        <section class="shop-section mt-5" id="shop">
            <div class="container d-flex flex-column justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="pb-5 col-md-6 d-flex flex-column justify-content-center text-center">
                        <h2 class="heading">top creations of the day</h2>
                        <small>
                            Enjoy the top memes of the day designed by the Stick Figures fans!
                        </small>
                    </div>
                </div>

                <div class="row gy-4 justify-content-between">
                    <!-- Single Item -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card h-100" style="background-color: #ECA6BF; width: 391px; height: 357px;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 d-flex my-3">
                                        <img src="{{ asset('assets/images/Vector.png') }}" />
                                        <div class="d-flex align-items-center ml-2">
                                            <h6 class="my-0" style="font-weight: 700;">Martin Cooper</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid mt-4">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/Mask Group.png') }}" alt="card">
                                        </div>
                                        <div class="col-md-12 my-4">
                                            <div class="container-fluid">
                                                <img src="{{ asset('assets/images/Group 712.png') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card h-100" style="background-color: #FFFFFF; width: 391px; height: 357px;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 d-flex my-3">
                                        <img src="{{ asset('assets/images/Vector.png') }}" />
                                        <div class="d-flex align-items-center ml-2">
                                            <h6 class="my-0" style="font-weight: 700;">Martin Cooper</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid mt-4">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/image 1black.png') }}" alt="card">
                                        </div>
                                        <div class="col-md-12 my-4">
                                            <div class="container-fluid">
                                                <img src="{{ asset('assets/images/Group 712.png') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card h-100" style="background-color: #CFF8A6; width: 391px; height: 357px;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 d-flex my-3">
                                        <img src="{{ asset('assets/images/Vector.png') }}" />
                                        <div class="d-flex align-items-center ml-2">
                                            <h6 class="my-0" style="font-weight: 700;">Martin Cooper</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid mt-4">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/top-creation-3.png') }}" alt="card">
                                        </div>
                                        <div class="col-md-12 my-4">
                                            <div class="container-fluid">
                                                <img src="{{ asset('assets/images/Group 712.png') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <button class="get-started">View All</button>
                </div>
            </div>
        </section>
    </div>
    <div>
        <section class="mt-5" style="background-color: #F9F9F9;">
            <div class="container d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="pb-5 col-md-12 text-center">
                        <h2 class="heading">Top Users Of The Day</h2>
                        <small>
                            Let’s applaud our Top Users of the Day for their creativity
                        </small>
                    </div>
                </div>
                <div class="response-product product-list-owl owl-slick equal-container better-height" id="owl-carousel"
                    data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:0,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                    data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
                    <div class="slide-wrap">
                        <div class="card"
                            style="width: 100%; border: none; border-radius: 12px; background-color: black;">
                            <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px;">
                                <div class="row justify-content-center mt-3"
                                    style="margin-left: 0px !important; margin-right: 0px !important;">
                                    <img class="img-fluid img-thumbnail gm-image" style="border: none;"
                                        src="{{ asset('assets/images/Rectangle 33.png') }}" />

                                    <h4 style="margin-bottom: 0px; font-weight: 700">Johnny Den</h4>
                                    <div class="row d-flex mb-3">
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Follower</p>
                                        </div>
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Following</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer d-flex justify-content-center"
                                style="background-color: #242424;border-top-right-radius: 0px;border-top-left-radius: 0px;">
                                <button class="btn btn-primary" style="background-color: #242424; border: none;">View
                                    Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="slide-wrap">
                        <div class="card"
                            style="width: 100%; border: none; border-radius: 12px; background-color: black;">
                            <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px;">
                                <div class="row justify-content-center mt-3"
                                    style="margin-left: 0px !important; margin-right: 0px !important;">
                                    <img class="img-fluid img-thumbnail gm-image" style="border: none;"
                                        src="{{ asset('assets/images/Rectangle 33.png') }}" />

                                    <h4 style="margin-bottom: 0px; font-weight: 700">Martin Cooper</h4>
                                    <div class="row d-flex mb-3">
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Follower</p>
                                        </div>
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Following</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer d-flex justify-content-center"
                                style="background-color: #242424;border-top-right-radius: 0px;border-top-left-radius: 0px;">
                                <button class="btn btn-primary" style="background-color: #242424; border: none;">View
                                    Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="slide-wrap">
                        <div class="card"
                            style="width: 100%; border: none; border-radius: 12px; background-color: black;">
                            <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px;">
                                <div class="row justify-content-center mt-3"
                                    style="margin-left: 0px !important; margin-right: 0px !important;">
                                    <img class="img-fluid img-thumbnail gm-image" style="border: none;"
                                        src="{{ asset('assets/images/Rectangle 33.png') }}" />

                                    <h4 style="margin-bottom: 0px; font-weight: 700">James Blunt</h4>
                                    <div class="row d-flex mb-3">
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Follower</p>
                                        </div>
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Following</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer d-flex justify-content-center"
                                style="background-color: #242424;border-top-right-radius: 0px;border-top-left-radius: 0px;">
                                <button class="btn btn-primary" style="background-color: #242424; border: none;">View
                                    Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="slide-wrap">
                        <div class="card"
                            style="width: 100%; border: none; border-radius: 12px; background-color: black;">
                            <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px;">
                                <div class="row justify-content-center mt-3"
                                    style="margin-left: 0px !important; margin-right: 0px !important;">
                                    <img class="img-fluid img-thumbnail gm-image" style="border: none;"
                                        src="{{ asset('assets/images/Rectangle 33.png') }}" />

                                    <h4 style="margin-bottom: 0px; font-weight: 700">Nicky Shed</h4>
                                    <div class="row d-flex mb-3">
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Follower</p>
                                        </div>
                                        <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                            <span>745</span>
                                            <p style="margin:0px;font-weight: 700;font-size:10px;">Following</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer d-flex justify-content-center"
                                style="background-color: #242424;border-top-right-radius: 0px;border-top-left-radius: 0px;">
                                <button class="btn btn-primary" style="background-color: #242424; border: none;">View
                                    Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="slide-wrap">
                        <div class="card"
                            style="width: 100%; border: none; border-radius: 12px; background-color: black;">
                            <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px;">
                                <div class="row justify-content-center mt-3"
                                    style="margin-left: 0px !important; margin-right: 0px !important;">
                                    <img class="img-fluid img-thumbnail gm-image" style="border: none;"
                                        src="{{ asset('assets/images/Rectangle 41.png') }}" />

                                    <h4 style="margin-bottom: 0px; font-weight: 700">Natasha Bassett</h4>
                                    <div class="row mb-3">
                                        <div class="col-md-12 d-flex">
                                            <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                                <span>745</span>
                                                <p style="margin:0px;font-weight: 700;font-size:10px;">Follower</p>
                                            </div>
                                            <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                                <span>745</span>
                                                <p style="margin:0px;font-weight: 700;font-size:10px;">Following</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer d-flex justify-content-center"
                                style="background-color: #242424;border-top-right-radius: 0px;border-top-left-radius: 0px;">
                                <button class="btn btn-primary" style="background-color: #242424; border: none;">View
                                    Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="slide-wrap">
                        <div class="card"
                            style="width: 100%; border: none; border-radius: 12px; background-color: black;">
                            <div class="card-body" style="background-color: #FFFFFF; border-radius: 10px;">
                                <div class="row justify-content-center mt-3"
                                    style="margin-left: 0px !important; margin-right: 0px !important;">
                                    <img class="img-fluid img-thumbnail gm-image" style="border: none;"
                                        src="{{ asset('assets/images/Rectangle 41.png') }}" />

                                    <h4 style="margin-bottom: 0px; font-weight: 700">Natasha Bassett</h4>
                                    <div class="row mb-3">
                                        <div class="col-md-12 d-flex">
                                            <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                                <span>745</span>
                                                <p style="margin:0px;font-weight: 700;font-size:10px;">Follower</p>
                                            </div>
                                            <div class="col-md-6 d-flex flex-column align-items-center text-center">
                                                <span>745</span>
                                                <p style="margin:0px;font-weight: 700;font-size:10px;">Following</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer d-flex justify-content-center"
                                style="background-color: #242424;border-top-right-radius: 0px;border-top-left-radius: 0px;">
                                <button class="btn btn-primary" style="background-color: #242424; border: none;">View
                                    Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-center mt-4">
                    <p>P.s. You can be our next user of the day!! All you have to do is to pick, stick, print and share!</p>
                </div>
                <div class="row justify-content-center mb-4">
                    <button class="get-started">View All</button>
                </div>
            </div>
        </section>
    </div>
    <div>
        <section class="collection-section py-5" style="background-color: #EDEDED;">
            <div class="container d-flex flex-column justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="pb-5 col-md-12 d-flex flex-column justify-content-center text-center">
                        <h2 class="heading">We’ve Got A Collection Ready For You!</h2>
                        <p>
                            Too tired to design something out-of-the-box?? Well, we’ve got you covered with our pre-made
                            products! From t-shirts and caps to mugs and masks, we have a unique treasure that you can pick
                            from! So, what are you waiting for???
                        </p>
                    </div>
                </div>

                <div class="row gy-4 justify-content-around">
                    <!-- Single Item -->
                    <div class="col-sm-12 col-md-6 col-lg-5 d-flex justify-content-center align-items-center card collection"
                        style="background-image: url('{{ asset('assets/images/official-products (1).png') }}')">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5 d-flex justify-content-center align-items-center card collection"
                        style="background-image: url('{{ asset('assets/images/user-made-products.png') }}')">
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <h1 style="text-transform: uppercase; text-align: center;">official products</h1>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <h1 style="text-transform: uppercase; text-align: center;">user made products</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div>
        <section class="collection-section py-5">
            <div class="container d-flex flex-column justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="pb-5 col-md-12 d-flex flex-column justify-content-center text-center">
                        <h2 class="heading">Top Products Of The Day!</h2>
                        <p style="margin-bottom: 0px !important;">
                            Let’s applaud our Top Users of the Day for their creativity!
                        </p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                            data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:0,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                            data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
                            {{-- <div class="container"> --}}
                            <div class="slide-wrap">
                                <div class="product-card" style="position: relative;">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3">
                                        <h4>White Tshirt</h4>
                                        <p>$25.00</p>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="{{ asset('assets/images/cup.png') }}" />
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3"
                                        style="position: absolute; bottom: 0px;">
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Customize</a>
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-cart-plus"
                                                aria-hidden="true"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap">
                                <div class="product-card" style="position: relative;">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3">
                                        <h4>White Tshirt</h4>
                                        <p>$25.00</p>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="{{ asset('assets/images/t-shirt.png') }}" />
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3"
                                        style="position: absolute; bottom: 0px;">
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Customize</a>
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-cart-plus"
                                                aria-hidden="true"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap">
                                <div class="product-card" style="position: relative;">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3">
                                        <h4>White Tshirt</h4>
                                        <p>$25.00</p>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="{{ asset('assets/images/cap.png') }}" />
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3"
                                        style="position: absolute; bottom: 0px;">
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Customize</a>
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-cart-plus"
                                                aria-hidden="true"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap">
                                <div class="product-card" style="position: relative;">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3">
                                        <h4>White Tshirt</h4>
                                        <p>$25.00</p>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="{{ asset('assets/images/mask.png') }}" />
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3"
                                        style="position: absolute; bottom: 0px;">
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Customize</a>
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-cart-plus"
                                                aria-hidden="true"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap">
                                <div class="product-card" style="position: relative;">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3">
                                        <h4>White Tshirt</h4>
                                        <p>$25.00</p>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="{{ asset('assets/images/mask.png') }}" />
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3"
                                        style="position: absolute; bottom: 0px;">
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>Customize</a>
                                        <a href="#" style="text-decoration: underline;"><i class="fa fa-cart-plus"
                                                aria-hidden="true"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="row justify-content-center my-4">
                        <button class="get-started">Shop Now</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <section style="height: auto; position: relative;">
            <div class="d-flex flex-column justify-content-center">
                <div class="row" style="position: absolute; top: 60px; width: 100%;">
                    <div class="pb-5 col-md-12 text-center">
                        <h1 class="heading">Upcoming Events</h1>
                        <p>
                            Don’t miss out on our upcoming events and competitions! Stay updated with our events section.
                        </p>
                        <button class="get-started">Shop Now</button>
                        <div class="black_friday" style="width:100%; position: absolute; bottom: -153px;0">
                            <h1
                                style="
                            font-family: 'Brittany Signature';
                            font-style: normal;
                            font-weight: 400;
                            font-size: 80px;
                            line-height: 84.1%;
                        ">
                                Black Friday</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('assets/images/black_friday.png') }}" class="w-100" />
                </div>
            </div>
        </section>

        <section class="what-we-do-section-section" style="background: rgba(243, 243, 243, 1);">
            <div class="container">
                <div class="row ">
                    <div class="pb-5 col-md-12 text-center">
                        <h2>OUR BLOGS</h2>
                        <small>
                            Enjoy some creative writing pieces written by the Stick Figures team. Happy Reading!
                        </small>
                    </div>
                </div>
                <div class="row gy-4">
                    <!-- Single Item -->
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-radius: 10px;">
                        <div class="card h-100">
                            <div class="card-img-holder">
                                <img src="{{ asset('assets/images/Rectangle 52.png') }}" class="card-img-top img-fluid"
                                    alt="card">
                            </div>

                            <div class="card-body text-white" style="background-color: black;">
                                <div class="container my-3">
                                    <h4 class="card-title" style="color: rgba(255, 255, 255, 1)">
                                        Why is he doing Yoga with wearing
                                        Headphone at his head?</h4>
                                    <p class="card-text" style="color: #363636;">
                                        Enjoy some creative writing pieces written by the Stick Figures team. Happy
                                        Reference site about Lorem Ipsum, giving information on.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-radius: 10px;">
                        <div class="card h-100">
                            <div class="card-img-holder">
                                <img src="{{ asset('assets/images/image 2.png') }}" class="card-img-top img-fluid"
                                    alt="card">
                            </div>

                            <div class="card-body text-white" style="background-color: black;">
                                <div class="container my-3">
                                    <h4 class="card-title" style="color: rgba(255, 255, 255, 1)">
                                        Why is he doing Yoga with wearing
                                        Headphone at his head?</h4>
                                    <p class="card-text" style="color: #363636;">
                                        Enjoy some creative writing pieces written by the Stick Figures team. Happy
                                        Reference site about Lorem Ipsum, giving information on.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-radius: 10px;">
                        <div class="card h-100">
                            <div class="card-img-holder">
                                <img src="{{ asset('assets/images/Rectangle 51.png') }}" class="card-img-top img-fluid"
                                    alt="card">
                            </div>

                            <div class="card-body text-white" style="background-color: black;">
                                <div class="container my-3">
                                    <h4 class="card-title" style="color: rgba(255, 255, 255, 1)">
                                        Stickman Having 5 stars for there
                                        Services</h4>
                                    <p class="card-text" style="color: #363636;">
                                        Enjoy some creative writing pieces written by the Stick Figures team. Happy
                                        Reference site about Lorem..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center my-5">
                    <button class="get-started">View all</button>
                </div>
            </div>
        </section>
@endsection


@section('js')
    <script>
        $('.top-users').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    </script>
@endsection
