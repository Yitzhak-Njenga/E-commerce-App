@extends('layout.master')
@section("content")

    <style>
        .carousel-control-next-icon, .carousel-control-prev-icon {
            background-color: #bdabab73;
            border-radius: 50%;
        }
    </style>


    <div class="container">


        <div id="myCarousel" class="carousel slide custom-product" data-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-target="#myCarousel" data-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                <button type="button" data-target="#myCarousel" data-slide-to="1" class="active"
                        aria-label="Slide 2"></button>
                <button type="button" data-target="#myCarousel" data-slide-to="2" class="active"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach($products as $product)
                    <div class="carousel-item{{$product['id']==1?'active':''}}">
                        <a href="products/details/{{$product['id']}}">
                            <img class="image-slider"
                                 src="{{$product['gallery']}}">
                            <div class="carousel-caption">
                                <h5>{{$product['name']}}</h5>
                                <p>{{$product['description']}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>


            <div class="trending-wrapper">
                <h3 style="text-align: center">Trending Products</h3>
                @foreach($products as $product)
                    <div class="trending-item"><a href="products/details/{{$product['id']}}">
                            <img class="image-trending" src="{{$product['gallery']}}">
                            <div class="">
                                <h5>{{$product['name']}}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
