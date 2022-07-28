<div class="col-12 col-lg-6">
    <div class="middle-column">

        <div class="d-grid gap-2">

            <a class="btn btn-primary" href="{{ route('userpost') }}">Post</a>

        </div>

        <hr>
        <hr>

        <div class="card-body">
            @foreach ($post as $item)
                <div class="media">



                    <div class="media-body">
                        <div>
                            <div class="row">


                                <div class="col-lg-6"> <span>
                                        @if (!$item->users->profileImages->isEmpty())
                                            <img src="{{ asset($item->users->profileImages->first()->image) }}"
                                                alt="img" width="120px" height="120px"
                                                class="rounded-circle border border-success mt-n5 my-3">
                                        @else
                                            <img src="{{ asset('img/no_image.jpg') }}" alt="img" width="120px"
                                                height="120px" class="rounded-circle border border-success mt-n5 my-3">
                                        @endif



                                        <h5> {{ $item->users->name }}</h5>

                                    </span></div>
                                <div class="col-lg-6">

                                    <!-----post edit delete-------->
                                    @include('user/pages/post_update_delete')
                                    <!--post update--->

                                </div>
                            </div>

                            <ul class="bg-green">

                                <ol><small>Time:{{ $item->created_at }}</small></ol>
                                <ol><small>Title:{{ $item->title }}</small></ol>
                                <ol><small>catagory:{{ $item->catagories->name }}</small></ol>


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

                <!-- Gallery -->
                @include('user/pages/post_image')

                <!-- Gallery -->

                <!------------------------------posts--------------->
                <div class="jumbotron">
                    <div class="d-flex flex-row bd-highlight mb-3">

                        @if ($item->votes->isEmpty())
                            <form action="{{ route('post.like') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"
                                    class="form-control">
                                <input type="hidden" name="post_id" value="{{ $item->id }}" class="form-control">
                                <button><i class="fa fa-thumbs-up"></i></button>

                            </form>
                        @else
                            {{-- {{dd($item)}} --}}
                            {{-- @php

                     
                 @endphp --}}
                            <form action="{{ url('deletelike/' . $item->votes[0]->post_id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn-success"><i class=" fa fa-thumbs-up"></i></button>

                            </form>
                        @endif



                    </div>


                    <button type="button" class="btn btn-primary">
                        <a href="{{ url('user/comment/index/' . $item->id) }}"> <span class="badge  "
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="far fa-comment">comment</i>
                            </span>
                        </a>
                    </button>
                    <button type="button " class="btn btn-primary ">
                        <a href="{{ url('user/comment/view/' . $item->id) }}">
                            <span class="badge">
                                <i class="far fa-comment">Replay</i>
                            </span>
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-comment">view</i>
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

                        </div>
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
