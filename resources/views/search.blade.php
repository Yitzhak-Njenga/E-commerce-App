@extends('layout.master')
@section('content')
    <div class="container">
        <div class="trending-wrapper">
            <h3 style="text-align: center">Trending Products</h3>
            @foreach($products as $product)
                <div class="trending-item"><a href="products/details/{{$product->id}}">
                        <img class="image-trending" src="{{$product->gallery }}">
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
