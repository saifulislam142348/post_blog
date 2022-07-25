@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (auth()->user()->is_admin == 'admin')
                            <a href="{{ route('AdminDashboard') }}">Admin</a>
                        @else
                            <div class="jumbotro">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-body">

                                            <h5 class="mb-3 card-title">About <small><a href="#"
                                                        class="ml-1">Edit</a></small>
                                            </h5>



                                            <p class="card-text"> <i class="fas fa-user mr-2"></i> Name <a href="#"
                                                    class="text-decoration-none"> {{ Auth::user()->name }}</a></p>
                                            <p class="card-text"> <i class="fas fa-user mr-2"></i> E-mail <a href="#"
                                                    class="text-decoration-none"> {{ Auth::user()->email }}</a></p>
                                            <p class="card-text"> <i class="fas fa-calendar-week mr-2"></i> Went to <a
                                                    href="#" class="text-decoration-none">
                                                    {{ Auth::user()->about }}</a></p>



                                            <p class="card-text"> <i class="fas fa-user mr-2"></i> type <a href="#"
                                                    class="text-decoration-none"> {{ Auth::user()->type }}</a></p>







                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="jumbotron">
                                            <a class="btn  btn-light btn-outline-info"
                                                href="{{ route('profil.image') }}">profile Image Add</a>
                                              <hr>
                                            <a
                                                class=" btn btn-light btn-outline-info "href="{{ route('background.image') }}">background
                                                image add</a>
                                        </div>


                                        <h2>
                                            <div class="jumbotron bg-dark">
                                                <a class="btn btn-outline-success form-control"
                                                    href="{{ route('user') }}">Post & view</a>
                                            </div>
                                        </h2>

                                        <div class="jumbotron">
                                            <h6><small>All Profile Image upload</small></h6>
                                            @foreach (Auth::user()->profileImages as $item)
                                                <img src="{{ asset($item->image) }}" width="55px" height="55px">
                                            @endforeach


                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
