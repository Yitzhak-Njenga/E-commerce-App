@extends('layout.master')
@section('content')

    <div class="d-flex justify-content-center login">
        <form method="post" action="{{'/registerUser'}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>


            <button type="submit" class="btn btn-primary col-12">Register</button>
            <br>
        </form>



    </div>

@endsection

<style>
    .login{
        height:600px;
        padding-top: 100px;
    }
</style>
