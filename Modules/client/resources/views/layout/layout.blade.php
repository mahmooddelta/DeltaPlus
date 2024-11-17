<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="keywords"
          content="applicant, candidate, career, companies, employment, freelancer, job board, job directory, Job guru, job listing, job posting, job seeker, recruiting, resume, resume listing">
    <meta name="description"
          content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
    <meta property="og:title" content="Job Board - Job Portal HTML Template + RTL and Dark layout">
    <meta property="og:description"
          content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
    <meta property="og:image" content="https://job-board.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('vendor/images/favicon.ico') }}" type="image/x-icon">

    <title>@yield('title')</title>


    <script src="{{ asset('vendor/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('vendor/js/respond.min.js') }}"></script>


    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/templete.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('vendor/css/skin/skin-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/rtl.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('vendor/fonts.googleapis.com/css2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/iransans.css') }}"/>
    @yield('links')

</head>

<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">

    @include('client::layout.header')

    @yield('content')

    <div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body row m-a0 clearfix">
                    <div class="col-lg-6 col-md-6 d-flex p-a0"
                         style="background-image: url({{ asset('vendor/images/background/bg3.jpg') }});  background-position:center; background-size:cover;">

                    </div>
                    <div class="col-lg-6 col-md-6 p-a0">
                        <div class="lead-form browse-job text-left">
                            <form>
                                <h3 class="m-t0">Personal Details</h3>
                                <div class="form-group">
                                    <input value="" class="form-control" placeholder="Name"/>
                                </div>
                                <div class="form-group">
                                    <input value="" class="form-control" placeholder="Mobile Number"/>
                                </div>
                                <div class="clearfix">
                                    <button type="button" class="btn-primary site-button btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('client::layout.footer')

    <button class="scroltop fa fa-arrow-up"></button>
</div>


<script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('vendor/plugins/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('vendor/plugins/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('vendor/plugins/counter/counterup.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('vendor/plugins/masonry/masonry-3.1.4.js') }}"></script>
<script src="{{ asset('vendor/plugins/masonry/masonry.filter.js') }}"></script>
<script src="{{ asset('vendor/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('vendor/plugins/scroll/scrollbar.min.js') }}"></script>
<script src="{{ asset('vendor/js/custom.js') }}"></script>
<script src="{{ asset('vendor/js/dz.carousel.js') }}"></script>
<script src="{{ asset('vendor/js/dz.ajax.js') }}"></script>
<script src="{{ asset('vendor/plugins/switcher/switcher.js') }}"></script>

@yield('script')

</body>

</html>
