@extends('layouts.master-no-footer')

@section('content')
    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form >
{{--                        <form method="POST" action="{{ route('login') }}">--}}
                    @csrf
                        <div class="cardify login">
                            <a href="{{ route('home') }}" class="pl-2"><< Back to Home Page</a>
                            <h3 class="text-center">{{ __('Login') }}</h3>
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" name="email"
                                           placeholder="Enter your email..." class="text_field  @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input id="pass" type="password"
                                           placeholder="Enter your current password..."  class="text_field @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2" name="remember"
                                               id="remember"  {{ old('remember') ? 'checked' : '' }}>
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text"> {{ __('Remember Me') }}</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit" onclick="alert('Coming Soon')" >{{ __('Login Now') }}</button>

                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">username</a> or
                                        <a href="{{ route('password.request') }}">password</a>?</p>
                                       @endif
                                    <p class="signup">Don't have an
                                        <a href="{{ route('register') }}">account</a>?</p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->