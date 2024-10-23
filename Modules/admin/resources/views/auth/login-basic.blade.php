<!DOCTYPE html>

<html lang="en" class="light-style   layout-menu-fixed     customizer-hide" dir="ltr" data-theme="theme-semi-dark" data-assets-path="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3" data-framework="laravel" data-template="blank-menu-theme-semi-dark-light" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login Basic - Pages |
    Materialize -
    Materialize - Bootstrap 5 HTML Laravel Admin Template</title>
  <meta name="description" content="Materialize – is the most developer friendly &amp; highly customizable Admin Dashboard Template." />
  <meta name="keywords" content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="RiBdYWt1qZWbqM0fWWAZE8jCNRnDPpcr32v3JGlr">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/materialize_admin">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />


  <!-- Include Styles -->
  <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

<link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/remixicon-CvKjKgNI.css" /><link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/flag-icons-3vmHO8jy.css" /><link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/node-waves-D5r9FyLK.css" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/remixicon-CvKjKgNI.css" class="" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/flag-icons-3vmHO8jy.css" class="" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/node-waves-D5r9FyLK.css" class="" /><!-- Core CSS -->
<link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/core-kL5gEEKA.css" /><link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-semi-dark-D80v88qZ.css" /><link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/demo-CQni_ElP.css" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/core-kL5gEEKA.css" class="template-customizer-core-css" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-semi-dark-D80v88qZ.css" class="template-customizer-theme-css" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/demo-CQni_ElP.css" class="" />

<!-- Vendor Styles -->
<link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-Pb48Lfqx.css" /><link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/typeahead-CL05AX6P.css" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-Pb48Lfqx.css" class="" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/typeahead-CL05AX6P.css" class="" /><link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/form-validation-Z40eMZE8.css" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/form-validation-Z40eMZE8.css" class="" />
<!-- Page Styles -->
<link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/page-auth-Do3xZciJ.css" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/page-auth-Do3xZciJ.css" class="" />
  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/helpers-B9_VIWCr.js" /><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/helpers-B9_VIWCr.js"></script><!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <link rel="preload" as="style" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/template-customizer-C6tl466J.css" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/template-customizer-C9zWc80S.js" /><link rel="stylesheet" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/template-customizer-C6tl466J.css" /><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/template-customizer-C9zWc80S.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/config-BpWx43Hd.js" /><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/config-BpWx43Hd.js"></script>
<script type="module">
  window.templateCustomizer = new TemplateCustomizer({
    cssPath: '',
    themesPath: '',
    defaultStyle: "light",
    defaultShowDropdownOnHover: "1", // true/false (for horizontal layout only)
    displayCustomizer: "1",
    lang: 'en',
    pathResolver: function(path) {
      var resolvedPaths = {
        // Core stylesheets
                  'core.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/core-kL5gEEKA.css',
          'core-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/core-dark-DFvmi5J3.css',
        
        // Themes
                  'theme-default.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-default-Bt2z4DrM.css',
          'theme-default-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-default-dark-CHvAJUy2.css',
                  'theme-bordered.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-bordered-DhjhTV9k.css',
          'theme-bordered-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-bordered-dark-C25VfhpZ.css',
                  'theme-semi-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-semi-dark-D80v88qZ.css',
          'theme-semi-dark-dark.scss': 'https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/theme-semi-dark-dark-BZrM7P_B.css',
              }
      return resolvedPaths[path] || path;
    },
    'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
  });
</script>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5J3LMKC'); </script>
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>

  <!-- Layout Content -->
  
<!-- Content -->
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0">
    <div class="authentication-inner py-6">

      <!-- Login -->
      <div class="card p-md-7 p-1">
        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3" class="app-brand-link gap-2">
            <span class="app-brand-logo demo"><span>
  <svg width="25" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="var(--bs-primary)" />
    <path d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z" fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
    <path d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z" fill="var(--bs-primary)" />
    <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="var(--bs-primary)" />
    <path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
    <path d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z" fill="var(--bs-primary)" />
    <defs>
      <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138" x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-opacity="1" />
        <stop offset="1" stop-opacity="0" />
      </linearGradient>
      <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139" x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-opacity="1" />
        <stop offset="1" stop-opacity="0" />
      </linearGradient>
    </defs>
  </svg>
</span>
</span>
            <span class="app-brand-text demo text-heading fw-semibold">Materialize</span>
          </a>
        </div>
        <!-- /Logo -->

        <div class="card-body mt-1">
          <h4 class="mb-1">Welcome to DeltaPlus! 👋</h4>
          <p class="mb-5">Please sign-in to your account and start the adventure</p>

          <form id="formAuthentication" class="mb-5" action="{{ route('admin.login') }}" method="POST">
          @csrf
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus>
              <label for="email">Email or Username</label>
            </div>
            <div class="mb-5">
              <div class="form-password-toggle">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <label for="password">Password</label>
                  </div>
                  <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line"></i></span>
                </div>
              </div>
            </div>
            <div class="mb-5 d-flex justify-content-between mt-5">
              <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
              <a href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/auth/forgot-password-basic" class="float-end mb-1 mt-2">
                <span>Forgot Password?</span>
              </a>
            </div>
            <div class="mb-5">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>

          <p class="text-center">
            <span>New on our platform?</span>
            <a href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/auth/register-basic">
              <span>Create an account</span>
            </a>
          </p>

          <div class="divider my-5">
            <div class="divider-text">or</div>
          </div>

          <div class="d-flex justify-content-center gap-2">
            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-facebook">
              <i class="tf-icons ri-facebook-fill"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-twitter">
              <i class="tf-icons ri-twitter-fill"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-github">
              <i class="tf-icons ri-github-fill"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-google-plus">
              <i class="tf-icons ri-google-fill"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Login -->
      <img alt="mask" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/illustrations/auth-basic-login-mask-light.png" class="authentication-image d-none d-lg-block" data-app-light-img="illustrations/auth-basic-login-mask-light.png" data-app-dark-img="illustrations/auth-basic-login-mask-dark.png" />
    </div>
  </div>
</div>
<!--/ Content -->

  <!--/ Layout Content -->

  
  <div class="buy-now">
    <a href="https://1.envato.market/materialize_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->

<link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/jquery-CED9k22g.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/jquery-Czc5UB_B.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/node-waves-XDuO7R8f.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/hammer-DbFOON0O.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/menu-DAPneovL.js" /><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/node-waves-XDuO7R8f.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/hammer-DbFOON0O.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/menu-DAPneovL.js"></script>
<link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/popular-DxzY11pE.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/bootstrap5-DjMKukTX.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/index-D_6hAncj.js" /><link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/auto-focus-BizrJr_R.js" /><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/popular-DxzY11pE.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/bootstrap5-DjMKukTX.js"></script><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/auto-focus-BizrJr_R.js"></script><!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/main-DRGn0ueN.js" /><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/main-DRGn0ueN.js"></script>
<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<link rel="modulepreload" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/pages-auth-MEmkL_Hu.js" /><script type="module" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/build/assets/pages-auth-MEmkL_Hu.js"></script><!-- END: Page JS-->

</body>

</html>
