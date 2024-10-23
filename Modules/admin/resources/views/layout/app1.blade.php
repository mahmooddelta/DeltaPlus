<!DOCTYPE html>

<html lang="fa" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed     " dir="rtl"
      data-theme="theme-semi-dark"
      data-assets-path="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/"
      data-base-url="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3"
      data-framework="laravel" data-template="vertical-menu-theme-semi-dark-light" data-style="light">



<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


    <title>Dashboard - DeltaPlus</title>
    <meta name="description"
          content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template."/>
    <meta name="keywords"
          content="dashboard, DeltaPlus, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/materialize_admin">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico"/>

    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->


    <link rel="stylesheet"
          href="{{ asset('admin/assets/demo/build/assets/remixicon-CvKjKgNI.css') }}"
          class=""/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/demo/build/assets/flag-icons-3vmHO8jy.css') }}"
          class=""/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/demo/build/assets/node-waves-D5r9FyLK.css') }}"
          class=""/><!-- Core CSS -->

    <link rel="preload" as="style"
          href="{{ asset('admin/assets/demo/build/assets/theme-semi-dark-D80v88qZ.css') }}"/>
    <link rel="preload" as="style"
          href="{{ asset('admin/assets/demo/build/assets/demo-CQni_ElP.css') }}"/>
    <link rel="preload" as="style"
              href="{{ asset('admin/assets/demo/build/assets/core-kL5gEEKA.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/demo/build/assets/core-kL5gEEKA.css') }}"
          class="template-customizer-core-css"/>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
          rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/materialdesignicons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/flag-icons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/css/rtl/core.css?id=84e90b89d4346ba5b549f814933f56c1') }}"
          class="template-customizer-core-css"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/css/rtl/theme-semi-dark.css?id=3d719b360981903a81b1808c59cbaf26') }}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/css/demo.css?id=b0748c2ad4338911d21615a7692027bd') }}"/>


    <!-- Vendor Styles -->
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/libs/node-waves/node-waves.css?id=aa72fb97dfa8e932ba88c8a3c04641bc') }}"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=e712540dc55d810eb04058a2c7adde74') }}"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.css?id=9edd1831c1d7cdbc4ff9cca42bf26999') }}"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/libs/swiper/swiper.css') }}"/>

    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/css/swiper/swiper.css') }}"/>


    <!-- Page Styles -->
    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/css/pages/cards-statistics.css') }}"/>

    <link rel="stylesheet"
          href="{{ asset('admin/assets/vendor/fonts/iransans.css') }}"/>


    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script
        src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>
    <!-- beautify ignore:start -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script
        src="{{ asset('admin/assets/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>

    <script>
        window.templateCustomizer = new TemplateCustomizer({
            cssPath: '',
            themesPath: '',
            defaultStyle: "light",
            defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
            displayCustomizer: "true",
            lang: 'en',
            pathResolver: function (path) {
                var resolvedPaths = {
                    // Core stylesheets
                    'core.css': '{{ asset('admin/assets/vendor/css/rtl/core.css?id=84e90b89d4346ba5b549f814933f56c1') }}',
                    'core-dark.css': '{{ asset('admin/assets/vendor/css/rtl/core-dark.css?id=56393a9e9ca3b3c80a47e4bc59b03832') }}',

                    // Themes
                    'theme-default.css': '{{ asset('admin/assets/vendor/css/rtl/theme-default.css?id=a5b74f63f911baabfa8b02a06ecfc64c') }}',
                    'theme-default-dark.css': '{{ asset('admin/assets/vendor/css/rtl/theme-default-dark.css?id=8b5937608e22a4a15f291494ec107064') }}',
                    'theme-bordered.css': '{{ asset('admin/assets/vendor/css/rtl/theme-bordered.css?id=aecb8491d176004d9f3b3f8d93641879') }}',
                    'theme-bordered-dark.css': '{{ asset('admin/assets/vendor/css/rtl/theme-bordered-dark.css?id=73dc67574b56c6dae3cb9f628c0ebd4a') }}',
                    'theme-semi-dark.css': '{{ asset('admin/assets/vendor/css/rtl/theme-semi-dark.css?id=3d719b360981903a81b1808c59cbaf26') }}',
                    'theme-semi-dark-dark.css': '{{ asset('admin/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=32e2e9b755bdf097142e4f239af82dc0') }}',
                }
                return resolvedPaths[path] || path;
            },
            'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions", "themes"],
        });
    </script>
</head>





{{--<head>--}}
{{--    <meta charset="utf-8"/>--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>--}}

