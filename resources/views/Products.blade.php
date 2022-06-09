@extends('layout.master')
@section("content")

    <style>
        .carousel-control-next-icon,.carousel-control-prev-icon{
            background-color: #bdabab73;
            border-radius: 50%;
        }
    </style>


    <div class="container">


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-target="#myCarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-target="#myCarousel" data-slide-to="1"  class="active" aria-label="Slide 2"></button>
                <button type="button" data-target="#myCarousel" data-slide-to="2" class="active" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach($products as $product)
                <div class="carousel-item active {{$product['id']==1?'active':''}}">
                    <img src="{{$product['gallery']}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>






@endsection

