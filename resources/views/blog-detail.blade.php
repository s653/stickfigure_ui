@extends('layouts.app')
@push('css')
    <style>
        .list-group-item {
            border: none !important;
            background-color: transparent !important;
        }

        .card {
            border: none !important;
            background-color: transparent !important;
        }

        .card-footer i {
            width: 100%;
        }

        .post-footer {
            border: none;
            position: absolute;
            bottom: 0px;
            left: 0px;
            right: 0px;
        }
    </style>
@endpush
@section('content')
    <main style="background-color: #F9F9F9 !important">
        <div class="container px-0" style="background-color: #F3F3F3 !important">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 d-flex justify-content-between align-items-center">
                        <img src="{{ asset('assets/images/ArrowCircleLeft.png') }}" />
                        <h1>Blogs</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 d-flex flex-column justify-content-center">
                        <img src="{{ asset('assets/images/blog_banner.png') }}" />
                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                        <h3>Why is he doing Yoga with wearing
                            Headphone at his head?</h3>
                        <p style="font-family: ui-sans-serif;">It is a long established fact that a reader will be
                            distracted by
                            the readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it
                            has a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here',
                            making it look like readable English. Many desktop publishing packages and web page editors now
                            use
                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites
                            still in their infancy. Various versions have evolved over the years, sometimes by accident,
                            sometimes on purpose (injected humour and the like).<br />

                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                            infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                            purpose
                            (injected humour and the like). It is a long established fact that a reader will be distracted
                            by
                            the readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it
                            has a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here',
                            making it look like readable English. Many desktop publishing packages and web page editors now
                            use
                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites
                            still in their infancy.
                        </p>
                        <h3>Where can I get some?</h3>
                        <p style="font-family: ui-sans-serif;">It is a long established fact that a reader will be
                            distracted by
                            the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                            infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                            purpose
                            (injected humour and the like).</p>

                        <hr>

                        <div class="row">
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6 pl-0">
                                    <div class="col-md-8 d-flex justify-content-between pl-0">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/heart.png') }}" /> 1.5k
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/dislike.png') }}" /> 2k
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/comment.png') }}" /> 2.4k
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/share.png') }}" /> 200
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end pr-0">
                                    <div class="col-md-4 d-flex justify-content-around pr-0">
                                        <a href="">
                                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 41px; height: 41px; border: 1px solid black">
                                                <img style="width: 70%" src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </div>
                                        </a>

                                        <a href="">
                                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 41px; height: 41px; border: 1px solid black">
                                                <img style="width: 70%" src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </div>
                                        </a>
                                        <a href="">
                                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 41px; height: 41px; border: 1px solid black">
                                                <img style="width: 70%"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6 class="mb-0" style="font-family: ui-sans-serif;">Comments (768)</h6>
                            </div>
                        </div>
                        {{-- comment start --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 pl-0">
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item my-3"
                                            style="background-color: #F9F9F9 !important; border-radius: 10px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div
                                                        class="col-md-7 d-flex justify-content-between align-items-center pl-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets/images/comment_avatar.png') }}"
                                                                style="border: 1px solid black; border-radius: 50%;" />
                                                            <h4 class="mx-2"
                                                                style="font-family: system-ui;font-size: 18px; font-weight: 500;">
                                                                Nadeem</h4>
                                                            <span style="color: rgba(36, 36, 36, 0.5);">5h
                                                                ago</span>
                                                        </div>
                                                        <div class="image-container">
                                                            <img class="mr-1"
                                                                src="{{ asset('assets/images/heart_fill.png') }}" /><small>1.5k</small>
                                                        </div>
                                                        <div class="dis-container">
                                                            <img class="mr-1"
                                                                src="{{ asset('assets/images/dislike_fill.png') }}" /><small>1.5k</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                                    <img src="{{ asset('assets/images/DotsThree.png') }}" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 16px; font-family: system-ui; color: black;">
                                                        In publishing and graphic design, Lorem ipsum is
                                                        a placeholder text commonly used to demonstrate
                                                        the visual form a typeface without relying on
                                                        meaningful content. Lorem ipsum may </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item my-3"
                                            style="background-color: #F9F9F9 !important; border-radius: 10px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div
                                                        class="col-md-7 d-flex justify-content-between align-items-center pl-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets/images/comment_avatar.png') }}"
                                                                style="border: 1px solid black; border-radius: 50%;" />
                                                            <h4 class="mx-2"
                                                                style="font-family: system-ui;font-size: 18px; font-weight: 500;">
                                                                Nadeem</h4>
                                                            <span style="color: rgba(36, 36, 36, 0.5);">5h
                                                                ago</span>
                                                        </div>
                                                        <div class="image-container">
                                                            <img class="mr-1"
                                                                src="{{ asset('assets/images/heart_fill.png') }}" /><small>1.5k</small>
                                                        </div>
                                                        <div class="dis-container">
                                                            <img class="mr-1"
                                                                src="{{ asset('assets/images/dislike_fill.png') }}" /><small>1.5k</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                                    <img src="{{ asset('assets/images/DotsThree.png') }}" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 16px; font-family: system-ui; color: black;">
                                                        In publishing and graphic design, Lorem ipsum is
                                                        a placeholder text commonly used to demonstrate
                                                        the visual form a typeface without relying on
                                                        meaningful content. Lorem ipsum may </p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pb-4">
                    <div class="col-md-12 d-flex justify-content-center">
                        <a href="#" style="text-decoration: black;">View all</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h1>Related Blogs</h1>
            </div>
        </div>

        <div class="container">
            <div class="row my-4">
                <div class="col-md-12 d-flex justify-content-between flex-wrap">
                    <div class="card my-2" style="width: 25rem;">
                        <img src="{{ asset('assets/images/blog_banner.png') }}" class="card-img-top" alt="...">
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="row my-2">
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                            <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                            <div class="col-md-12 d-flex justify-content-end pr-0">
                                                <div class="col-md-8 d-flex justify-content-between px-0">
                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_fb.png') }}" />
                                                    </a>

                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_insta.png') }}" />
                                                    </a>
                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_twitter.png') }}" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="card-title">Why is he doing Yoga with wearing
                                            Headphone at his head?</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">
                                            Lorem
                                            Ipsum
                                            is
                                            simply dummy text of the printing and typesetting
                                            industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                            an
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2" style="width: 25rem;">
                        <img src="{{ asset('assets/images/blog_banner2.png') }}" class="card-img-top" alt="...">
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="row my-2">
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                            <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                            <div class="col-md-12 d-flex justify-content-end pr-0">
                                                <div class="col-md-8 d-flex justify-content-between px-0">
                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_fb.png') }}" />
                                                    </a>

                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_insta.png') }}" />
                                                    </a>
                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_twitter.png') }}" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="card-title">Why is he doing Yoga with wearing
                                            Headphone at his head?</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">
                                            Lorem
                                            Ipsum
                                            is
                                            simply dummy text of the printing and typesetting
                                            industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                            an
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2" style="width: 25rem;">
                        <img src="{{ asset('assets/images/blog_banner4.png') }}" class="card-img-top" alt="...">
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="row my-2">
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                            <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                            <div class="col-md-12 d-flex justify-content-end pr-0">
                                                <div class="col-md-8 d-flex justify-content-between px-0">
                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_fb.png') }}" />
                                                    </a>

                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_insta.png') }}" />
                                                    </a>
                                                    <a href="">
                                                        <img src="{{ asset('assets/images/blog_twitter.png') }}" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="card-title">Why is he doing Yoga with wearing
                                            Headphone at his head?</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">
                                            Lorem
                                            Ipsum
                                            is
                                            simply dummy text of the printing and typesetting
                                            industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                            an
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-4">
            <div class="col-md-12 d-flex justify-content-center">
                <button class="get-started">View all</button>
            </div>
        </div>
    </main>
@endsection
