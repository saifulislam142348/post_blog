@extends('layout.layouts')

@section('content')
<ul class="navbar-nav mr-auto text-capitalize">
    <li class="nav-item "><a href="{{route('userDashboard')}}" class="nav-link active">home</a></li>
    <li class="nav-item"><a href="{{route('userprofile')}}" class="nav-link active">profile</a></li>
 
    <li class="nav-item"><a href="{{route('usercomment')}}" class="nav-link active">comment</a></li>
    <li class="nav-item"><a href="{{route('usercommentReplay')}}" class="nav-link active">CommentReplay</a></li>
    
    <li class="nav-item"><a href="{{route('')}}" class="nav-link active">likePosts</a></li>

    
</ul>


@endsection