@extends('layouts.master-no-footer')

@section('content')
    <!--================================
            START SIGNUP AREA
            =================================-->
            <section class="signup_area section--padding2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <form >
                                <div class="cardify signup_form">
                                    <div class="login--header">
                                        <a href="{{ route('home') }}" class="pl-2"><< Back to Home Page</a>
                                        <h3>Create Your Account</h3>
                                        <p>Please fill the following fields with appropriate information to register a new Kosdor
                                            account.
                                        </p>
                                    </div>
                                    <!-- end .login_header -->

                                    <div class="login--form">

                                        <div class="form-group">
                                            <label for="urname">Your Name</label>
                                            <input id="urname" type="text"  placeholder="Enter your Name" class="text_field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email_ad">Email Address</label>
                                            <input id="email_ad" type="text" placeholder="Enter your email address"  class="text_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> 

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="text"  placeholder="Enter your password..." class="text_field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="con_pass">Confirm Password</label>
                                            <input id="con_pass" type="text" class="text_field" placeholder="Confirm password">
                                        </div>

                                        <button class="btn btn--md btn--round register_btn"  type="submit" onclick="alert('Coming Soon')" >{{ __('Register Now') }}</button>

                                        <div class="login_assist">
                                            <p>Already have an account?
                                                <a href="{{ route('login') }}">Login</a>
                                            </p>
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
            END SIGNUP AREA
            =================================-->
            @endsection
