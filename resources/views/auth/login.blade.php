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
                    <h1>About Our Company</h1>
                    <h2><a href="/">Home </a> &nbsp;/&nbsp; About Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->
        <!-- START SECTION LOGIN -->
        <div id="login">
            <div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="fl-wrap filter-tags clearfix add_bottom_30">
                        <div class="checkboxes float-left">
                            <div class="filter-tags-wrap">
                                <input id="check-b" type="checkbox" name="check"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="check-b" class="form-check-label">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="float-right mt-1"><a id="forgot" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}</a></div>
                        @endif
                    </div>
                    <button type="submit" class="btn_1 rounded full-width">{{ __('Login') }}</button>
                    <div class="text-center add_top_10">New to Find Houses? <strong><a
                                href="{{ route('register') }}">Register</a></strong></div>
                </form>
            </div>
        </div>
        <!-- END SECTION LOGIN -->
    </div>
</body>
@endsection
