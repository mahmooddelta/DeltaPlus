<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="keywords" content="applicant, candidate, career, companies, employment, freelancer, job board, job directory, Job guru, job listing, job posting, job seeker, recruiting, resume, resume listing">
    <meta name="description" content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
    <meta property="og:title" content="Job Board - Job Portal HTML Template + RTL and Dark layout">
    <meta property="og:description" content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
    <meta property="og:image" content="https://job-board.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('vendor/images/favicon.ico') }}" type="image/x-icon">

    <!-- PAGE TITLE HERE -->
    <title>@yield('title')</title>

<!--[if lt IE 9]>
    <script src="{{ asset('vendor/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('vendor/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/templete.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('vendor/css/skin/skin-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/rtl.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('vendor/fonts.googleapis.com/css2.css') }}" rel="stylesheet">
    @yield('links')

</head>

<body id="bg">
<div id="loading-area"></div>

@yield('content')

<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
<!-- JQUERY.MIN JS -->
<script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('vendor/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<!-- FORM JS -->
<script src="{{ asset('vendor/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<!-- FORM JS -->
<script src="{{ asset('vendor/plugins/magnific-popup/magnific-popup.js') }}"></script>
<!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('vendor/plugins/counter/waypoints-min.js') }}"></script>
<!-- WAYPOINTS JS -->
<script src="{{ asset('vendor/plugins/counter/counterup.min.js') }}"></script>
<!-- COUNTERUP JS -->
<script src="{{ asset('vendor/plugins/imagesloaded/imagesloaded.js') }}"></script>
<!-- IMAGESLOADED -->
<script src="{{ asset('vendor/plugins/masonry/masonry-3.1.4.js') }}"></script>
<!-- MASONRY -->
<script src="{{ asset('vendor/plugins/masonry/masonry.filter.js') }}"></script>
<!-- MASONRY -->
<script src="{{ asset('vendor/plugins/owl-carousel/owl.carousel.js') }}"></script>
<!-- OWL SLIDER -->
<script src="{{ asset('vendor/plugins/scroll/scrollbar.min.js') }}"></script>
<!-- OWL SLIDER -->
<script src="{{ asset('vendor/js/custom.js') }}"></script>
<!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('vendor/js/dz.carousel.js') }}"></script>
<!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('vendor/js/dz.ajax.js') }}"></script>
<!-- CONTACT JS  -->
<script src="{{ asset('vendor/plugins/switcher/switcher.js') }}"></script>
<!-- SWITCHER -->
@yield('script')

</body>

</html>
