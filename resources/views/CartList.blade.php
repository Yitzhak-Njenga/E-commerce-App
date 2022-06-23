@extends('layout.master')
@section('content')
   <div class="">
           <div class="">
               <h4>Cart List</h4>
               @foreach($products as $product)

                   <div class="container">
                       <hr>
                       <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                           <div class="col">
                               <a href="/products/details/{{$product->id}}">
                                   <img class="image-trending" src="{{$product->gallery}}">

                               </a>
                           </div>
                           <div class="col">
                               <h3>{{$product->name}}</h3>
                           </div>
                           <div class="col">
                               <h5>{{$product->description}}</h5>
                           </div>
                           <div class="col">
                               <h5>{{$product->price}}</h5>
                           </div>
                           <div class="col">
                               <a href="/removecart/{{$product->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                           </div>

                       </div>
                   </div>

               @endforeach

       </div>
   </div>
@endsection
