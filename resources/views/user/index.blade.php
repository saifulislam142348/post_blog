@extends('layout.layouts')

@section('content')
    <!-----------------------------------nav start--------------------------------------->
    @include('user/pages/navbar')
    <!---------------------------------------------Ends navigation------------------------------>




    <hr>
    <hr>
    <!-------------------posts---------------------------->
    @include('user/pages/user_posts')
    <!---------posts end-------->


    <!------friend list start-------->
    @include('user/pages/friend_list')
    <!------friend list end-------->
@endsection
