<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--   Styles-->
    <link rel="stylesheet" href="{{ asset('css/front/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/sections/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/sections/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/sections/modal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--    Item Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front/items/card.css') }}"/>

    <!--    Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    <!--    Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <title>{{ config('app.name', 'UkrInvest') }}</title>
</head>
<body>

<div class="">
    @yield('content')
</div>

<!-------------- scripts-------------->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

<!--Slider-->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{ asset('js/front/main.js') }}" defer></script>
<script src="{{ asset('js/front/slider.js') }}" defer></script>
<script src="{{ asset('js/front/myscript.js') }}" defer></script>
</body>
</html>

