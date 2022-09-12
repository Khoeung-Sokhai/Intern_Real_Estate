@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper px-5 mt-4">
    <div class="card card-primary" >
        <div class="card-header">
            <h3 class="card-title">Create Account User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/users" method="POST" >
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Username') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="username..."
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email..."
                    name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    autocomplete="new-password" placeholder="password...">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group ">
                <div class="col-sm-6 " >
                    <!-- select -->
                    <div>
                        <label for="type">Type User</label>
                        <select class="custom-select" name="type" > 
                            <option value="#">Select here</option>
                            <option value="1">Admin</option>
                            <option value="2">Agent</option>
                            <option value="0">Customer</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div id="pass-info" class="clearfix"></div>
            <button type="submit" class="btn_1 rounded full-width add_top_30 btn btn-primary">
                {{ __('Create User') }}
            </button>

        </div>
        </form>
    </div>
</div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
