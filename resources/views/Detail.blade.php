@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                    <img src="{{$product['gallery']}}" class="detail_img" alt="">

            </div>

            <div class="col-sm-6">
                <a href="/products">Go back</a>
                <h2>{{$product->name}}</h2>
                <h4>Description:{{$product->description}}</h4>
                <button class="btn btn-danger">{{$product->price}}</h2></button>
                <br><br>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary">Add to cart</button>

                        <button class="btn btn-success">Buy Now</button>
                    </div>

                </div>



            </div>

        </div>


    </div>
@endsection
