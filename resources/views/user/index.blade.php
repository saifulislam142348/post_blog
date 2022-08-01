@extends('layout.layouts')

@section('content')
    <!-----------------------------------nav start--------------------------------------->
    @include('user/pages/navbar')
    <!---------------------------------------------Ends navigation------------------------------>




    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <!-----profile background------->
                @include('user/pages/profile_background_photo')
                <!-----profile background end------->

                <!---------------------------------------------about start------------------------------>
                @include('user/pages/about')
                <!----------about end------------>
                <!---------------------------------------------photoes start------------------------------>
                @include('user/pages/photoes')
                <!----------photoes end------------>
                <!------friend list start-------->
                @include('user/pages/friend_list')
                <!------friend list end-------->
            </div>
            </div>




            <!-------------------posts---------------------------->
            @include('user/pages/user_posts')
            <!---------posts end-------->
            
        @endsection
