@extends('layout.layouts')



@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> User Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user') }}">Home</a></li>
                        <li class="breadcrumb-item active">User Post</li>
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
                                <h3 class="card-title">User Post</h3>
                                <a href="{{route('user')}}" class="btn btn-primary">User Home</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <div class="jumbotron bg-info">
                                    <div class="card">

                                        <div class="card-body">
                                            @if (session('edit'))
                                                <h6 class="alert alert-success">{{ session('edit') }}</h6>
                                            @endif
                                          
                                      
                                            <form action="{{url('user/post/index/update/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')

                                                <div class="input-group input-group-sm mb-3">
                                                
                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"
                                                        class="form-control">

                                                </div>

                                                <div class="input-group input-group-sm mb-3">
                                                    <span class="input-group-text">Catagory Select</span>
                                                    <select class="form-control" name="category_id">
                                                        <option selected value="$post->catagory_id">Open this select menu</option>
                                                        @foreach ($catagory as $item)
                                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                        @endforeach


                                                    </select>

                                                </div>
                                                <div class="input-group input-group-sm mb-3">
                                                    <span class="input-group-text">Title</span>

                                                    <input type="text" name="title" value="{{$post->title}}" class="form-control">

                                                </div>


                                                <div class="input-group input-group mb-3 increment">
                                                 
                                                    <br>
                                                    <input class="form-control input-group-sm " type="file" name="image">
                                                  <img src="{{asset($post->image)}}" style="height: 60px " alt="">
                                                   
                                                </div>
                                              
                                              
                                                <div class="input-group input-group-sm mb-3">
                                                    <span class="input-group-text">Body</span>
                                                    <textarea type="text" name="body" value ="{{$post->body}}" class="form-control"></textarea>

                                                </div>

                                       

                                                <input class="btn btn-success" type="submit" value="submit"><br>


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
