<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed     " dir="rtl"
      data-theme="theme-semi-dark"
      data-assets-path="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/"
      data-base-url="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3"
      data-framework="laravel" data-template="vertical-menu-theme-semi-dark-light">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Dashboard - eCommerce | Materialize - Materialize - Bootstrap 5 HTML Laravel Admin Template</title>
    <meta name="description"
          content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template."/>
    <meta name="keywords"
          content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="fbCz5Fv9aTeWYNuyAs3UYN8BsNa9ftn7ztC9UO5F">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/materialize_admin">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico"/>


    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
          rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/fonts/materialdesignicons.css?id=6dcb6840ed1b54e81c4279112d07827e') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/fonts/flag-icons.css?id=121bcc3078c6c2f608037fb9ca8bce8d') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/css/rtl/core.css?id=84e90b89d4346ba5b549f814933f56c1') }}"
          class="template-customizer-core-css"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/css/rtl/theme-semi-dark.css?id=3d719b360981903a81b1808c59cbaf26') }}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet"
          href="{{ asset('assets/css/demo.css?id=b0748c2ad4338911d21615a7692027bd') }}"/>


    <!-- Vendor Styles -->
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/libs/node-waves/node-waves.css?id=aa72fb97dfa8e932ba88c8a3c04641bc') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=e712540dc55d810eb04058a2c7adde74') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css?id=9edd1831c1d7cdbc4ff9cca42bf26999') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}"/>


    <!-- Page Styles -->
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/css/pages/cards-statistics.css') }}"/>

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script
        src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!-- beautify ignore:start -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script
        src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

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
                    'core.css': '{{ asset('assets/vendor/css/rtl/core.css?id=84e90b89d4346ba5b549f814933f56c1') }}',
                    'core-dark.css': '{{ asset('assets/vendor/css/rtl/core-dark.css?id=56393a9e9ca3b3c80a47e4bc59b03832') }}',

                    // Themes
                    'theme-default.css': '{{ asset('assets/vendor/css/rtl/theme-default.css?id=a5b74f63f911baabfa8b02a06ecfc64c') }}',
                    'theme-default-dark.css': '{{ asset('assets/vendor/css/rtl/theme-default-dark.css?id=8b5937608e22a4a15f291494ec107064') }}',
                    'theme-bordered.css': '{{ asset('assets/vendor/css/rtl/theme-bordered.css?id=aecb8491d176004d9f3b3f8d93641879') }}',
                    'theme-bordered-dark.css': '{{ asset('assets/vendor/css/rtl/theme-bordered-dark.css?id=73dc67574b56c6dae3cb9f628c0ebd4a') }}',
                    'theme-semi-dark.css': '{{ asset('assets/vendor/css/rtl/theme-semi-dark.css?id=3d719b360981903a81b1808c59cbaf26') }}',
                    'theme-semi-dark-dark.css': '{{ asset('assets/vendor/css/rtl/theme-semi-dark-dark.css?id=32e2e9b755bdf097142e4f239af82dc0') }}',
                }
                return resolvedPaths[path] || path;
            },
            'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions", "themes"],
        });
    </script>
</head>

<body>

@yield('content')

<div class="buy-now">
    <a href="https://1.envato.market/materialize_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
</div>


<!-- Include Scripts -->
<!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
<!-- BEGIN: Vendor JS-->
<script
    src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script
    src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script
    src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script
    src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script
    src="{{ asset('assets/js/main.js') }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script
    src="{{ asset('assets/js/app-ecommerce-dashboard.js') }}"></script>
<!-- END: Page JS-->

</body>

</html>
