@extends('layout.layouts')

@section('content')
<nav class="navbar navbar-expand-md navbar-dark" style="background-color:#3097D1">
    <a href="index.html" class="navbar-brand"><img src="{{asset('img/brand-white.png')}}" alt="logo" class="img-fluid" width="80px" height="100px"></a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>


    <div class="collapse navbar-collapse" id="responsive">
        <ul class="navbar-nav mr-auto text-capitalize">
               
                <li class="nav-item"><a href="{{route('user')}}" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="{{route('userprofile')}}" class="nav-link active">profile</a></li>
             
                <li class="nav-item"><a href="{{route('usercomment')}}" class="nav-link active">comment</a></li>
                <li class="nav-item"><a href="{{route('userReplayView')}}" class="nav-link active">CommentReplay</a></li>
                
                <li class="nav-item"><a href="{{route('userlikeposts')}}" class="nav-link active">likePosts</a></li>
  
                
            </ul>

        <form action="" class="form-inline ml-auto d-none d-md-block">
            <input type="text" name="search" id="search" placeholder="Search" class="form-control form-control-sm">
        </form>
        <a href="notification.html" class="text-decoration-none" style="color:#CBE4F2;font-size:22px;"><i class="far fa-bell ml-3 d-none d-md-block"></i></a> 
        <img src="{{asset('img/avatar-dhg.png')}}" alt="" class="rounded-circle ml-3 d-none d-md-block" width="32px" height="32px">





    </div>




</nav>


<!---------------------------------------------Ends navigation------------------------------>






<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark ">Votes list</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                 
                    <li class="breadcrumb-item active">Votes list</li>
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
                            <h3 class="card-title">votes list</h3>
                           
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
                                    <th>votes</th>
                                   
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
                                        <td>slug</td>
                                        <td>image</td>
                                        <td>descrition</td>
                                        <td>cooment</td>
                                       
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
                                            <h5 class="text-center">No Votes list found.</h5>
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

