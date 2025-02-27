@extends('client::layout.layout')
@section('title', __('client::public.main_page'))
@section('content')
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
@endsection
