@extends('backend.layouts.app')
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
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Default box -->
            <div class="card" style="margin: 0px 40px">
                <div class="card-header">
                    <h3 class="card-title">List All Customers</h3>
                    <a class="btn btn-success float-sm-right btn-info btn-sm" href="{{ route('users.create') }}"> Create New User</a>

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
                                    ID
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center">
                                    Type
                                </th>
                                <th class="text-center">
                                    Profile
                                </th>
                               
                                <th class="text-center">
                                    Create At
                                </th>
                                <th style="width: 15%" class="text-center">
                                    Operations
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php{{ $number = $users->firstItem()}};?>
                            @foreach ($users as $key => $user)
                          

                            
                            <tr>
                                <td>
                                    {{ $number++}}.
                                </td>
                                <td class="text-center">
                                    <a>
                                    {{ $user->name }}    
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
                                    {{ $user->email }}
                                        
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                    {{$user->type}}                                        
                                    </a>
                                </td>
                                <td class="text-center">
                                   
                                   
                                        <span>
                                            <img src="/profiles/avatars/{{ $user->avatar }}" alt="author-image"
                                            class="img-circle elevation-2" style="width: 40px; height: 40px">
                                        </span>   
                                   
                                    
                                </td>
                                
                                <td class="text-center">
                                    <a>
                                        {{ $user->created_at}}
                                    </a>
                                </td>
                                <td class="project-actions text-right">

                                    <div class="project-actions text-right">
                                        <div class="project-actions text-center">
                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                method="POST">
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                {{-- <button type="submit" style="border: none" class="action_btn"
                                                    data-toggle="tooltip" data-placement="top" title="Delete"> <i
                                                        class="fas fa-trash"></i></button> --}}

                                                <input name="_method" type="hidden" value="DELETE" >
                                                <button type="submit"
                                                    class=" btn btn-danger btn-sm btn-flat show-alert-delete-box "
                                                    data-toggle="tooltip" title='Delete' style="border-radius: 4px"><i class='fas fa-trash'
                                                        style='color:#ffffff; '></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                          

                           
                        @endforeach
                            
                        </tbody>
                    </table>
                    <div style="position: absolute; bottom: 0px">{!! $users->links() !!}</div>
                </div>
                <!-- /.card-body -->     
            </div>
    </section>
</div>
    
        <!-- /.card-body -->
   
    
@endsection
