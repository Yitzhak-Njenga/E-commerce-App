<html>
<head>
    <title>E-Commerce Project</title>
{{--    <link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
{{View::make('layout.header')}}
@yield('content')
{{View::make('layout.footer')}}




</body>
<style>
    .image-slider{
        height: 400px !important;
    }
    .custom-product{
        height: 600px;
    }
    .carousel-caption{
            background-color: rgba(65, 67, 79, 0.38)!important;
            padding: 8px;
    }
    .image-trending{
         height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .detail_img{
        height: 200px;
    }
</style>
</html>
