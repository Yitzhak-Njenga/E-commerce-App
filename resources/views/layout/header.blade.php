<?php
use App\Http\Controllers\ProductController;
Use Illuminate\Support\Facades\Session;
$totalCount = 0;
if (Session::has('user')){
    $totalCount = ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Ecommerc App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Cart({{$totalCount}})</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Cart({{$totalCount}})</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Order</a>
                </li>



            <form action="/search" method="post" class="d-flex">
                @csrf
                <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

                @if(Session::has('user'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Session::get('user')['name']}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>

                        </ul>
                    </li>
                @else
                    <li><a href="/login"></a> </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
