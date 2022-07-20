@extends('layout.layouts')



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark ">Comment  list</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('AdminDashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Coment  list</li>
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
                            <h3 class="card-title">Coment  list</h3>
                           
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>post</th>
                                    <th>Catagory</th>
                                    <th>title</th>
                                    <th>slug</th>
                                    <th>image</th>
                                    <th>description</th>
                                    <th>comment</th>
                                    <th>CommentReplay</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    <tr>
                                        <td>1</td>
                                        <td>saiful</td>
                                        <td>post</td>
                                        <td>catagot</td>
                                        <td>tile</td>
                                     
                                        <td>image</td>
                                        <td>descrition</td>
                                        <td>cooment</td>
                                        <td>commenntreplay</td>
                                        <td>
                                        
                                        </td>
                                        <td class="d-flex">
                                            <a href="" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                            <form action="" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf 
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                            </form>
                                            {{-- <a href="{{ route('category.show', [$category->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a> --}}
                                        </td>
                                    </tr>
                             
                                    <tr>
                                        <td colspan="5">
                                            <h5 class="text-center">No Coment Replay list found.</h5>
                                        </td>
                                    </tr>

                            
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