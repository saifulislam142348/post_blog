@extends('layout.layouts')

@section('content')
    <div class="jumbotron">
        <div><a href="{{ route('user') }}" class="btn btn-success ">Back</a></div>

        <hr>
        @if (session('status'))
            <h6>
                <span class="alert alert-success">{{ session('status') }}</span>

            </h6>
        @endif
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('background.imageStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span class="input-group-text ">Background Photo add</span>


                    <input type="hidden" value=" {{ Auth::user()->id }}" name="user_id"> 


                    <div class="input-group input-group mb-3 increment">

                        <br>
                        <input class="form-control input-group-sm " type="file" name="image">


                    </div>
                    <input type="submit" class="btn btn-success" value="save">
                </form>
            </div>
        </div>
    </div>
@endsection
