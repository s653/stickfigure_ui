@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3" style="border: none; background-color: transparent;">
            <div class="row justify-content-between">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/product_detail.png') }}" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="container">
                            <div class="row flex-column">
                                <small style="font-family: RockoFLF Regular">Created By:</small>
                                <div class="wrapper d-flex align-items-center">
                                    <img src="{{ asset('assets/images/productDetailVector.png') }}" />
                                    <h6 class="mx-2 my-0" style="font-family: RockoFLF Regular">Parvesh Sinha</h6>
                                </div>
                            </div>
                        </div>
                        <h1 class="card-title mt-0">Stick Mug white / Lavender</h1>
                        <h3 class="card-text" style="font-family: RockoFLF Regular">$ 15.00 </h3>
                        <div class="row no-gutters my-4">
                            <div class="col-md-8 d-flex pr-0">
                                <div class="col-md-4">
                                    <h2 style="font-family: RockoFLF Regular">Quantity</h2>
                                    <select>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                    </select>
                                </div>
                                <div class="col-md-4 text-right">
                                    <h2 style="font-family: RockoFLF Regular">Color</h2>
                                    <input type="radio" />
                                    <input type="radio" />
                                    <input type="radio" />
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <button class="btn btn-dark btn-lg"
                                    style="background: #242424;border-radius: 30px; font-family: RockoFLF Regular; width: 65%;">Add
                                    To Cart</button>
                            </div>
                            <div class="col-md-12 my-3">
                                <button class="btn btn-lg get-started"
                                    style="border-radius: 30px; font-family: RockoFLF Regular; width: 65%;">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
