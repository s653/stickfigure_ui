@extends('layouts.app')

@section('content')
    <div class="container px-0">
        <div class="row">
            <div class="col-md-12">
                <h1>Blogs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="col-md-6 pl-0">
                    <img src="{{ asset('assets/images/blog_banner.png') }}" />
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="col-md-12 px-0">
                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                        <h3>Why is he doing Yoga with wearing
                            Headphone at his head?</h3>
                        <p style="font-family: ui-sans-serif;">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book

                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in... Read More</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12 d-flex justify-content-between flex-wrap">
                <div class="card my-2" style="width: 25rem;">
                    <a href="/blog-detail">
                        <img src="{{ asset('assets/images/blog_banner.png') }}" class="card-img-top" alt="...">
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="row my-2">
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                            <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                            <div class="col-md-12 d-flex justify-content-around pr-0">
                                                <a href="">
                                                    <img class="rounded-circle" style="border: 1px solid black"
                                                        src="{{ asset('assets/images/blog_fb.png') }}" />
                                                </a>

                                                <a href="">
                                                    <img class="rounded-circle" style="border: 1px solid black"
                                                        src="{{ asset('assets/images/blog_insta.png') }}" />
                                                </a>
                                                <a href="">
                                                    <img class="rounded-circle" style="border: 1px solid black"
                                                        src="{{ asset('assets/images/blog_twitter.png') }}" />
                                                </a>
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
                                        <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem
                                            Ipsum is
                                            simply dummy text of the printing and typesetting
                                            industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card my-2" style="width: 25rem;">
                    <img src="{{ asset('assets/images/blog_banner1.png') }}" class="card-img-top" alt="...">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
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
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum
                                        is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
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
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum
                                        is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-2" style="width: 25rem;">
                    <img src="{{ asset('assets/images/blog_banner5.png') }}" class="card-img-top" alt="...">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum
                                        is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-2" style="width: 25rem;">
                    <img src="{{ asset('assets/images/blog_banner6.png') }}" class="card-img-top" alt="...">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum
                                        is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-2" style="width: 25rem;">
                    <img src="{{ asset('assets/images/blog_banner6.png') }}" class="card-img-top" alt="...">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum
                                        is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-2" style="width: 25rem;">
                    <img src="{{ asset('assets/images/blog_banner7.png') }}" class="card-img-top" alt="...">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum
                                        is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-2" style="width: 25rem;">
                    <img src="{{ asset('assets/images/blog_banner8.png') }}" class="card-img-top" alt="...">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div class="col-md-6 pl-0" style="padding-left: 10px;">
                                        <h6 class="mb-0" style="font-family: ui-sans-serif;">27/07/2022</h6>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center pr-0">
                                        <div class="col-md-12 d-flex justify-content-around pr-0">
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_fb.png') }}" />
                                            </a>

                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_insta.png') }}" />
                                            </a>
                                            <a href="">
                                                <img class="rounded-circle" style="border: 1px solid black"
                                                    src="{{ asset('assets/images/blog_twitter.png') }}" />
                                            </a>
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
                                    <p class="card-text" style="font-size: 16px; font-family: ui-sans-serif;">Lorem Ipsum
                                        is
                                        simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12 d-flex justify-content-center">
                <button class="get-started">View More</button>
            </div>
        </div>
    </div>
@endsection
