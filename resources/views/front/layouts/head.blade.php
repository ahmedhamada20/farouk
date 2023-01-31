

@if(App::getLocale() == 'ar')

    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.rtl.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/boxicons.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/odometer.min.css')}}">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
    <!-- Carousel Default CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/dark.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">

    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/rtl.css')}}">

@else
    <link rel="stylesheet" href="{{asset('front/assets_en/css/bootstrap.min.css   ')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/animate.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/meanmenu.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/boxicons.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/flaticon.css')}}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/odometer.min.css')}}">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/owl.carousel.min.css')}}">
    <!-- Carousel Default CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/owl.theme.default.min.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/magnific-popup.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/nice-select.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/style.css')}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/dark.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front/assets_en/css/responsive.css')}}">

@endif

<title class="h1"> @yield('title')</title>

<link rel="icon" type="image/png" href="{{asset('front/assets/img/favicon.png')}}">
@yield('css')
