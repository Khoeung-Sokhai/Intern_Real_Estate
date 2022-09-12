@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper px-5 mt-4">
    <div class="card card-primary"  >
        <div class="card-header" >
            <h3 class="card-title">Show More</h3>
            <style>
                strong{
                    color: rgb(68, 199, 160);
                }
            </style>
        </div>
        
                   
                    <div class="cart-title" >
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 " >
                            <div class="form-group">
                                <strong>ID:</strong>
                                {{ $contactAdmin->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $contactAdmin->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Emails:</strong>
                                {{ $contactAdmin->email }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Telephone:</strong>
                                {{ $contactAdmin->phone }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Message:</strong>
                                {{ $contactAdmin->message }}
                            </div>
                        </div>
                        <div class="text-left" style="padding: 5px 10px">
                            <a class="btn btn-primary " href="{{ route('contacts.index') }}"> Back</a>
                        </div>
                    </div>
                
        
    </div>
</div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection