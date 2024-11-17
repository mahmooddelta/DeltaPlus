@extends('client::layout.layout')
@section('title', __('client::public.main_page'))
@section('content')
        <div class="page-content bg-white">
            <!-- contact area -->
            <div class="content-block">
                <!-- Browse Jobs -->
                <div class="section-full bg-white browse-job p-t50 p-b20">
                    <div class="container">
                        <div class="row">
                            @include('client::layout.menu')
                            <div class="col-xl-9 col-lg-8 m-b30">
                                <div class="job-bx job-profile">
                                    <div class="job-bx-title clearfix">
                                        <h5 class="font-weight-700 float-start text-uppercase">Basic Information</h5>
                                        <a href="index.html" class="site-button right-arrow button-sm float-end">Back</a>
                                    </div>
                                    <form>
                                        <div class="row m-b30">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Your Name:</label>
                                                    <input type="text" class="form-control" placeholder="Alexander Weir">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Professional title:</label>
                                                    <input type="text" class="form-control" placeholder="Web Designer">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Languages:</label>
                                                    <input type="text" class="form-control" placeholder="English">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Age:</label>
                                                    <input type="text" class="form-control" placeholder="32 Year">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Current Salary($):</label>
                                                    <input type="text" class="form-control" placeholder="2000$">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Expected Salary:</label>
                                                    <input type="text" class="form-control" placeholder="2500$">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description:</label>
                                                    <textarea class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-bx-title clearfix">
                                            <h5 class="font-weight-700 float-start text-uppercase">Contact Information</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Phone:</label>
                                                    <input type="text" class="form-control" placeholder="+1 123 456 7890">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Email Address:</label>
                                                    <input type="text" class="form-control" placeholder="info@example.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Country:</label>
                                                    <input type="text" class="form-control" placeholder="Country Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Postcode:</label>
                                                    <input type="text" class="form-control" placeholder="112233">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>City:</label>
                                                    <input type="text" class="form-control" placeholder="London">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Full Address:</label>
                                                    <input type="text" class="form-control" placeholder="New york City">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="site-button m-b30">Save Setting</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Browse Jobs END -->
            </div>
        </div>
@endsection

