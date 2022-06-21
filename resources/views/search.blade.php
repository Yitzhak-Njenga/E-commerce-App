@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @foreach($products as $product)
                    <h2>{{$product->name}}</h2>
                @endforeach
            </div>

        </div>
    </div>
@endsection
