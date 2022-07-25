@extends('layout.layouts')



@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-sm-4">
                    <div class="btn-group">
                        <button class="btn btn-success" type="button">
                            <a href="{{ route('AdminDashboard') }}"></a> Dashboard

                        </button>
                        <button class="btn btn-danger" type="button">
                            <div class="" aria-labelledby="navbarDropdown">
                                <a class="" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        </button>

                    </div>

                    <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <strong> Menu  Bar</strong>

                        </button>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <li class="">
                                <a class=" btn dropdown-item " href="{{ route('Adminuser') }}">
                                    <span class="btn btn-outline-success list-group-item">User</span>
                                </a>
                            </li>
                            <li>
                                <a class=" btn dropdown-item " href="{{ route('Adminposts') }}">
                                    <span class="btn btn-outline-success list-group-item">Post</span>
                                </a>
                            </li>
                            <li>
                                <a class=" btn dropdown-item " href="{{ route('Adminphoto') }}"> <span
                                        class="btn btn-outline-success list-group-item">Post Photo</span></a>
                            </li>
                            <li>
                                <a class=" btn dropdown-item " href="{{ route('Admincatagory') }}"> <span
                                        class="btn btn-outline-success list-group-item">Catagory</span></a>
                            </li>
                            <li>
                                <a class=" btn dropdown-item " href="{{ route('Adminlvote') }}"> <span
                                        class="btn btn-outline-success list-group-item">Votes count</span></a>
                            </li>
                            <li>
                                <a class=" btn dropdown-item " href="{{ route('Admincomment') }}"> <span
                                        class="btn btn-outline-success list-group-item">Comment</span></a>
                            </li>
                            <li>
                                <a class=" btn dropdown-item " href="{{ route('AdmincommentReplay') }}"> <span
                                        class="btn btn-outline-success list-group-item">CommentReplay</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8">

                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark">Dashboard</h1>
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


                                                            <div class="dropdown">
                                                                <button class="btn btn-info dropdown-toggle btn-lg"
                                                                    type="button" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    User
                                                                    <span
                                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                    {{$user->count()}}

                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <div class="container">
                                                                        <div class="jumbotron">
                                                                            <table class="table table-striped ">
                                                                                <tr>
                                                                                    <th>id</th>
                                                                                    <th>name</th>
                                                                                    <th>email</th>
                                                                                    <th>Photo</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>saiful</td>
                                                                                    <td>sai@gmail.com</td>
                                                                                    <td>
                                                                                        <img src="" alt="">
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="dropdown">
                                                                <button class="btn btn-info dropdown-toggle btn-lg"
                                                                    type="button" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Post
                                                                    <span
                                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                      {{$post->count()}}

                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <div class="container">
                                                                        <div class="jumbotron">
                                                                            <table class="table table-striped ">
                                                                                <tr>
                                                                                    <th>id</th>
                                                                                    <th>name</th>
                                                                                    <th>email</th>
                                                                                    <th>post</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>saiful</td>
                                                                                    <td>sai@gmail.com</td>
                                                                                    <td>
                                                                                        post
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="dropdown">
                                                                <button class="btn btn-info dropdown-toggle btn-lg"
                                                                    type="button" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Profile photo
                                                                    <span
                                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                        {{$profileImage->count()}}

                                                                    </span>
                                                                    background image
                                                                    <span
                                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                        {{$backgroundImage->count()}}

                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">


                                                                    <!-- Gallery -->
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                                alt="Boat on Calm Water" />

                                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                                alt="Wintry Mountain Landscape" />
                                                                        </div>

                                                                        <div class="col-lg-4 mb-4 mb-lg-0">
                                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                                alt="Mountains in the Clouds" />

                                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                                alt="Boat on Calm Water" />
                                                                        </div>

                                                                        <div class="col-lg-4 mb-4 mb-lg-0">
                                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                                alt="Waves at Sea" />

                                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                                alt="Yosemite National Park" />
                                                                        </div>
                                                                    </div>
                                                                    <!-- Gallery -->


                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="dropdown">
                                                                <button class="btn  btn-info dropdown-toggle btn-lg"
                                                                    type="button" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Catagory
                                                                    <span
                                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                        99+

                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <div class="container">
                                                                        <div class="jumbotron">
                                                                            <table class="table table-striped ">
                                                                                <tr>
                                                                                    <th>id</th>
                                                                                    <th>name</th>
                                                                                    <th>Catagory</th>
                                                                                    <th>Count</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>saiful</td>
                                                                                    <td>sagmail.com</td>
                                                                                    <td>
                                                                                        3
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    =

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
