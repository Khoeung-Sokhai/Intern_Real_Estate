@extends('layouts.layout-second')
@section('content')
    <!-- START SECTION USER PROFILE -->
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                </div>
                <div class="col-lg-4 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
                    <div class="sidebar-widget author-widget2">
                        <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="author-box d-flex justify-content-center clearfix">
                                    <input type="file" name="avatar" class="author__img" style="position: absolute; opacity: 0; cursor: pointer; z-index: 10" accept="avatar/*" onchange="loadFile(event)">
                                    <img src="/profiles/avatars/{{ Auth::user()->avatar }}" alt="author-image" class="author__img" id="output">
                            </div>
                            <i class="bi bi-plus-circle-fill d-flex justify-content-center"
                                style="margin-top: -10px; font-size:20px;"></i>
                            <div class="agent-contact-form-sidebar">
                                <input type="text" name="name" value="{{ old('name') ? old('name') :Auth::user()->name }}"
                                    class="form-control" id="name" placeholder="Enter Name">
                                @if ($errors->any('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <input type="email" name="email"
                                    value="{{ old('email') ? old('email') : Auth::user()->email }}" class="form-control"
                                    id="email" placeholder="Enter Email">
                                @if ($errors->any('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="text" name="phone"
                                    value="{{ old('phone') ? old('phone') : Auth::user()->phone }}" class="form-control"
                                    id="phone" placeholder="Phone Number">
                                @if ($errors->any('email'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                                <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <!-- END SECTION USER PROFILE -->
@endsection
