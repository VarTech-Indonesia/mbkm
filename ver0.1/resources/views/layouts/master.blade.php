<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
	<!-- Favicons -->
    <link href="{{ asset('storage/images/fav.png') }}" rel="icon">
    <link href="{{ asset('storage/css/media_query.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('storage/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('storage/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link href="{{ asset('storage/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('storage/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('storage/css/style_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="{{ asset('storage/js/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
    
    @include('partials.01-login')
    @include('partials.02-logosocial')
    @include('partials.03-nav')

    @yield('content')

    @include('partials.09-footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('storage/js/owl.carousel.min.js') }}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="{{ asset('storage/js/tether.min.js')}}"></script>
    <script src="{{ asset('storage/js/bootstrap.min.js')}}">
    </script>
    <!-- Waypoints -->
    <script src="{{ asset('storage/js/jquery.waypoints.min.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('storage/js/main.js') }}"></script>
</body>

</html>