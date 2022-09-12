@extends('backend.layouts.app')
@section('content')

    <div class="content-wrapper px-5 mt-4">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-center">Edit Property</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('properties.update', $properties->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group" >
                        <label for="amenity">Amenity</label>
                        <input type="text" class="form-control" name="amenity" id="exampleInputName1" value="{{ $properties->amenity }}"
                            placeholder="">
                    </div>
                    <div class="form-group" >
                        <label for="agent_id">Agent_id</label>
                        <input type="text" class="form-control" name="agent_id" id="exampleInputName1" value="{{ $properties->agent->id }}"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="name">Name Property</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1"
                            placeholder="Enter Name" value="{{ $properties->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="exampleInputName1"
                            placeholder="Address" value="{{ $properties->address }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- select -->
                            <div class="form-group">
                                <label for="bedroom">Bedroom</label>
                                <input type="text" class="form-control" name="bedroom" id="exampleInputName1"
                                    placeholder="Bedroom" value="{{ $properties->bedroom }}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- select -->
                            <div class="form-group">
                                <label for="bathroom">Bathroom</label>
                                <input type="text" class="form-control" name="bathroom" id="exampleInputName1"
                                    placeholder="Bathroom" value="{{ $properties->bathroom }}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- select -->
                            <div class="form-group">
                                <label for="size">Square</label>
                                <input type="text" class="form-control" name="size" id="exampleInputName1"
                                    placeholder="Size" value="{{ $properties->size }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        {{-- <div class="row">
                            <label for="types[]">Reselect Type</label>
                            <div class="col-sm-4">
                                <input type="checkbox" name="types[]" value="Sale"> For Sale 
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" name="types[]" value="Rent">For Rent 
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <input type="checkbox" name="types[]" value="Rental">For Rental 
                            </div>
                        </div> --}}
                        <label for="types[]">Type</label>
                        <div class="col-sm-4">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="types[]" value="Sale" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">For Sale</label>
                            </div>
                            <input type="text" class="form-control" value="{{ $properties->price_sale }}"
                                name="price_sale" id="exampleInputName1" placeholder="Price">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="types[]" value="Rent" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">For Rent</label>
                            </div>
                            <input type="text" class="form-control" value="{{ $properties->price_rent }}"
                                name="price_rent" id="exampleInputName1" placeholder="Price">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="types[]" value="Rental" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">For Rent</label>
                            </div>
                            <input type="text" class="form-control" value="{{ $properties->price_rental }}"
                                name="price_rental" id="exampleInputName1" placeholder="Price">
                        </div>
                    </div>
                    <!-- select -->
                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea class="form-control" id="input-file-now-custom-3"name="description" required="" rows="8"
                            placeholder="Description">{{ $properties->description }}</textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- select -->
                            <div class="form-group">
                                <label for="image">Cover</label>
                                <div class="input-group">
                                    <div class="custom-file ">
                                        <input type="file" id="imgInp" class="form-control m-0" accept="image/*"
                                            name="cover" onchange="showPreview(event);">
                                    </div>
                                    <div class="form__files-container " id="files-list-container-cover">
                                        <div class="form__image-container-edit" data-index="${index}">
                                            <img src="/cover/{{ $properties->cover }}" class="form__image " id="blah">
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
                                        <input type="file" id="upload-files" class="form-control m-0" name="images[]" multiple>
                                    </div>
                                    <div class="form__files-container" id="files-list-container">
                                        @if (count($properties->images) > 0)
                                            @foreach ($properties->images as $img)
                                                <a class="form__image-container" href="{{ url('admin/property-image/'.$img ->id.'/deleteimage') }}" >
                                                    <img src="/property/{{ $img->image }}" class="form__image">
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
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
        {{-- <div class="col-lg-3">
                <p>Cover:</p>
                <form action="/deletecover/{{ $properties->id }}" method="post">
                <button class="btn text-danger">X</button>
                @csrf
                @method('delete')
                </form>
                <img src="/cover/{{ $properties->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>


                 @if (count($properties->images) > 0)
                 <p>Images:</p>
                 @foreach ($properties->images as $img)
                 <form action="/deleteimage/{{ $img->id }}" method="post">
                     <button class="btn text-danger">X</button>
                     @csrf
                     @method('delete')
                     </form>
                 <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                 @endforeach
                 @endif

        </div> --}}
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script>
        imgInp.onchange = evt => {
        const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>


@endsection
