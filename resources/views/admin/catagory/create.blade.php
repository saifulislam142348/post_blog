@extends('layout.layouts')



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Catagory Add</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('AdminDashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Catagory Add</li>
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
                            <h3 class="card-title">CAtagory Add</h3>
                            <a href="{{route('Admincatagory')}}" class="btn btn-primary">Catagory Show</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <div class="jumbotron bg-info">
                                <div class="card">
                                   
                                    <div class="card-body">
                                        @if (session('status'))
                                            <h6 class="alert alert-success">{{ session('status') }}</h6>
                                        @endif
                                        @foreach ($errors->all() as $error)
                                        <span class="text-danger">{{ $error }}</span>
                                     @endforeach
                                        <form action="{{route('catagoryStore')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                
                                         
                
                                    
                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text">name</span>
                                                <input type="text" name="name" class="form-control">
                                              
                                            </div>
                                           
                                           
                                         
                                           
                                         
        
                                           
                                           
                
                
                                            <input class="btn btn-success" name="submit" type="submit" value="submit"><br>
                
                
                                        </form>
                
                                    </div>
                                </div>
        
        
                            </div>
        
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