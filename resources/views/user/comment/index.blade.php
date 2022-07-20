@extends('layout.layouts')



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Comment </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('user')}}">Home</a></li>
                    <li class="breadcrumb-item active">Comment </li>
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
                            <h3 class="card-title">Comment</h3>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <form>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Comment</label>
                                  <input type="text" class="form-control">
                                  <div  class="form-text"><span class="input-group-text"><strong>                            <a href="{{route('usercommentReplay')}}" class="btn btn-primary">Comment Replay </a></strong></span></div>
                                </div>
                              
                                
                                <button type="submit" class="btn btn-primary">send</button>
                              </form>
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