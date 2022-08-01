<!DOCTYPE html>
<html lang="en">

<head>
    <title>post like comment management system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-grid.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #F5F8FA;
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            margin: 0;
            font-weight: 300;
            line-height: 1.6;
            color: #212529;
            text-align: left;
        }

        .banner {
            background-image: url(img/banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 500px;

        }

        .banner-title {
            transform: translateY(150px)
        }

        .banner-end {
            transform: translateY(280px)
        }

        .thumnail {
            width: 257px;
            height: 257px;
        }

        .hover-media:hover {
            background-color: #F5F8FA;
        }

        /*--------------------------Grid template starts design for image gallery-----------------*/


        .grid-template {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-auto-rows: minmax(250px, auto);
            grid-gap: 10px;
        }

        .item-1 {
            grid-column: 1 / 3;
            grid-row: 1 / 2;

        }

        .item-7 {
            grid-column: 2 / 4;
            grid-row: 2 / 3;


        }

        .item-9 {
            grid-row: 3 / 5;


        }


        .item-10 {
            grid-row: 3 / 5;


        }

        .item-11 {
            grid-column: 3/5;
            grid-row: 3 / 5;

        }

        .item-12 {
            grid-row: 3 / 5;


        }

        /*----------------------------------(This code Important for Modal sizing on large device)-----------------------------------*/
        .modal-dialog {
            position: relative;
            width: auto;
            max-width: 600px;
            margin: 0 auto;
        }

        /*----------------------------------------------------------------------------------------------------------------------------*/
    </style>
 <link href="{{asset('css/style.css')}}" rel="stylesheet">
 <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <!-- loader -->



    <script src="{{ asset('asset/js/scrollax.min.js') }}"></script>

    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.esm.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!------------------------Light BOx OPtions------------->
    <script>
        lightbox.option({

        })
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


    @include('layout/ajax')

    <!------------------------Light BOx OPtions------------->
</body>

</html>
