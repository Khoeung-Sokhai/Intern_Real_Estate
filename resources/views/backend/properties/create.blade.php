@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper px-5 mt-4">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Property</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            
            <form action="/admin/properties" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group" hidden>
                        <label for="agent">Agent ID</label>
                        <input type="text" class="form-control" name="agent_id" id="exampleInputName1" value="{{ Auth::user()->id }}"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="name">Name Property</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="amenity">Name Property</label>
                        <input type="text" class="form-control" name="amenity" id="exampleInputName1"
                            placeholder="Enter amenity">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleInputName1"
                            placeholder="Address">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- select -->
                            <div class="form-group">
                                <label for="bedroom">Bedroom</label>
                                <input type="text" class="form-control" name="bedroom" id="exampleInputName1"
                                    placeholder="Bedroom">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- select -->
                            <div class="form-group">
                                <label for="bathroom">Bathroom</label>
                                <input type="text" class="form-control" name="bathroom" id="exampleInputName1"
                                    placeholder="Bathroom">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- select -->
                            <div class="form-group">
                                <label for="size">Square</label>
                                <input type="text" class="form-control" name="size" id="exampleInputName1"
                                    placeholder="Size">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="types[]">Type</label>
                        <div class="col-sm-4">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="types[]" value="Sale" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">For Sale</label>
                            </div>
                            <input type="text" class="form-control" 
                                name="price_sale" id="exampleInputName1" placeholder="Price">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="types[]" value="Rent" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">For Rent</label>
                            </div>
                            <input type="text" class="form-control" 
                                name="price_rent" id="exampleInputName1" placeholder="Price">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="types[]" value="Rental" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">For Rent</label>
                            </div>
                            <input type="text" class="form-control" 
                                name="price_rental" id="exampleInputName1" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Description</label>
                        <textarea class="form-control" id="input-file-now-custom-3" name="description" required="" rows="8"
                            placeholder="Description"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- select -->
                            <div class="form-group">
                                <label for="image">Cover</label>
                                <div class="input-group">
                                    <div class="custom-file ">
                                        <input type="file" id="file-ip-1" class="form-control m-0" accept="image/*" name="cover"
                                            onchange="showPreview(event);">
                                    </div>
                                    <div class="form__files-container">
                                        <div class="form__image-container-edit" data-index="${index}">
                                            <label
                                            class="form__files-container-form ">
                                            <img class="form__image " id="file-ip-1-preview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <!-- select -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="upload-files" class="form-control m-0" name="images[]"
                                            multiple>
                                    </div>
                                    <div class="form__files-container" id="files-list-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('properties.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
        var bodyParser = require('body-parser');
        app.use(bodyParser.json({
            limit: "50mb"
        }));
        app.use(bodyParser.urlencoded({
            limit: "50mb",
            extended: true,
            parameterLimit: 50000
        }));
    </script>
@endsection
