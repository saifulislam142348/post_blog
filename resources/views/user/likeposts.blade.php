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
                <li class="nav-item"><a href="{{route('usercommentReplay')}}" class="nav-link active">CommentReplay</a></li>
                
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































<div id="right-panel" class="right-panel">
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Liked Posts</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li>
                            <a href="#" class="active">Liked Posts</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                   

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Liked Posts Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Views & Likes</th>
                                        <th>Created_At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- .content -->
@endsection

