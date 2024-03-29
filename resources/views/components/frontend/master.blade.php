<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title> Ecommerce </title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('Frontend') }}/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('Frontend') }}/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('Frontend') }}/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('Frontend') }}/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('Frontend') }}/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('Frontend') }}/css/style.css" />



</head>

<body>
    <!-- HEADER -->
    <x-frontend.partials.header />

    <!-- /HEADER -->

    <!-- NAVIGATION -->

    <x-frontend.partials.nav />
    <!-- /NAVIGATION -->


    <!-- SECTION -->

    {{ $slot }}

    <!-- SECTION -->
    <!-- NEWSLETTER -->

    <x-frontend.partials.news />
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->

    <x-frontend.partials.footer />
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('Frontend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/nouislider.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/jquery.zoom.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/main.js"></script>

</body>

</html>
