@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
<section class="content">
    
        <!-- Content Header (Page header) -->
        <section class="content-header" >
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
                    <div class="col-sm-6" >
                        <ol class="breadcrumb float-sm-right" style="padding: 0px 30px">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Location</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Default box -->
        <div class="card" style="margin: 0px 40px">
            <div class="card-header">
                <h3 class="card-title">Address</h3>
                
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            <div class="card-body p-0">
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
                                Phone Number
                            </th>
                            <th class="text-center">
                                Email
                            </th>
                            <th class="text-center">
                                Message
                            </th>

                            <th class="text-center">
                                Create At
                            </th>

                            <th style="width: 20%" class="text-center">
                                Operations
                            </th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($contacts as $key => $contact)
                            <tr>
                                <td>
                                    {{  $key+$contacts->firstItem() }}
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $contact->name }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        +855 {{ $contact->phone }}
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
                                        {{ $contact->email }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $contact->message }}
                                    </a>
                                </td>

                                <td class="text-center">
                                    <a>
                                        {{ $contact->created_at }}
                                    </a>
                                </td>
                                {{-- <td class="project-state">
                                <span class="badge badge-success">Renting</span>
                            </td> --}}
                                <td class="project-actions text-right">

                                    <div class="project-actions text-right">
                                        <div class="project-actions text-center">
                                            <form action="{{ route('contactAdmins.destroy', $contact->id) }}"
                                                method="POST">
                                                <a href="{{ route('contactAdmins.edit', $contact->id) }}"
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
                <p>{!! $contacts->links() !!}</p>
            </div>
            <!-- /.card-body -->
        </div>
   
    <!-- /.card -->

</section>
</div>

@endsection
