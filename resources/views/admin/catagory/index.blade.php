@extends('layout.layouts')



@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('AdminDashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category list</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Category List</h3>
                                <a href="{{ route('catagorycreate') }}" class="btn btn-primary">Create Category</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>status</th>

                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catagory as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>

                                            <td>
                                                @if ($item->type == 1)
                                                <a class="btn btn-success" href="{{url('statuschange/'.$item->id)}}">active</a>
                                                
                                                @else
                                                 <a class="btn btn-danger" href="{{url('statuschange/'.$item->id)}}">inactive</a>
                                                @endif
                                            </td>
                                            @if (session('status'))
                                                <h6 class="alert alert-success">{{ session('status') }}</h6>
                                            @endif
                                            <td class="d-flex">
                                                <a href="{{ url('admin/catagory/edit/' . $item->id) }}"
                                                    class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                                <form action="{{ url('Admin/catagory/index/' . $item->id) }}" class="mr-1"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"> <i
                                                            class="fas fa-trash"></i> </button>
                                                </form>
                                                {{-- <a href="{{ route('category.show', [$category->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a> --}}
                                            </td>
                                           
                                      
                                            <td>
                                              
                                            </td>
                                           
                                        </tr>
                                    @endforeach
                                    <tr>
                                  
                                            
                                  
                                       
                                        <td colspan="5">


                                    </tr>

                                    <td>
                                            
                                        <select name="" id="">
                                            <option value="1">active</option>
                                            <option value="0">inactive</option>
                                        </select>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