{{--    <title>Dashboard - eCommerce |--}}
{{--        Materialize ---}}
{{--        Materialize - Bootstrap 5 HTML Laravel Admin Template</title>--}}
{{--    <meta name="description"--}}
{{--          content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template."/>--}}
{{--    <meta name="keywords"--}}
{{--          content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">--}}
{{--    <!-- laravel CRUD token -->--}}
{{--    <meta name="csrf-token" content="jnnaDrMs87E78bCFzQT3x00bBb5YJxfaHuW2ndtq">--}}
{{--    <!-- Canonical SEO -->--}}
{{--    <link rel="canonical" href="https://1.envato.market/materialize_admin">--}}
{{--    <!-- Favicon -->--}}
{{--    <link rel="icon" type="image/x-icon"--}}
{{--          href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico"/>--}}


{{--    <!-- Include Styles -->--}}
{{--    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->--}}
{{--    <!-- BEGIN: Theme CSS-->--}}
{{--    <!-- Fonts -->--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"--}}
{{--          rel="stylesheet">--}}

{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/remixicon-CvKjKgNI.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/flag-icons-3vmHO8jy.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/node-waves-D5r9FyLK.css') }}"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/remixicon-CvKjKgNI.css') }}"--}}
{{--          class=""/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/flag-icons-3vmHO8jy.css') }}"--}}
{{--          class=""/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/node-waves-D5r9FyLK.css') }}"--}}
{{--          class=""/><!-- Core CSS -->--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/core-kL5gEEKA.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/theme-semi-dark-D80v88qZ.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/demo-CQni_ElP.css') }}"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/core-kL5gEEKA.css') }}"--}}
{{--          class="template-customizer-core-css"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/theme-semi-dark-D80v88qZ.css') }}"--}}
{{--          class="template-customizer-theme-css"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/demo-CQni_ElP.css') }}"--}}
{{--          class=""/>--}}

{{--    <!-- Vendor Styles -->--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/perfect-scrollbar-Pb48Lfqx.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/typeahead-CL05AX6P.css') }}"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/perfect-scrollbar-Pb48Lfqx.css') }}"--}}
{{--          class=""/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/typeahead-CL05AX6P.css') }}"--}}
{{--          class=""/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/datatables-CZSEqscT.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/responsive-CnNKeydF.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/apex-charts-CauGeNri.css') }}"/>--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/swiper-BydmXREX.css') }}"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/datatables-CZSEqscT.css') }}"--}}
{{--          class=""/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/responsive-CnNKeydF.css') }}"--}}
{{--          class=""/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/apex-charts-CauGeNri.css') }}"--}}
{{--          class=""/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/swiper-BydmXREX.css') }}"--}}
{{--          class=""/>--}}
{{--    <!-- Page Styles -->--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/cards-statistics-B2-9VOdv.css') }}"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/cards-statistics-B2-9VOdv.css') }}"--}}
{{--          class=""/>--}}
{{--    <!-- Include Scripts for customizer, helper, analytics, config -->--}}
{{--    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->--}}
{{--    <!-- laravel style -->--}}
{{--    <link rel="modulepreload"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/helpers-B9_VIWCr.js') }}"/>--}}
{{--    <script type="module"--}}
{{--            src="{{ asset('admin/assets/demo/build/assets/helpers-B9_VIWCr.js') }}"></script>--}}
{{--    <!-- beautify ignore:start -->--}}
{{--    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->--}}
{{--    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->--}}
{{--    <link rel="preload" as="style"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/template-customizer-C9zWc80S.js') }}"/>--}}
{{--    <link rel="modulepreload"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/template-customizer-C9zWc80S.js') }}"/>--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{ asset('admin/assets/demo/build/assets/template-customizer-C9zWc80S.js') }}"/>--}}
{{--    <script type="module"--}}
{{--            src="{{ asset('admin/assets/demo/build/assets/template-customizer-C9zWc80S.js') }}"></script>--}}
{{--    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->--}}
{{--    <link rel="modulepreload"--}}
{{--          href={{ asset('admin/assets/demo/build/assets/config-BpWx43Hd.js') }}/>--}}
{{--    <script type="module"--}}
{{--            src="{{ asset('admin/assets/demo/build/assets/config-BpWx43Hd.js') }}"></script>--}}


{{--    <!-- Vendor Styles -->--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/libs/node-waves/node-waves.css?id=aa72fb97dfa8e932ba88c8a3c04641bc') }}"/>--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=e712540dc55d810eb04058a2c7adde74') }}"/>--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.css?id=9edd1831c1d7cdbc4ff9cca42bf26999') }}"/>--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"/>--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"/>--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}"/>--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/libs/swiper/swiper.css') }}"/>--}}

{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/css/swiper/swiper.css') }}"/>--}}


{{--        <!-- Page Styles -->--}}
{{--        <link rel="stylesheet"--}}
{{--              href="{{ asset('admin/assets/vendor/css/pages/cards-statistics.css') }}"/>--}}

{{--        <!-- Include Scripts for customizer, helper, analytics, config -->--}}
{{--        <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->--}}
{{--        <!-- laravel style -->--}}
{{--        <script--}}
{{--            src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>--}}
{{--        <!-- beautify ignore:start -->--}}
{{--        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->--}}
{{--        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->--}}
{{--        <script--}}
{{--            src="{{ asset('admin/assets/vendor/js/template-customizer.js') }}"></script>--}}

{{--        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->--}}
{{--        <script src="{{ asset('admin/assets/js/config.js') }}"></script>--}}
{{--    --}}




{{--    <script type="module">--}}
{{--        window.templateCustomizer = new TemplateCustomizer({--}}
{{--            cssPath: '',--}}
{{--            themesPath: '',--}}
{{--            defaultStyle: "light",--}}
{{--            defaultShowDropdownOnHover: "1", // true/false (for horizontal layout only)--}}
{{--            displayCustomizer: "1",--}}
{{--            lang: 'ar',--}}
{{--            pathResolver: function (path) {--}}
{{--                var resolvedPaths = {--}}
{{--                    // Core stylesheets--}}
{{--                    'core.scss': '{{ asset('admin/assets/demo/build/assets/core-kL5gEEKA.css') }}',--}}
{{--                    'core-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/core-dark-DFvmi5J3.css',--}}

{{--                    // Themes--}}
{{--                    'theme-default.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-default-Bt2z4DrM.css',--}}
{{--                    'theme-default-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-default-dark-CHvAJUy2.css',--}}
{{--                    'theme-bordered.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-bordered-DhjhTV9k.css',--}}
{{--                    'theme-bordered-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-bordered-dark-C25VfhpZ.css',--}}
{{--                    'theme-semi-dark.scss': '{{ asset('admin/assets/demo/build/assets/theme-semi-dark-D80v88qZ.css') }}',--}}
{{--                    'theme-semi-dark-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-semi-dark-dark-BZrM7P_B.css',--}}
{{--                }--}}
{{--                return resolvedPaths[path] || path;--}}
{{--            },--}}
{{--            'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions", "themes"],--}}
{{--        });--}}
{{--    </script>--}}
{{--    <script>(function (w, d, s, l, i) {--}}
{{--            w[l] = w[l] || [];--}}
{{--            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});--}}
{{--            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';--}}
{{--            j.async = true;--}}
{{--            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;--}}
{{--            f.parentNode.insertBefore(j, f);--}}
{{--        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC'); </script>--}}
{{--</head>--}}
<body>

<!-- Layout Content -->
<div class="layout-wrapper layout-content-navbar ">
    <div class="layout-container">

        <!-- Layout page -->


        @include('admin::layout.navbar')

        <!-- Content wrapper -->
        <div class="content-wrapper">


            <div class="layout-wrapper layout-content-navbar ">
                <div class="layout-container">

                    @include('admin::layout.menu')

                    <!-- Layout page -->
                    <div class="layout-page">


                        <!-- BEGIN: Navbar-->
                        <!-- Navbar -->
                        @include('admin::layout.navbar')
                        <!-- / Navbar -->
                        <!-- END: Navbar-->


                        <!-- Content wrapper -->
                        @yield('content')
                        <!--/ Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                <div class="drag-target"></div>
            </div>


            @include('admin::layout.footer')
            <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->

        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
<!--/ Layout Content -->

<div class="buy-now">
    <a href="https://1.envato.market/materialize_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
</div>

{{--<script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/node-waves/node-waves.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/hammer/hammer.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/vendor/libs/swiper/swiper.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/js/main.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/js/app-ecommerce-dashboard.js') }}"></script>--}}

<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/jquery-CbdDuLi-.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/jquery-CED9k22g.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/_commonjsHelpers-BosuxZz1.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/jquery-Czc5UB_B.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/popper-DNZnuk_L.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/bootstrap-B-W6M1Y3.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/node-waves-XDuO7R8f.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/hammer-DbFOON0O.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/typeahead-BKwBoP4T.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/menu-DAPneovL.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/datatables-bootstrap5-APQrx3vs.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/_commonjs-dynamic-Modules-TDtrdbi3.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/apexcharts-CP_VfLCH.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/swiper-CY5T_L6i.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/main-DRGn0ueN.js')}}" />
<link rel="modulepreload" href="{{ asset('admin/assets/demo/build/assets/app-ecommerce-dashboard-CzLdHfb8.js')}}" />

<script type="module" src="{{ asset('admin/assets/demo/build/assets/jquery-CbdDuLi-.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/popper-DNZnuk_L.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/bootstrap-B-W6M1Y3.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/node-waves-XDuO7R8f.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/hammer-DbFOON0O.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/typeahead-BKwBoP4T.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/menu-DAPneovL.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/datatables-bootstrap5-APQrx3vs.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/apexcharts-CP_VfLCH.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/swiper-CY5T_L6i.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/main-DRGn0ueN.js')}}"></script>
<script type="module" src="{{ asset('admin/assets/demo/build/assets/app-ecommerce-dashboard-CzLdHfb8.js')}}"></script>

</body>

</html>
