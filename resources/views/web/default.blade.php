<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Swipper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.4.8/swiper-bundle.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">

    <!-- Responsive My Style -->
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">

    <!-- Style Gile -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <!-- Stylesheet -->

    <!-- Logo Title -->
    <Link rel="icon" href="web/assets/img/Wynacom-logo.png" type="image/x-icon">
    <title>Wynacom Unitama Sejahtera</title>
</head>

<body>
    @include('web.header')

    <div>
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/f68aafc95a.js" crossorigin="anonymous"></script>

    <!-- script JS My Style -->
    <script src="{{ asset('web/js/script.js') }}"> </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    

    <script>
        const swiper = new Swiper('.swiper-container', {
            centeredSlides: true,
            loop: true,
            speed: 500,
            slidesPerView: 1.5,
            spaceBetween: 40,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {

                640: {
                    slidesPerView: 2.5,
                },
                768: {
                    slidesPerView: 2.75,
                },
                1080: {
                    slidesPerView: 3.25,
                },
                1400: {
                    slidesPerView: 3.50,
                },
            },
        });
    </script>

</body>

@include('web.footer')
