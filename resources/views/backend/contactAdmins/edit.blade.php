@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper px-5 mt-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Contact</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('contactAdmins.update', $contactAdmin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Edit name</label>
                    <input type="text" class="form-control" name="name" value="{{$contactAdmin->name}}" id="exampleInputName1" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="phone">Edit District</label>
                    <input type="text" class="form-control"name="phone"  value="{{$contactAdmin->phone}}" id="exampleInputName1" placeholder="Enter phone">
                </div>
                <div class="form-group">
                    <label for="email">Edit City</label>
                    <input type="email" class="form-control" name="email" value="{{$contactAdmin->email}}" id="exampleInputName1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="message">Edit message</label>
                    <input type="text" class="form-control" name="message" value="{{$contactAdmin->message}}" id="exampleInputName1" placeholder="Enter message">
                </div>
                
                
            </div>
            <!-- /.card-body -->
            

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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