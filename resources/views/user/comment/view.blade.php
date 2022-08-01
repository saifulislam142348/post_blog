@extends('layout.layouts')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Comment List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user') }}">Home</a></li>
                        <li class="breadcrumb-item active">Comment list</li>
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
                                <h3 class="card-title">Comment List</h3>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>comment</th>

                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        
                                        <td>
                                            <ul>
                                                @foreach ($post->comments->toArray() as $item)
                                                <li>{{$item['message']}}</li>

                                             
                                                <form action="{{route('replaystore')}}" method="post">
                                                    @csrf
                                                    
                                                 
                                                <input type="hidden" name="comment_id" value="{{$item['id']}}">
                                                <input type="hidden" name="user_id" value="{{ $post->user_id }}">
                                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                 <div class="mb-3">
                                                     
                                                     <input type="text" name="replay" class="form-control">
                                    
                 
                                                     <input  type="submit" class="btn btn-outline-success btn-danger" value="Replay">
                                                 </div>
                                             
                                             </form>
                                      
                                             @endforeach

                                             
                                            </ul>
                                           
                                        </td>

                                        <td>
                                          <div class="jumbotron">
                                            <div class="row">
                                                <div class="col-12">
                                               
                                                </div>
                                               </div>
                                          </div>
                                           
                                            
                                        </td>






                                        @if (session('status'))
                                            <h6 class="alert alert-success">{{ session('status') }}</h6>
                                        @endif
                                        
                                        <td class="d-flex">
                                            <a href="" class="btn btn-sm btn-primary mr-1"> <i
                                                    class="fas fa-edit"></i> </a>
                                            <form action="" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"> <i
                                                        class="fas fa-trash"></i> </button>
                                            </form>
                                            {{-- <a href="{{ route('category.show', [$category->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a> --}}
                                        </td>
                                    </tr>



                                
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
