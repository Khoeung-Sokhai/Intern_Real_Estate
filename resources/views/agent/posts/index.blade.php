@extends('agent.layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
        
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6" style="padding: 0px 30px">
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                        aria-label="Search" id="myInput">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right" style="padding: 0px 30px">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Property</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Default box -->
            <div class="card" style="margin: 0px 40px">
                <div class="card-header">
                    <h3 class="card-title">Property</h3>
                    <a href="/manager/post/create">
                        <a class="btn btn-success float-sm-right btn-info btn-sm" href="{{ route('posts.create') }}">
                            Create New Address</a>
                    </a>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card-body p-0" style="height: 600px">
                    <table id="example2" class="table table-bordered table-hover table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID.
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Address
                                </th>
                                <th class="text-center">
                                    Prices
                                </th>
                                
                                <th class="text-center">
                                    Cover
                                </th>
                                {{-- <th style="width: 10%" class="text-center">
                                    Status
                                </th> --}}
                                <th style="width: 10%" class="text-center">
                                    Create_At
                                </th>
                                <th style="width: 22%" class="text-center">
                                    Operations
                                </th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @php $i=1; @endphp
                            
                            @foreach ($properties as $key =>$property)
                                @if($property->agent_id  ==  Auth::user()->id)
                                <tr>
                                    <td class="text-center">
                                        <a>
                                            
                                            {{$key+$properties->firstItem()}}
                                            
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a>
                                            {{ $property->name }}
                                        </a>
                                    </td>
                                    {{-- <td class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                src="{{ asset('backend/dist/img/avatar.png') }}">
                                        </li>
                                    </ul>
                                </td> --}}
                                    <td class="text-center">
                                        <a>
                                            {{ $property->address }}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a>
                                            ${{ $property->price_sale }}.00
                                        </a>
                                    </td>
                                
                                    <td class="text-center">
                                        <img src="{{asset('/cover/' . $property->cover) }}" class="img-responsive" style="max-height:50px; max-width:80px" alt="" srcset="">
                                    </td>
                                    <td class="text-center">
                                        <a>
                                            {{ $property->created_at }}
                                        </a>
                                    </td>
                                    {{-- <td class="project-state">
                                    <span class="badge badge-success">{{ $product->status }}</span>
                                </td> --}}
                                    <td class="project-actions text-right">
                                        <form action="{{ route('posts.destroy', $property->id) }}" method="post">
                                             @csrf
                                            @method('DELETE')
                                            <a href="{{ route('posts.show', $property->id) }}"
                                                class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                                title="Edit">
                                                <i class="fas fa-pencil-alt"></i> show
                                            </a>
                                            <a href="{{ route('posts.edit', $property->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            {{-- <button type="submit" style="border: none" class="action_btn"
                                                data-toggle="tooltip" data-placement="top" title="Delete"> <i
                                                    class="fas fa-trash"></i></button> --}}
                                            <input name="_method" type="hidden" value="DELETE" >
                                            <button type="submit" class=" btn btn-danger btn-sm btn-flat show-alert-delete-box " data-toggle="tooltip" title='Delete' style="border-radius: 4px">
                                                <i class='fas fa-trash' style='color:#ffffff; '></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div style="position: absolute; bottom: 0px">{!! $properties->links() !!}</div>
                </div>
                <!-- /.card-body -->
            </div>
       
   
        <!-- /.card -->

    </section> 
</div>  
@endsection