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

        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="middle-column">
            <hr>
            <hr>
            <div class="d-grid gap-2">

                <a class="btn btn-primary" href="{{ route('userpost') }}">Post</a>

            </div>
            <hr>
            <hr>


            <div class="card-body">
                @foreach ($post as $item)
                    <div class="media">


                        <img src="{{ asset($item->users->profileImages[count($item->users->profileImages) - 1]->image) }} "
                            alt="img" width="120px" height="120px"
                            class="rounded-circle border border-success mt-n5 my-3">

                        <div class="media-body">
                            <div>
                                <div class="row">
                                    <div class="col-lg-6">  <span>
                                        <h5> {{ $item->users->name }}</h5>
                                    </span></div>
                                    <div class="col-lg-6">
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-bars"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                @if (session('edit'))
                                                <h6 class="alert alert-success">{{ session('status') }}</h6>
                                            @endif
                                                <li><a class="class="btn btn-sm btn-success"
                                                        href="{{url('user/post/edit/'.$item->id)}}"><i class="fas fa-edit"></i>Edit</a></li>
                                                <li>
                                                    @if (session('delete'))
                                                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                                                @endif
                                               <form action="{{url('user/post/delete/'.$item->id)}}" method="post"> 
                                                 @method('DELETE')
                                                 @csrf
                                                 <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash">Delete</i> </button>
                                            </form>
                                                    </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              
                                <ul class="bg-green">
                                    <ol><small>Time:{{ $item->created_at }}</small></ol>
                                    <ol><small>Title:{{ $item->title }}</small></ol>
                                    <ol><small>catagory:education</small></ol>


                                </ul>

                                <p class="card-text text-justify">{{ $item->body }}</p>

                                <div class="row no-gutters mb-3">
                                    <div class="col-6 p-1 text-center">

                                    </div>
                                </div>
                            </div>
                            <hr>



                        </div>
                    </div>
                    <hr>
                    <!-- Gallery -->
                    @include('user/pages/post_image')

                    <!-- Gallery -->

                    <!------------------------------posts--------------->
                    <div class="jumbotron">
                        <div>

                        </div>

                        <button type="button" class="btn btn-primary">
                            <i class="far fa-comment"></i>


                            <a href="{{ url('user/comment/index/' . $item->id) }}"> <span class="badge bg-secondary "
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Comment (4)</span></a>
                        </button>
                        <button type="button" class="btn btn-primary">



                            <a href="{{ url('user/comment/view/' . $item->id) }}"> <span class="badge bg-secondary">
                                    comment Replay(4)</span></a>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    comment & replay
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <table class=" table  table-striped">
                                        <tr class="table-primary">

                                            <th scope="col">Comment</th>

                                        </tr>
                                        <tr>


                                        </tr>

                                        <tr>
                                            @foreach ($item->comments as $item)
                                        <tr>
                                            <td>{{ $item->message }}
                                            </td>

                                            <td>

                                            <th scope>Replay</th>


                                            @foreach ($item->replies as $it)
                                                <td>
                                                    <ul>
                                                        <li>
                                                            {{ $it->replay }}
                                                        </li>
                                                    </ul>


                                                </td>
                                            @endforeach

                                        </tr>
                                        </td>

                                        </tr>
                @endforeach
                </tr>

                </table>
                </ul>
            </div>
            </button>


        </div>
        <!-------------------posts end---------------------------->
        <hr>
        @endforeach

    </div>

</div>

</div>
