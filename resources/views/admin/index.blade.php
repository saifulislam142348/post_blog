@extends('layout.layouts')



@section('content')
    <div class="container">
       
        <div class="jumbotron">
            <div class="row">
                <div class="col-sm-4">
                   @include('admin/pages/navbar')
                </div><!----col-sm-4-end---->
                <div class="col-sm-8">

                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark">Dashboard</h1>
                                    @if (session('status'))
                                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                                @endif
                                </div><!-- /.col -->
                                <div class="col-sm-6">

                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header -->

                    <!-- Main content -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">





                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="card-title">All</h3>
                                                <a href="" class="btn btn-primary">All</a>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <div class="container">
                                                <div class="jumbotron">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            @include('admin/pages/user_count')
                                                        </div>
                                                        <div class="col-3">
                                                            @include('admin/pages/post_count')
                                                        </div>
                                                        <div class="col-3">
                                                            @include('admin/pages/image_count')
                                                        </div>
                                                        <div class="col-3">
                                                            @include('admin/pages/catagory_count')
                                                        </div>
                                                    </div>


                                                    =

                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div><!---col-lg-12 ends--->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
