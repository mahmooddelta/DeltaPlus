{{--@extends('client::layout.layout')--}}
{{--@section('title', __('client::public.register'))--}}
{{--@section('content')--}}
{{--    <div class="page-wraper">--}}
{{--        <!-- Content -->--}}
{{--        <div class="browse-job login-style3">--}}
{{--            <!-- Coming Soon -->--}}
{{--            <div class="bg-img-fix"--}}
{{--                 style="background-image:url({{ asset('vendor/images/background/bg6.jpg') }}); height: 100vh;">--}}
{{--                <div class="row">--}}
{{--                    <div--}}
{{--                        class="col-xl-4 col-lg-5 col-md-6 col-sm-12 bg-white z-index2 relative p-a0 content-scroll skew-section left-bottom">--}}
{{--                        <div class="login-form style-2">--}}
{{--                            <div class="logo-header text-center p-tb30">--}}
{{--                                <a href="index.html" class="logo"><img src="{{ asset('vendor/images/logo.png') }}"--}}
{{--                                                                       alt=""/></a>--}}
{{--                                <a href="index.html" class="logo-white"><img--}}
{{--                                        src="{{ asset('vendor/images/logo-white.png') }}" alt=""/></a>--}}
{{--                            </div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                            <div class="tab-content nav p-b30 tab">--}}
{{--                                <div id="login" class="tab-pane active ">--}}
{{--                                    <form method="POST" class=" dez-form p-b30" action="{{route('register')}}">--}}
{{--                                        @csrf--}}
{{--                                        <h3 class="form-title m-t0">Personal Information</h3>--}}
{{--                                        <div class="dez-separator-outer m-b5">--}}
{{--                                            <div class="dez-separator bg-primary style-liner"></div>--}}
{{--                                        </div>--}}
{{--                                        <p>Enter your e-mail address and your password. </p>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="name" required="required" class="form-control"--}}
{{--                                                   value="{{old('name')}}"--}}
{{--                                                   placeholder="@lang('client::auth.enter_your_name')" type="text"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="password" required="required" class="form-control"--}}
{{--                                                   value="{{old('password')}}"--}}
{{--                                                   placeholder="@lang('client::auth.enter_your_password')"--}}
{{--                                                   type="password"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="email" required="required" class="form-control"--}}
{{--                                                   value="{{old('email')}}"--}}
{{--                                                   placeholder="@lang('client::auth.enter_your_email')" type="email"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="phone_number" required="required" class="form-control"--}}
{{--                                                   value="{{old('phone_number')}}"--}}
{{--                                                   placeholder="@lang('client::auth.enter_your_phone_number')"--}}
{{--                                                   type="text"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group text-left">--}}
{{--                                            <button--}}
{{--                                                class="site-button dz-xs-flex m-r5">@lang('client::auth.login')</button>--}}
{{--                                            <span class="form-check">--}}
{{--											<input type="checkbox" class="form-check-input" id="check1" name="example1">--}}
{{--											<label class="form-check-label"--}}
{{--                                                   for="check1">@lang('client::auth.remember_me')</label>--}}
{{--										</span>--}}
{{--                                            <a data-bs-toggle="tab" href="#forgot-password" class="forget-pass m-l5"><i--}}
{{--                                                    class="fa fa-unlock-alt"></i>@lang('client::auth.recover_password')--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        @include('client::partials.validation-errors')--}}
{{--                                        <div class="dz-social clearfix">--}}
{{--                                            <h5 class="form-title m-t5 float-start">@lang('client::auth.sign_in_with')</h5>--}}
{{--                                            <ul class="dez-social-icon dez-border float-end dez-social-icon-lg text-white">--}}
{{--                                                <li><a target="_blank" href="https://www.facebook.com/"--}}
{{--                                                       class="fab fa-facebook-f fb-btn"></a></li>--}}
{{--                                                <li><a target="_blank" href="https://www.google.com/"--}}
{{--                                                       class="fab fa-google-plus-g gplus-btn"></a></li>--}}
{{--                                                <li><a target="_blank" href="https://www.linkedin.com/"--}}
{{--                                                       class="fab fa-linkedin-in link-btn"></a></li>--}}
{{--                                                <li><a target="_blank" href="https://twitter.com/"--}}
{{--                                                       class="fab fa-twitter tw-btn"></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                    <div class="text-center bottom">--}}
{{--                                        <a data-bs-toggle="tab" href="#registration-form"--}}
{{--                                           class="site-button button-md btn-block text-white">@lang('client::auth.register')</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div id="forgot-password" class="tab-pane fade">--}}
{{--                                    <form class="dez-form">--}}
{{--                                        <h3 class="form-title m-t0">Forget Password ?</h3>--}}
{{--                                        <div class="dez-separator-outer m-b5">--}}
{{--                                            <div class="dez-separator bg-primary style-liner"></div>--}}
{{--                                        </div>--}}
{{--                                        <p>Enter your e-mail address below to reset your password. </p>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="dzName" required="" class="form-control"--}}
{{--                                                   placeholder="Email Address" type="text"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group clearfix text-left">--}}
{{--                                            <a class="site-button outline gray" data-bs-toggle="tab"--}}
{{--                                               href="#login">Back</a>--}}
{{--                                            <button class="site-button float-end">Submit</button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <div id="registration-form" class="tab-pane fade">--}}
{{--                                    <form class="dez-form ">--}}
{{--                                        <h3 class="form-title m-t0">Sign Up</h3>--}}
{{--                                        <div class="dez-separator-outer m-b5">--}}
{{--                                            <div class="dez-separator bg-primary style-liner"></div>--}}
{{--                                        </div>--}}
{{--                                        <p>Enter your personal details below: </p>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="dzName" required="" class="form-control"--}}
{{--                                                   placeholder="Full Name" type="text"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="dzName" required="" class="form-control"--}}
{{--                                                   placeholder="User Name" type="text"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="dzName" required="" class="form-control"--}}
{{--                                                   placeholder="Email Address" type="text"/>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group">--}}
{{--                                            <input name="dzName" required="" class="form-control" placeholder="Password"--}}
{{--                                                   type="password"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input name="dzName" required="" class="form-control"--}}
{{--                                                   placeholder="Re-type Your Password" type="password"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="m-b30">--}}
{{--                                            <span class="form-check float-start m-r5">--}}
{{--											<input type="checkbox" class="form-check-input" id="check2" name="example1">--}}
{{--											<label class="form-check-label" for="check2">I agree to the</label>--}}
{{--										</span>--}}
{{--                                            <label><a href="#">Terms of Service </a>& <a href="#">Privacy--}}
{{--                                                    Policy</a></label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group clearfix text-left">--}}
{{--                                            <a class="site-button outline gray" data-bs-toggle="tab"--}}
{{--                                               href="#login">Back</a>--}}
{{--                                            <button class="site-button float-end">Submit</button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="bottom-footer clearfix m-t10 m-b20 row text-center">--}}
{{--                                <div class="col-lg-12 text-center">--}}
{{--                                    <span> © Copyright by <i class="fa fa-heart m-lr5 text-red heart"></i>--}}
{{--								<a href="javascript:void(0);">DexignZone </a> All rights reserved.</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Full Blog Page Contant -->--}}
{{--        </div>--}}
{{--        <!-- Content END-->--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@section('script')--}}
{{--    <script>--}}
{{--        jQuery(document).ready(function () {--}}
{{--            jQuery('.winHeight').css('height', $(window).height());--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
