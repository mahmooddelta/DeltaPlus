@extends('client::layout.layout')
@section('title', __('client::public.main_page'))
@section('content')
    <div class="page-wraper">
        <!-- header -->
        <header class="site-header mo-left header fullwidth">
            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix">
                    <div class="container clearfix">
                        <!-- Website Logo -->
                        <div class="logo-header mostion logo-dark">
                            <a href="index.html"><img src="{{ asset('vendor/images/logo.png') }}" alt=""></a>
                        </div>
                        <div class="logo-header mostion logo-white">
                            <a href="index.html"><img src="{{ asset('vendor/images/logo-white.png') }}" alt=""></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Extra Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="javascript:void(0);" class="layout-btn">
                                    <input type="checkbox">
                                    <span class="mode-label"></span>
                                </a>
                                <a href="{{ route('register') }}" class="site-button"><i class="fa fa-user"></i> Register </a>
                            



                                <!-- <a href="javascript:void(0);" title="READ MORE" rel="bookmark" data-bs-toggle="modal"
                                   data-bs-target="#car-details" class="site-button"><i class="fa fa-lock"></i> login
                                </a>


                                <!-- @if (Route::has('login'))
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        @auth
                                            <a
                                                href="{{ url('/dashboard') }}"
                                                class="site-button"
                                                title="READ MORE" 
                                                rel="bookmark"
                                            >
                                                <i class="fa fa-dashboard"></i> Dashboard
                                            </a>
                                        @else
                                            <a
                                                href="{{ route('login') }}"
                                                title="READ MORE"
                                                rel="bookmark"
                                                class="site-button"
                                            >
                                                <i class="fa fa-lock"></i> Log in
                                            </a>

                                            @if (Route::has('register'))
                                                <a
                                                    href="{{ route('register') }}"
                                                    title="READ MORE"
                                                    rel="bookmark"
                                                    class="site-button"
                                                >
                                                    <i class="fa fa-user-plus"></i> Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif -->




                            </div>
                        </div>
                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                            <div class="logo-header logo-dark">
                                <a href="index.html"><img src="{{ asset('vendor/images/logo.png') }}" alt=""></a>
                            </div>
                            <div class="logo-header logo-white">
                                <a href="index.html"><img src="{{ asset('vendor/images/logo-white.png') }}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="javascript:void(0);">Home <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html" class="dez-page">Home 1</a></li>
                                        <li><a href="index-2.html" class="dez-page">Home 2</a></li>
                                        <li><a href="index-3.html" class="dez-page">Home 3 <span
                                                    class="new-page">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">For Candidates <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="jobs-profile.html" class="dez-page">My Profile</a></li>
                                        <li><a href="jobs-my-resume.html" class="dez-page">My Resume</a></li>
                                        <li><a href="jobs-applied-job.html" class="dez-page">Applied Job</a></li>
                                        <li><a href="jobs-alerts.html" class="dez-page">Jobs Alerts</a></li>
                                        <li><a href="jobs-saved-jobs.html" class="dez-page">Saved Job</a></li>
                                        <li><a href="jobs-cv-manager.html" class="dez-page">CV Manager</a></li>
                                        <li><a href="jobs-change-password.html" class="dez-page">Change Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">For Employers <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="company-profile.html" class="dez-page">Company Profile</a></li>
                                        <li><a href="company-resume.html" class="dez-page">Employer Resume</a></li>
                                        <li><a href="company-post-jobs.html" class="dez-page">Post A Jobs</a></li>
                                        <li><a href="company-manage-job.html" class="dez-page">Manage jobs</a></li>
                                        <li><a href="company-transactions.html" class="dez-page">Transactions</a></li>
                                        <li><a href="browse-candidates.html" class="dez-page">Browse Candidates</a></li>
                                        <li><a href="javascript:void(0);" class="dez-page">Register <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="create-account.html" class="dez-page">Employers
                                                        Register</a></li>
                                                <li><a href="account-fresher.html" class="dez-page">Register Fresher</a>
                                                </li>
                                                <li><a href="account-professional.html" class="dez-page">Register
                                                        Professional</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Pages <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html" class="dez-page">About Us</a></li>
                                        <li><a href="job-detail.html" class="dez-page">Job Detail</a></li>
                                        <li><a href="companies.html" class="dez-page">companies</a></li>
                                        <li><a href="free-job-alerts.html" class="dez-page">free job alerts</a></li>
                                        <li><a href="javascript:void(0);" class="dez-page">Browse Job <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="browse-job-list.html" class="dez-page">browse job list</a>
                                                </li>
                                                <li><a href="browse-job-grid.html" class="dez-page">browse job grid </a>
                                                </li>
                                                <li><a href="browse-job-filter-list.html" class="dez-page">browse filter
                                                        list </a></li>
                                                <li><a href="browse-job-filter-grid.html" class="dez-page">browse filter
                                                        grid </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);" class="dez-page">Jobs<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="category-all-jobs.html" class="dez-page">all jobs</a></li>
                                                <li><a href="category-company-jobs.html" class="dez-page">company
                                                        jobs</a></li>
                                                <li><a href="category-designations-jobs.html" class="dez-page">designations
                                                        jobs</a></li>
                                                <li><a href="category-jobs.html" class="dez-page">category jobs</a></li>
                                                <li><a href="category-location-jobs.html" class="dez-page">location
                                                        jobs</a></li>
                                                <li><a href="category-skill-jobs.html" class="dez-page">skill jobs</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);" class="dez-page">Portfolio <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-grid-2.html" class="dez-page">Portfolio Grid
                                                        2 </a></li>
                                                <li><a href="portfolio-grid-3.html" class="dez-page">Portfolio Grid
                                                        3 </a></li>
                                                <li><a href="portfolio-grid-4.html" class="dez-page">Portfolio Grid
                                                        4 </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);" class="dez-page">Login <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="login.html" class="dez-page">login 1</a></li>
                                                <li><a href="login-2.html" class="dez-page">login 2 </a></li>
                                                <li><a href="login-3.html" class="dez-page">login 3 </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);" class="dez-page">register <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="register.html" class="dez-page">register 1</a></li>
                                                <li><a href="register-2.html" class="dez-page">register 2 </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="error-404.html" class="dez-page">Error 404</a></li>
                                        <li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
                                        <li><a href="contact.html" class="dez-page">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Blog <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-classic.html" class="dez-page">Classic</a></li>
                                        <li><a href="blog-classic-sidebar.html" class="dez-page">Classic Sidebar</a>
                                        </li>
                                        <li><a href="blog-detailed-grid.html" class="dez-page">Detailed Grid</a></li>
                                        <li><a href="blog-detailed-grid-sidebar.html" class="dez-page">Detailed Grid
                                                Sidebar</a></li>
                                        <li><a href="blog-left-img.html" class="dez-page">Left Image Sidebar</a></li>
                                        <li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header END -->
        </header>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content">
            <!-- Section Banner -->
            <div class="dez-bnr-inr dez-bnr-inr-md main-slider"
                 style="background-image:url({{ asset('vendor/images/main-slider/slide2.jpg') }});">
                <div class="container">
                    <div class="dez-bnr-inr-entry align-m">
                        <div class="find-job-bx">
                            <a href="javascript:void(0);" class="site-button button-sm">Find Jobs, Employment & Career
                                Opportunities</a>
                            <h2>Search Between More Then <br/> <span class="text-primary">50,000</span> Open Jobs.</h2>
                            <form class="dezPlaceAni" action="category-all-jobs.html">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Job Title, Keywords, or Phrase</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <label>City, State or ZIP</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-group">
                                            <select>
                                                <option>Select Sector</option>
                                                <option>Construction</option>
                                                <option>Corodinator</option>
                                                <option>Employer</option>
                                                <option>Financial Career</option>
                                                <option>Information Technology</option>
                                                <option>Marketing</option>
                                                <option>Quality check</option>
                                                <option>Real Estate</option>
                                                <option>Sales</option>
                                                <option>Supporting</option>
                                                <option>Teaching</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <button type="submit" class="site-button btn-block">Find Job</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Banner END -->
            <!-- About Us -->
            <div class="section-full job-categories content-inner-2 bg-white">
                <div class="container">
                    <div class="section-head d-flex head-counter clearfix">
                        <div class="me-auto">
                            <h2 class="m-b5">Popular Categories</h2>
                            <h6 class="fw3">20+ Catetories work wating for you</h6>
                        </div>
                        <div class="head-counter-bx">
                            <h2 class="m-b5 counter">1800</h2>
                            <h6 class="fw3">Jobs Posted</h6>
                        </div>
                        <div class="head-counter-bx">
                            <h2 class="m-b5 counter">4500</h2>
                            <h6 class="fw3">Tasks Posted</h6>
                        </div>
                        <div class="head-counter-bx">
                            <h2 class="m-b5 counter">1500</h2>
                            <h6 class="fw3">Freelancers</h6>
                        </div>
                    </div>
                    <div class="row sp20">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-location-pin"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Design, Art & Multimedia</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-location-pin"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-wand"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Education Training</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-wand"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-wallet"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Accounting / Finance</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-wallet"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-cloud-up"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Human Resource</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-cloud-up"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-bar-chart"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Telecommunications</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-bar-chart"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-tablet"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Restaurant / Food Service</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-tablet"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-camera"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Construction / Facilities</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-camera"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper">
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"><i class="ti-panel"></i></div>
                                    <a href="company-manage-job.html" class="dez-tilte">Health</a>
                                    <p class="m-a0">198 Open Positions</p>
                                    <div class="rotate-icon"><i class="ti-panel"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center m-t30">
                            <a href="category-all-jobs.html" class="site-button radius-xl">All Categories</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Us END -->
            <!-- Call To Action -->
            <div class="section-full content-inner bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 section-head text-center">
                            <h2 class="m-b5">Featured Cities</h2>
                            <h6 class="fw4 m-b0">20+ Featured Cities Added Jobs</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic1.jpg') }})">
                                    <div class="city-info">
                                        <h5>Iraq</h5>
                                        <span>765 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic2.jpg') }})">
                                    <div class="city-info">
                                        <h5>Argentina</h5>
                                        <span>352 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic3.jpg') }})">
                                    <div class="city-info">
                                        <h5>Indonesia</h5>
                                        <span>893 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic4.jpg') }})">
                                    <div class="city-info">
                                        <h5>Gambia</h5>
                                        <span>502 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic5.jpg') }})">
                                    <div class="city-info">
                                        <h5>India</h5>
                                        <span>765 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic6.jpg') }})">
                                    <div class="city-info">
                                        <h5>Thailand</h5>
                                        <span>352 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic7.jpg') }})">
                                    <div class="city-info">
                                        <h5>Banjul</h5>
                                        <span>893 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex"
                                     style="background-image:url({{ asset('vendor/images/city/pic8.jpg') }})">
                                    <div class="city-info">
                                        <h5>Spain</h5>
                                        <span>502 Jobs</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call To Action END -->
            <!-- Our Job -->
            <div class="section-full bg-white content-inner-2">
                <div class="container">
                    <div class="d-flex job-title-bx section-head">
                        <div class="me-auto">
                            <h2 class="m-b5">Recent Jobs</h2>
                            <h6 class="fw4 m-b0">20+ Recently Added Jobs</h6>
                        </div>
                        <div class="align-self-end">
                            <a href="category-all-jobs.html" class="site-button button-sm">Browse All Jobs <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <ul class="post-job-bx browse-job">
                                <li>
                                    <div class="post-bx">
                                        <div class="d-flex m-b30">
                                            <div class="job-post-company">
                                                <span><img alt=""
                                                           src="{{ asset('vendor/images/logo/svg/logo1.svg') }}"/></span>
                                            </div>
                                            <div class="job-post-info">
                                                <h4><a href="job-detail.html">Digital Marketing Executive</a></h4>
                                                <ul>
                                                    <li><i class="fas fa-map-marker-alt"></i> Sacramento, California
                                                    </li>
                                                    <li><i class="far fa-bookmark"></i> Full Time</li>
                                                    <li><i class="far fa-clock"></i> Published 11 months ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="job-time me-auto">
                                                <a href="javascript:void(0);"><span>Full Time</span></a>
                                            </div>
                                            <div class="salary-bx">
                                                <span>$1200 - $ 2500</span>
                                            </div>
                                        </div>
                                        <label class="like-btn">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-bx">
                                        <div class="d-flex m-b30">
                                            <div class="job-post-company">
                                                <span><img alt=""
                                                           src="{{ asset('vendor/images/logo/svg/logo2.svg') }}"/></span>
                                            </div>
                                            <div class="job-post-info">
                                                <h4><a href="job-detail.html">Principal UX Designer</a></h4>
                                                <ul>
                                                    <li><i class="fas fa-map-marker-alt"></i> Sacramento, California
                                                    </li>
                                                    <li><i class="far fa-bookmark"></i> Full Time</li>
                                                    <li><i class="far fa-clock"></i> Published 11 months ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="job-time me-auto">
                                                <a href="javascript:void(0);"><span>Full Time</span></a>
                                            </div>
                                            <div class="salary-bx">
                                                <span>$1200 - $ 2500</span>
                                            </div>
                                        </div>
                                        <label class="like-btn">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-bx">
                                        <div class="d-flex m-b30">
                                            <div class="job-post-company">
                                                <span><img alt=""
                                                           src="{{ asset('vendor/images/logo/svg/logo3.svg') }}"/></span>
                                            </div>
                                            <div class="job-post-info">
                                                <h4><a href="job-detail.html">Junior UX Designer</a></h4>
                                                <ul>
                                                    <li><i class="fas fa-map-marker-alt"></i> Sacramento, California
                                                    </li>
                                                    <li><i class="far fa-bookmark"></i> Full Time</li>
                                                    <li><i class="far fa-clock"></i> Published 11 months ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="job-time me-auto">
                                                <a href="javascript:void(0);"><span>Full Time</span></a>
                                            </div>
                                            <div class="salary-bx">
                                                <span>$1200 - $ 2500</span>
                                            </div>
                                        </div>
                                        <label class="like-btn">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-bx">
                                        <div class="d-flex m-b30">
                                            <div class="job-post-company">
                                                <span><img alt=""
                                                           src="{{ asset('vendor/images/logo/svg/logo4.svg') }}"/></span>
                                            </div>
                                            <div class="job-post-info">
                                                <h4><a href="job-detail.html">Senior UX Designer</a></h4>
                                                <ul>
                                                    <li><i class="fas fa-map-marker-alt"></i> Sacramento, California
                                                    </li>
                                                    <li><i class="far fa-bookmark"></i> Full Time</li>
                                                    <li><i class="far fa-clock"></i> Published 11 months ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="job-time me-auto">
                                                <a href="javascript:void(0);"><span>Full Time</span></a>
                                            </div>
                                            <div class="salary-bx">
                                                <span>$1200 - $ 2500</span>
                                            </div>
                                        </div>
                                        <label class="like-btn">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-bx">
                                        <div class="d-flex m-b30">
                                            <div class="job-post-company">
                                                <span><img alt=""
                                                           src="{{ asset('vendor/images/logo/svg/logo5.svg') }}"/></span>
                                            </div>
                                            <div class="job-post-info">
                                                <h4><a href="job-detail.html">Digital Marketing Executive</a></h4>
                                                <ul>
                                                    <li><i class="fas fa-map-marker-alt"></i> Sacramento, California
                                                    </li>
                                                    <li><i class="far fa-bookmark"></i> Full Time</li>
                                                    <li><i class="far fa-clock"></i> Published 11 months ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="job-time me-auto">
                                                <a href="javascript:void(0);"><span>Full Time</span></a>
                                            </div>
                                            <div class="salary-bx">
                                                <span>$1200 - $ 2500</span>
                                            </div>
                                        </div>
                                        <label class="like-btn">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-bx">
                                        <div class="d-flex m-b30">
                                            <div class="job-post-company">
                                                <span><img alt=""
                                                           src="{{ asset('vendor/images/logo/icon1.png') }}"/></span>
                                            </div>
                                            <div class="job-post-info">
                                                <h4><a href="job-detail.html">Freelance UI Designer</a></h4>
                                                <ul>
                                                    <li><i class="fas fa-map-marker-alt"></i> Sacramento, California
                                                    </li>
                                                    <li><i class="far fa-bookmark"></i> Full Time</li>
                                                    <li><i class="far fa-clock"></i> Published 11 months ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="job-time me-auto">
                                                <a href="javascript:void(0);"><span>Full Time</span></a>
                                            </div>
                                            <div class="salary-bx">
                                                <span>$1200 - $ 2500</span>
                                            </div>
                                        </div>
                                        <label class="like-btn">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            <div class="m-t30">
                                <div class="d-flex">
                                    <a class="site-button button-sm me-auto" href="javascript:void(0);"><i
                                            class="ti-arrow-left"></i> Prev</a>
                                    <a class="site-button button-sm" href="javascript:void(0);">Next <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="sticky-top">
                                <div class="candidates-are-sys m-b30">
                                    <div class="candidates-bx">
                                        <div class="testimonial-pic radius"><img
                                                src="{{ asset('vendor/images/testimonials/pic3.jpg') }}" alt=""
                                                width="100" height="100"></div>
                                        <div class="testimonial-text">
                                            <p>I just got a job that I applied for via careerfy! I used the site all the
                                                time during my job hunt.</p>
                                        </div>
                                        <div class="testimonial-detail"><strong class="testimonial-name">Richard
                                                Anderson</strong> <span class="testimonial-position">Nevada, USA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="quote-bx">
                                    <div class="quote-info">
                                        <h4>Make a Difference with Your Online Resume!</h4>
                                        <p>Your resume in minutes with JobBoard resume assistant is ready!</p>
                                        <a href="register.html" class="site-button">Create an Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Job END -->
            <!-- Call To Action -->
            <div class="section-full p-tb70 overlay-black-dark text-white text-center bg-img-fix"
                 style="background-image: url({{ asset('vendor/images/background/bg4.jpg') }});">
                <div class="container">
                    <div class="section-head text-center text-white">
                        <h2 class="m-b5">Testimonials</h2>
                        <h5 class="fw4">Few words from candidates</h5>
                    </div>
                    <div class="blog-carousel-center owl-carousel owl-none">
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic radius shadow">
                                        <img src="{{ asset('vendor/images/testimonials/pic1.jpg') }}" width="100"
                                             height="100" alt="">
                                    </div>
                                    <strong class="testimonial-name">David Matin</strong>
                                    <span class="testimonial-position">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic radius shadow">
                                        <img src="{{ asset('vendor/images/testimonials/pic2.jpg') }}" width="100"
                                             height="100" alt="">
                                    </div>
                                    <strong class="testimonial-name">David Matin</strong>
                                    <span class="testimonial-position">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic radius shadow">
                                        <img src="{{ asset('vendor/images/testimonials/pic3.jpg') }}" width="100"
                                             height="100" alt="">
                                    </div>
                                    <strong class="testimonial-name">David Matin</strong>
                                    <span class="testimonial-position">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call To Action END -->
            <!-- Our Latest Blog -->
            <div class="section-full content-inner-2 bg-white"
                 style="background-image:url({{ asset('vendor/images/lines.png') }}); background-position:bottom; background-repeat:no-repeat; background-size: 100%;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h2 class="m-b0">Membership Plans</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy.</p>
                    </div>
                    <!-- Pricing table-1 Columns 3 with gap -->
                    <div class="section-content box-sort-in button-example m-t80">
                        <div class="pricingtable-row">
                            <div class="row max-w1000 m-auto">
                                <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                                    <div class="pricingtable-wrapper style2">
                                        <div class="pricingtable-inner">
                                            <div class="pricingtable-price">
                                                <h4 class="font-weight-300 m-t10 m-b0">Basic</h4>
                                                <div class="pricingtable-bx"><span>Free</span></div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore
                                                et dolore magna siad enim aliqua</p>
                                            <div class="m-t20">
                                                <a href="register.html" class="site-button radius-xl"><span
                                                        class="p-lr30">Sign Up</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                                    <div class="pricingtable-wrapper style2 text-white active">
                                        <div class="pricingtable-inner">
                                            <div class="pricingtable-price">
                                                <h4 class="font-weight-300 m-t10 m-b0">Professional</h4>
                                                <div class="pricingtable-bx"> $ <span>29</span> / Per Installation</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore
                                                et dolore magna siad enim aliqua</p>
                                            <div class="m-t20">
                                                <a href="register.html" class="site-button white radius-xl"><span
                                                        class="text-primary p-lr30">Sign Up</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 p-lr0">
                                    <div class="pricingtable-wrapper style2">
                                        <div class="pricingtable-inner">
                                            <div class="pricingtable-price">
                                                <h4 class="font-weight-300 m-t10 m-b0">Extended</h4>
                                                <div class="pricingtable-bx"> $ <span>29</span> / Per Installation</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore
                                                et dolore magna siad enim aliqua</p>
                                            <div class="m-t20">
                                                <a href="register.html" class="site-button radius-xl"><span
                                                        class="p-lr30">Sign Up</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Latest Blog -->
        </div>
        <!-- Content END-->
        <!-- Modal Box -->
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
        <!-- Modal Box End -->
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                            <div class="widget">
                                <div class="logo-white">
                                    <img class="logo m-b15" src="{{ asset('vendor/images/logo-white.png') }}"
                                         width="180" alt=""/>
                                </div>
                                <p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry has been the industry's standard dummy text ever since the.</p>
                                <div class="subscribe-form m-b20">
                                    <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                                        <div class="dzSubscribeMsg"></div>
                                        <div class="input-group">
                                            <input name="dzEmail" required="required" class="form-control"
                                                   placeholder="Your Email Address" type="email">
                                            <span class="input-group-btn">
											<button name="submit" value="Submit" type="submit"
                                                    class="site-button radius-xl">Subscribe</button>
										</span>
                                        </div>
                                    </form>
                                </div>
                                <ul class="list-inline m-a0">
                                    <li><a target="_blank" href="https://www.facebook.com/"
                                           class="site-button white facebook circle "><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://www.google.com/"
                                           class="site-button white google-plus circle "><i
                                                class="fab fa-google-plus-g"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/"
                                           class="site-button white linkedin circle "><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://www.instagram.com/"
                                           class="site-button white instagram circle "><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://twitter.com/"
                                           class="site-button white twitter circle "><i class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
                            <div class="widget border-0">
                                <h5 class="m-b30 text-white">Frequently Asked Questions</h5>
                                <ul class="list-2 list-line">
                                    <li><a href="javascript:void(0);">Privacy & Seurty</a></li>
                                    <li><a href="javascript:void(0);">Terms of Serice</a></li>
                                    <li><a href="javascript:void(0);">Communications</a></li>
                                    <li><a href="javascript:void(0);">Referral Terms</a></li>
                                    <li><a href="javascript:void(0);">Lending Licnses</a></li>
                                    <li><a href="javascript:void(0);">Support</a></li>
                                    <li><a href="javascript:void(0);">How It Works</a></li>
                                    <li><a href="javascript:void(0);">For Employers</a></li>
                                    <li><a href="javascript:void(0);">Underwriting</a></li>
                                    <li><a href="javascript:void(0);">Contact Us</a></li>
                                    <li><a href="javascript:void(0);">Lending Licnses</a></li>
                                    <li><a href="javascript:void(0);">Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                            <div class="widget border-0">
                                <h5 class="m-b30 text-white">Find Jobs</h5>
                                <ul class="list-2 w10 list-line">
                                    <li><a href="javascript:void(0);">US Jobs</a></li>
                                    <li><a href="javascript:void(0);">Canada Jobs</a></li>
                                    <li><a href="javascript:void(0);">UK Jobs</a></li>
                                    <li><a href="javascript:void(0);">Emplois en Fnce</a></li>
                                    <li><a href="javascript:void(0);">Jobs in Deuts</a></li>
                                    <li><a href="javascript:void(0);">Vacatures China</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bottom part -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <span> © Copyright  2023 by <i class="fa fa-heart m-lr5 text-red heart"></i>
						<a href="https://dexignzone.com" target="_blank">DexignZone </a> All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END -->
        <!-- scroll top button -->
        <button class="scroltop fa fa-arrow-up"></button>
    </div>
@endsection