@extends('layouts.layout')
@section('content')

    <body class="inner-pages hd-white">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
                    ================================================== -->
            <div class="clearfix"></div>
            <!-- Header Container / End -->
            <section class="headings">
                <div class="text-heading text-center">
                    <div class="container">
                        <h1>Register</h1>
                        <h2><a href="/">Home </a> &nbsp;/&nbsp; Register</h2>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->
            <!-- START SECTION 404 -->
            <div id="login">
                <div class="login">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Phone Number') }}</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                placeholder="Phone Number">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Comfirm Password">
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button type="submit" class="btn_1 rounded full-width add_top_30">
                            {{ __('Register') }}
                        </button>
                        <div class="text-center add_top_10">Already have an acccount? <strong><a
                                    href="{{ route('login') }}">Login</a></strong></div>
                    </form>
                </div>
            </div>
            <!-- END SECTION 404 -->
        </div>
    </body>
@endsection
