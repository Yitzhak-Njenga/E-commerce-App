@extends('layout.master')
@section('content')
    @php


        @endphp
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col align-self-start">
                    <h1> Your Order</h1>
                    <table class="table-success">
                        <thead>
                        <tr class="table-success">
                            <th class="table-success" scope="col"></th>
                            <th scope="col"> Total Amount</th>
                        </tr>
                        <tr class="table-success">
                            <th class="table-success" scope="col"></th>
                            <th scope="col">KSH {{$totals}}</th>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col align-self-center">
                    <h3>Lipa na Mpessa</h3>
                </div>
                <div class="col align-self-end">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required
                                   aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Second Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                  required aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" required id="exampleInputEmail1"
                                   aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Location</label>
                            <input type="text" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-dark col-12">Oder Now</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
