@extends('layout.master')
@section('content')
    <div class="">
        <div class="">
            <div class="container">
                <h4 class="text-center btn-outline-danger">My Orders</h4>
{{--                <a href="odernow" class="btn btn-outline-danger justify-content-end">Order Now</a><br>--}}

            </div>

            @foreach($orders as $order)

                <div class="container">
                    <hr>
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col">
                            <a href="/products/details/{{$order->id}}">
                                <img class="image-trending" src="{{$order->gallery}}">

                            </a>
                        </div>
                        <div class="col">
                            <h3>{{$order->name}}</h3>
                        </div>
                        <div class="col">
                            <h5 class="form-text">Name: {{$order->first_name}} {{$order->second_name}}</h5>
                            <h5 class="form-text">Payment Status: {{$order->payment_status}}</h5>
                            <h5 class="form-text">Location: {{$order->location}}</h5>
                        </div>



                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection
