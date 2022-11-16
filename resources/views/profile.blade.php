@extends('layouts.app')

@push('css')
    <style>
        .list-group-item {
            border: none !important;
            background-color: transparent !important;
        }

        .card {
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
    <main style="background-color: rgba(249, 249, 249, 1)">
        <div class="row">
            <div class="col-md-12" style="position: relative">
                <img class="w-100" src="{{ asset('assets/images/cover_photo.png') }}" />
                <img src="{{ asset('assets/images/edit_cover.png') }}" style="position: absolute;top: 30px;right: 104px;" />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-3 py-3" style="position: relative; top: -111px;">
                    <div class="col-md-12" style="background-color: #F3F3F3 !important; border-radius: 10px;">
                        <div class="row">
                            <div class="card w-100" style="border: none;">
                                <div class="card-body text-center">
                                    <div class="image-container d-flex justify-content-center" style="position: relative;">
                                        <img class="d-flex justify-content-center mt-4"
                                            src="{{ asset('assets/images/profile_pic.png') }}" style="width: 50%;" />
                                        <img class="d-flex justify-content-center"
                                            src="{{ asset('assets/images/choose_image.png') }}"
                                            style="position: absolute;top: 115px;right: 89px;" />
                                    </div>
                                    <div class="container">
                                        <h1 style="font-size: 34px; font-weight: 700; text-center">Nadeem khattak</h1>
                                        <h6 style="font-size: 16px; font-family: system-ui;">Hi, I am Nadeem, The Biotechnology Innovation
                                            Organization is he largest advocacy association
                                            in the world representing.</h6>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center"
                                        style="padding: 0.5rem 1.25rem;">
                                        <div class="user-container" style="font-weight: 500;">
                                            <h5 style="font-weight: 700"> Date of Birth:</h5>
                                        </div>
                                        <div class="rounded-circle d-flex align-items-center" style="max-width: 50%;">
                                            <h5 style="font-family: system-ui">13/04/1990</h5>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center"
                                        style="padding: 0.5rem 1.25rem;">
                                        <div class="user-container" style="font-weight: 500;">
                                            <h5 style="font-weight: 700">Likes:</h5>
                                        </div>
                                        <div class="rounded-circle d-flex align-items-center" style="max-width: 50%;">
                                            <h5 style="font-family: system-ui">346</h5>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center"
                                        style="padding: 0.5rem 1.25rem;">
                                        <div class="user-container" style="font-weight: 500;">
                                            <h5 style="font-weight: 700">Shares:</h5>
                                        </div>
                                        <div class="rounded-circle d-flex align-items-center" style="max-width: 50%;">
                                            <h5 style="font-family: system-ui">5788</h5>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center"
                                        style="padding: 0.5rem 1.25rem;">
                                        <div class="user-container" style="font-weight: 500;">
                                            <h5 style="font-weight: 700">Hobbies:</h5>
                                        </div>
                                        <div class="rounded-circle d-flex align-items-center text-right"
                                            style="max-width: 50%; font-weight: 100">
                                            <h5 style="font-family: system-ui">Playing BasketBall,
                                                Creating Memes</h5>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center"
                                        style="padding: 0.5rem 1.25rem;">
                                        <div class="user-container" style="font-weight: 500;">
                                            <h5 style="font-weight: 700">Lives In:</h5>
                                        </div>
                                        <div class="rounded-circle d-flex align-items-center text-right" style="max-width: 50%;">
                                            <h5 style="font-family: system-ui">California, United States</h5>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center"
                                        style="padding: 0.5rem 1.25rem;">
                                        <div class="user-container" style="font-weight: 500;">
                                            <h5 style="font-weight: 700">Language</h5>
                                        </div>
                                        <div class="rounded-circle d-flex align-items-center" style="max-width: 50%;">
                                            <h5 style="font-family: system-ui">English</h5>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                <div class="container py-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card" style="background-color: white !important;">
                                                <div class="card-title text-center">
                                                    <h4 style="font-weight: 700">Social Media Handle(s)</h4>
                                                </div>
                                                <div class="card-body d-flex justify-content-center">
                                                    <ul class="list-group list-group-flush d-flex flex-row">
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                            <img src="{{ asset('assets/images/facebook.png') }}" />
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                            <img src="{{ asset('assets/images/instagram.png') }}" />
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                            <img src="{{ asset('assets/images/twitter.png') }}" />
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
                    <div class="container my-3 py-3" style="background-color: #F3F3F3 !important; border-radius: 10px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" style="border: none !important;">
                                    <div class="card-title">
                                        <h4 style="font-weight: 700; margin-bottom: 0px;">Payment Method</h4>
                                    </div>
                                    <div class="card-body d-flex justify-content-center">
                                        <ul class="list-group list-group-flush d-flex flex-row">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <img src="{{ asset('assets/images/card-02.png') }}" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container my-3 py-3" style="background-color: #F3F3F3 !important; border-radius: 10px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" style="border: none !important;">
                                    <div class="card-title">
                                        <h4 style="font-weight: 700; margin-bottom: 0px;">Delivery Option</h4>
                                    </div>
                                    <div class="card-body d-flex justify-content-center">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                                style="border: 1px solid #A3A3A3 !important; border-radius: 10px;">
                                                <h5 style="font-family: system-ui">#534, Silver Street, New york City,
                                                    Lorem Ipsum, 112987</h5>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center mt-2"
                                                style="border: 1px solid #A3A3A3 !important; border-radius: 10px;">
                                                <h5 style="font-family: system-ui">#534, Silver Street, New york City,
                                                    Lorem Ipsum, 112987</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" style="padding-left: 0px;">
                    <div class="row mt-3">
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="col-md-4 d-flex align-items-center pl-0">
                                <img class="mr-2" src="{{ asset('assets/images/online-toggle.png') }}" />
                                <p style="margin-bottom: 0px;">Online </p>
                            </div>
                            <div class="col-md-8 d-flex justify-content-between align-items-center">
                                <h5 style="font-family: system-ui;"><b>48</b> Followers</h5>
                                <h5 style="font-family: system-ui;"><b>448</b> Following</h5>
                                <h5 style="font-family: system-ui;"><b>4</b> Creation</h5>
                                <h5 style="font-family: system-ui;"><b>9</b> Products</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card my-3">
                                <div class="card-body">
                                    <textarea placeholder="Share something" rows="4" style="background-color: rgba(233, 233, 233, 1);"></textarea>
                                </div>
                                <div class="card-footer" style="background-color: rgba(233, 233, 233, 1) !important;">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-between">
                                            <div class="col-md-3 d-flex justify-content-between align-items-center pl-0">
                                                <img src="{{ asset('assets/images/PlusCircle.png') }}" />
                                                <img src="{{ asset('assets/images/At.png') }}" />
                                                <img src="{{ asset('assets/images/ImageSquare.png') }}" />
                                                <img src="{{ asset('assets/images/Tag.png') }}" />
                                            </div>
                                            <div class="col-md-1 d-flex align-items-center">
                                                <img src="{{ asset('assets/images/PaperPlaneTilt.png') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="background-color: #F3F3F3 !important;">
                                <div class="card-title">
                                    <div class="container">
                                        <h1 class="text-uppercase mb-0" style="font-size: 28px; font-weight: 700">Posts
                                        </h1>
                                    </div>
                                </div>
                                <div class="container pb-3">
                                    <div class="card-body"
                                        style="background-color: #E9E9E9 !important; border-radius: 10px;">
                                        <div class="container pb-3">
                                            <div class="row pt-3">
                                                <div class="col-md-1 d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/vector.png') }}" />
                                                </div>
                                                <div class="col-md-4 d-flex align-items-center p-0">
                                                    <h5 class="card-title mr-2">Martin Cooper </h5>
                                                    <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 p-0">
                                                        <p style="font-size: 16px; font-family: system-ui; color: black;">
                                                            In publishing and graphic design, Lorem ipsum is a
                                                            placeholder text commonly used to demonstrate the visual
                                                            document or a typeface without relying on meaningful content.
                                                            Lorem
                                                            ipsum may be used as a placeholder...See More</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container pb-3">
                                                <div class="row">
                                                    <div class="card" style="min-width: 50%; position: relative;">
                                                        <div class="card-body">
                                                            <img class="card-img-bottom"
                                                                src="{{ asset('assets/images/black-tshirt.png') }}"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-footer post-footer"
                                                            style="border: none;">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-12 d-flex justify-content-between align-items-center">
                                                                    <p class="px-3"
                                                                        style="margin-bottom: 0px; background-color: #D9D9D9; border-radius: 10px;">
                                                                        $23.99</p>
                                                                    <button class="get-started bg-light"
                                                                        style="width: 93px; height: 42px;">Buy it</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 d-flex justify-content-between my-2 pl-0">
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
                                                <div class="row">
                                                    <div class="col-md-12 pl-0" style="position: relative;">
                                                        <input type="text" placeholder="Add your comment"
                                                            style="width: 100%; background-color: #F6F6F6" />
                                                        <img src="{{ asset('assets/images/PaperPlaneTilt.png') }}"
                                                            style="position: absolute; top: 6px; right: 34px;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container pb-3">
                                    <div class="card-body"
                                        style="background-color: #E9E9E9 !important; border-radius: 10px;">
                                        <div class="container">
                                            <div class="row pt-3">
                                                <div class="col-md-1 d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/vector.png') }}" />
                                                </div>
                                                <div class="col-md-4 d-flex align-items-center p-0">
                                                    <h5 class="card-title mr-2">Martin Cooper </h5>
                                                    <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 p-0">
                                                        <p style="font-size: 16px; font-family: system-ui; color: black;">
                                                            In publishing and graphic design, Lorem ipsum is a
                                                            placeholder text commonly used to demonstrate the visual
                                                            document or a typeface without relying on meaningful content.
                                                            Lorem
                                                            ipsum may be used as a placeholder...See More</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container my-3">
                                                <div class="row">
                                                    <div class="card" style="min-width: 50%;">
                                                        <div class="card-body">
                                                            <img class="card-img-bottom"
                                                                src="{{ asset('assets/images/image 3.png') }}"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-footer post-footer" style="border: none;">
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
                                                    <div class="col-md-5 d-flex justify-content-between my-2 pl-0">
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

                                                {{-- comment start --}}
                                                <div class="row">
                                                    <div class="col-md-12 pl-0" style="position: relative;">
                                                        <input type="text" placeholder="Add your comment"
                                                            style="width: 100%; background-color: #F6F6F6" />
                                                        <img src="{{ asset('assets/images/PaperPlaneTilt.png') }}"
                                                            style="position: absolute; top: 6px; right: 34px;" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 pl-0">
                                                        <ul class="list-group list-group-flush mb-3">
                                                            <li class="list-group-item my-3"
                                                                style="background-color: #F9F9F9 !important; border-radius: 10px;">
                                                                <div class="row">
                                                                    <div
                                                                        class="col-md-6 d-flex justify-content-around align-items-center pl-0">
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
                                                                    <div
                                                                        class="col-md-6 d-flex justify-content-end align-items-center">
                                                                        <img
                                                                            src="{{ asset('assets/images/DotsThree.png') }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p
                                                                            style="font-size: 16px; font-family: system-ui; color: black;">
                                                                            In publishing and graphic design, Lorem ipsum is
                                                                            a placeholder text commonly used to demonstrate
                                                                            the visual form a typeface without relying on
                                                                            meaningful content. Lorem ipsum may </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item"
                                                                style="background-color: #F9F9F9 !important; border-radius: 10px;">
                                                                <div class="row">
                                                                    <div
                                                                        class="col-md-6 d-flex justify-content-around align-items-center pl-0">
                                                                        <div class="d-flex align-items-center">
                                                                            <img src="{{ asset('assets/images/comment_avatar.png') }}"
                                                                                style="border: 1px solid black; border-radius: 50%;" />
                                                                            <h4 class="mx-2"
                                                                                style="font-family: system-ui;font-size: 18px; font-weight: 500;">
                                                                                Sahil Sood</h4>
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
                                                                    <div
                                                                        class="col-md-6 d-flex justify-content-end align-items-center">
                                                                        <img
                                                                            src="{{ asset('assets/images/DotsThree.png') }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p
                                                                            style="font-size: 16px; font-family: system-ui; color: black;">
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
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button class="get-started">View More </button>
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
