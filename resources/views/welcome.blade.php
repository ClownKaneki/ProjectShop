@extends('layouts.base')
@section('content')
    <!-- Main -->
    <main>
        <section class="section feature">
            <div class="feature-center container">
                <div class="feature-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                                Secure <br />
                                Payment
                            </h2>
                        </div>
                    </div>
                    <img src="{{ asset('img/secure icon.png') }} " alt=" ">
                </div>
                <div class="feature-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                                Worldwide <br />
                                Shipment
                            </h2>
                        </div>
                    </div>
                    <img src="{{ asset('img/worldwide.png') }} " alt=" ">
                </div>
                <div class="feature-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                                30 days <br />
                                Refund
                            </h2>
                        </div>
                    </div>
                    <img src="{{ asset('img/refund.jpg') }} " alt=" ">
                </div>
                <div class="feature-box">
                    <div class="dotted">
                        <div class="content">
                            <h2>
                                Fast <br />
                                Delivery
                            </h2>
                        </div>
                    </div>
                    <img src="{{ asset('img/fastdelivery.png') }} " alt=" ">
                </div>
            </div>
        </section>

        <!-- Top Selling -->

        <section class="section topsell">
            <div class="top-sell">
                <h2><span>Our Products</span></h2>
            </div>

            <div class="row container justify-content-center mx-auto">
                @foreach ($products as $product)
                    <div class="col-md-4 col-12 mt-5">
                        <div class="">
                            <div class="product">
                                <div class="product-header">
                                    <img src="{{ asset('img/' . $product->image_path) }} " style="border-radius: 1rem;"
                                        alt="" />
                                    @livewire('button-cart', ['product' => $product], key($product->id))
                                </div>
                                <div class="product-footer d-flex flex-column justify-content-center align-items-center">
                                    <a href="#">
                                        <h3>{{ $product->name }}</h3>
                                    </a>

                                    <div class="rating">
                                        @for ($i = 1; $i <= $product->rating; $i++)
                                            <i class="bx bxs-star"> </i>
                                        @endfor
                                    </div>
                                    <h4 class="price">{{ $product->price }}$</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
