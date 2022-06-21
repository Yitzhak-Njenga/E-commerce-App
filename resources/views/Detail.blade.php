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
                        <form action="/add_to_cart" method="post">
                            @csrf
                            <input hidden type="text" name="product_id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-primary">Add to cart</button>
                            <button  type="button" class="btn btn-success">Buy Now</button>
                        </form>


                    </div>

                </div>



            </div>

        </div>


    </div>
@endsection
