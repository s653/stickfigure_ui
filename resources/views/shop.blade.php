@extends('layouts.app')

@push('css')
    <style>
        .card {
            max-width: 289px;
            max-height: 324px;
            height: 100%;
            width: 100%;
            border: none;
            background-color: rgba(233, 233, 233, 1);
        }

        .card-header,
        .card-footer {
            border: none;
            padding: 0.25rem 0.75rem;
        }
    </style>
@endpush
@section('content')
    <div class="container mb-4 py-4">
        <div class="row my-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h1 style="text-transform: uppercase; font-weight: 700;">User Made Products</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-between my-4">
            <div class="col-md-6">
                <p>Showing Results 1 - 9 of 13 Results</p>
            </div>
            <div class="col-md-6 d-flex justify-content-end" style="position: relative;">
                <input type="text" placeholder="Search your products"
                    style="border-radius: 0px; border: none;border-bottom: 1px solid #242424;" />
                <img src="{{ asset('assets/images/search.png') }}" style="position: absolute;bottom: 20px;" />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-9 d-flex flex-wrap px-0">
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/t-shirt.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/cup.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/mask.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/cap.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/black-tshirt.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/t-shirt.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/cup.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/mask.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/cap.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>White Tshirt</h5>
                        <p class="mb-0"><small>$</small> 25.99</p>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/black-tshirt.png') }}" />
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="d-flex justify-content-around align-items-end" href="#">
                                    <img src="{{ asset('assets/images/avatar1.png') }}" />
                                    <p class="mb-0">Martin B..</p>
                                </a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="#">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 296px; height: 199px;">
                    <div class="card-header">
                        <h4>Filter By Price</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input class="w-100" type="range" id="price" name="range" value="250"
                                min="10" max="500" list="sliderslist" />
                            <datalist id="sliderslist">
                                <option value="0" label="$10">$10</option>
                                <option value="250" label="$250">$250</option>
                                <option value="500" label="$500">$500</option>
                            </datalist>
                        </div>
                    </div>
                    <div class="card-footer">
                        <h4>Filter By Products</h4>
                        <div class="form-group d-flex justify-content-between">
                            <div>
                                <input type="radio" id="cup" name="filter" value="cup" />
                                <label for="cup">Cup</label>
                            </div>
                            <div>
                                <input type="radio" id="mug" name="filter" value="mug">
                                <label for="mug">Mug</label>
                            </div>
                            <div>
                                <input type="radio" id="tshirt" name="filter" value="tshirt">
                                <label for="tshirt">Tshirt</label>
                            </div>
                            <div>
                                <input type="radio" id="mask" name="filter" value="mask">
                                <label for="mask">Mask</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
