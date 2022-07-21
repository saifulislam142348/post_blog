@extends('layout.layouts')

@section('content')
    <nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color:#3097D1">
        <a href="index.html" class="navbar-brand"><img src="{{ asset('img/brand-white.png') }}" alt="logo" class="img-fluid"
                width="80px" height="100px"></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span
                class="navbar-toggler-icon"></span></button>


        <div class="collapse navbar-collapse" id="responsive">
            <ul class="navbar-nav mr-auto text-capitalize">

                <li class="nav-item"><a href="{{ route('user') }}" class="nav-link active">Home <i class="fas fa-home"></i>
                    </a></li>
                <li class="nav-item"><a href="{{ route('userprofile') }}" class="nav-link active">profile <i
                            class="fas fa-user"></i></a></li>

                <li class="nav-item"><a href="{{ route('userprofile') }}" class="nav-link active">comment <i
                            class="far fa-comment"></i></a></li>
                <li class="nav-item"><a href="{{ route('userReplayView') }}" class="nav-link active">CommentReplay <i
                            class="far fa-comment"></i></a></li>

                <li class="nav-item"><a href="{{ route('userlikeposts') }}" class="nav-link active">likePosts <i
                            class="fa fa-thumbs-up"></i></a></li>


            </ul>

            <form action="" class="form-inline ml-auto d-none d-md-block">
                <input type="text" name="search" id="search" placeholder="Search"
                    class="form-control form-control-sm">
            </form>
            <a href="notification.html" class="text-decoration-none" style="color:#CBE4F2;font-size:22px;"><i
                    class="far fa-bell ml-3 d-none d-md-block"></i></a>
            <img src="{{ asset('img/avatar-dhg.png') }}" alt="" class="rounded-circle ml-3 d-none d-md-block"
                width="32px" height="32px">





        </div>





    </nav>

    <!---------------------------------------------Ends navigation------------------------------>

    <!---------------------------MOdal Section  satrts------------------->

    <div class="modal fade" id="modalview">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">

            <div class="modal-content">


                <div class="modal-header">
                    <div class="modal-title h4">Messages</div>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <div class="modal-body">


                    <ul class="list-unstyled">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-dhg.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>
                        <hr class="my-3">



                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-fat.jpg') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>


                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-mdo.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>

                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-dhg.png') }}" alt="img" width="60px"
                                    height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>
                        <hr class="my-3">



                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-fat.jpg') }}" alt="img" width="60px"
                                    height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>


                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-mdo.png') }}" alt="img" width="60px"
                                    height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>


                        <hr class="my-3">
                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-dhg.png') }}" alt="img" width="60px"
                                    height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>
                        <hr class="my-3">



                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-fat.jpg') }}" alt="img" width="60px"
                                    height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>


                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('img/avatar-mdo.png') }}" alt="img" width="60px"
                                    height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>




                    </ul>





                </div>
            </div>


        </div>


    </div>

    <!-------------------------------MOdal Ends---------------------------->



    <!-------------------------------------------Start Grids layout for lg-xl-3 columns and (xs-lg 1 columns)--------------------------------->


    <div class="container">
        <div class="row">


            <!--------------------------left columns  start-->

            <div class="col-12 col-lg-3">

                <div class="left-column">


                    <div class="card card-left1 mb-4">
                        <img src="{{ asset('img/photo-1455448972184-de647495d428.jpg') }}" alt=""
                            class="card-img-top img-fluid">
                        <div class="card-body text-center ">
                            <img src="{{ asset('img/avatar-dhg.png') }}" alt="img" width="120px" height="120px"
                                class="rounded-circle mt-n5">
                            <h5 class="card-title">Dave Gamache</h5>
                            <p class="card-text text-justify mb-2">I wish i was a little bit taller, wish i was a baller,
                                wish i had a girl… also.</p>
                            <ul class="list-unstyled nav justify-content-center">
                                <a href="#" class="text-dark text-decoration-none">
                                    <li class="nav-item">Friends <br> <strong>12M</strong></li>
                                </a>
                                <a href="#" class="text-dark text-decoration-none">
                                    <li class="nav-item">Enimes <br> <strong>1</strong></li>
                                </a>
                            </ul>

                        </div>




                    </div>


                    <div class="card shadow-sm card-left2 mb-4">

                        <div class="card-body">

                            <h5 class="mb-3 card-title">About <small><a href="#" class="ml-1">Edit</a></small>
                            </h5>

                            <p class="card-text"> <i class="fas fa-calendar-week mr-2"></i> Went to <a href="#"
                                    class="text-decoration-none">tangail</a></p>

                            <p class="card-text"> <i class="fas fa-user-friends mr-2"></i> Become a friend with <a
                                    href="#" class="text-decoration-none">Dhaka</a></p>
                            <p class="card-text"> <i class="far fa-building mr-2"></i> Work at <a href="#"
                                    class="text-decoration-none">Daratrix</a></p>
                            <p class="card-text"> <i class="fas fa-home mr-2"></i> Live in <a href="#"
                                    class="text-decoration-none">Mirpur</a></p>
                            <p class="card-text"> <i class="fas fa-map-marker mr-2"></i> From <a href="#"
                                    class="text-decoration-none">Rupnagor</a></p>




                        </div>





                    </div>




                    <div class="card shadow-sm card-left3 mb-4">

                        <div class="card-body">
                            <h5 class="card-title">Photos<small class="ml-2"><a href="#">.Edit </a></small></h5>

                            <div class="row">
                                <div class="col-6 p-1">
                                    <a href="img/left1.jpg" data-lightbox="id"><img src="{{ asset('img/left1.jpg') }}"
                                            alt="img" class="img-fluid my-2"></a>
                                    <a href="img/left2.jpg"data-lightbox="id"><img src="{{ asset('img/left2.jpg') }}"
                                            alt="img" class="img-fluid my-2"></a>
                                    <a href="img/left3.jpg"data-lightbox="id"><img src="{{ asset('img/left3.jpg') }}"
                                            alt="img" class="img-fluid my-2"></a>

                                </div>


                                <div class="col-6 p-1">
                                    <a href="img/left4.jpg"data-lightbox="id"><img src="{{ asset('img/left4.jpg') }}"
                                            alt="img" class="img-fluid my-2"></a>
                                    <a href="img/left5.jpg"data-lightbox="id"><img src="{{ asset('img/left5.jpg') }}"
                                            alt="img" class="img-fluid my-2"></a>
                                    <a href="img/left6.jpg"data-lightbox="id"><img src="{{ asset('img/left6.jpg') }}"
                                            alt="img" class="img-fluid my-2"></a>

                                </div>

                            </div>

                        </div>







                    </div>












                </div>





            </div>








            <!--------------------------Ends Left columns-->





            <!---------------------------------------Middle columns  start---------------->




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
                                <img src="{{ asset('img/avatar-dhg.png') }}" alt="img" width="55px"
                                    height="55px" class="rounded-circle mr-3">

                                <div class="media-body">
                                    <h5>{{ $item->user_id }}</h5>

                                    <ul class="bg-green">
                                        <ol><small>Time:{{ $item->created_at }}</small></ol>
                                        <ol><small>Title:{{ $item->title }}</small></ol>
                                        <ol><small>Title:education</small></ol>


                                    </ul>



                                    <p class="card-text text-justify">{{ $item->body }}</p>



                                    <div class="row no-gutters mb-3">


                                        <div class="col-6 p-1 text-center">




                                        </div>


                                    </div>


















                                </div>


                                <hr>

                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bars"></i>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item btn btn-outline-info " href="#">Edit</a></li>
                                        <li><a class="dropdown-item btn btn-outline-info " href="#">Delete</a></li>

                                    </ul>
                                </div>


                            </div>






                    </div>



                    <hr>


                    <!-- Gallery -->
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img height="100px" weight="300px" src="{{ asset($item->image) }}" class="img-thumbnail">


                        </div>
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img height="100px" weight="300px" src="{{ asset($item->image) }}" class="img-thumbnail">


                        </div>
                     
                        <!-- Gallery -->



                        <div class="jumbotron">



                            <h5 class="card-header">
                                <span class="comment-count btn btn-sm btn-outline-info"></span>
                                <small class="float-right">
                               
                                        <span title="Likes" id="saveLikeDislike" data-type="like"
                                            data-post="{{ $item->id }}"
                                            class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
                                            Like
                                            <span class="like-count"></span>
                                        </span>
                                        <span title="Dislikes" id="saveLikeDislike" data-type="dislike"
                                            data-type="dislike" data-post="{{ $item->id }}"
                                            class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                                            Dislike
                                            <span class="dislike-count"></span>
                                        </span>
                                </small>
                            </h5>
                        
                            <button type="button" class="btn btn-primary">
                                <i class="far fa-comment"></i>
                              
                               
                                <a href="{{ url('user/comment/index/'.$item->id) }}"> <span class="badge bg-secondary">
                                    Comment (4)</span></a>
                            </button>
                            <button type="button" class="btn btn-primary">

                            
                                
                                <a href="{{ url('user/comment/view/'.$item->id) }}"> <span class="badge bg-secondary">
                                        comment Replay(4)</span></a>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              comment & replay 
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                             <table class=" table  table-striped">
                                                <tr  class="table-primary">
                                                    <th scope="col">Comment</th>
                                              
                                                    <th scope>Replay</th>
                                                </tr>
                                                <tr>
                                                    <td> {{ ($item->comments[0]->message) }}</td>
                                                    
                                                </tr>
                                                   
                                              
                                               
                                             </table>
                                            </ul>
                                          </div>
                            </button>
 
                            
                        </div>

                        <hr>
                        <hr>
                      
                    
                        <hr>






                        @endforeach



                    </div>









                </div>




             



            </div>










  


            <br> <br> <br><br> <br> <br>

            <!------------------------Middle column Ends---------------->



        @section('script')
            <script>
                // Save Like Or Dislike
                $(document).on('click', '#saveLikeDislike', function() {
                    var _post = $(this).data('post');
                    var _type = $(this).data('type');
                    var vm = $(this);
                    // Run Ajax
                    $.ajax({
                        url: "{{ url('save-likedislike') }}",
                        type: "post",
                        dataType: 'json',
                        data: {
                            post: _post,
                            type: _type,
                            _token: "{{ csrf_token() }}"
                        },
                        beforeSend: function() {
                            vm.addClass('disabled');
                        },
                        success: function(res) {
                            if (res.bool == true) {
                                vm.removeClass('disabled').addClass('active');
                                vm.removeAttr('id');
                                var _prevCount = $("." + _type + "-count").text();
                                _prevCount++;
                                $("." + _type + "-count").text(_prevCount);
                            }
                        }
                    });
                });
                // End
            </script>
        @endsection




        <!---------------------------Statrs Right Columns----------------->



        <div class="col-12 col-lg-3">


            <div class="right-column">

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="card-title"> Friends list</h6>
                        <ul>
                            <li>
                                <strong>saiful</strong><span></span>

                            </li>

                            <li>
                                <strong>saiful</strong><span></span>

                            </li>

                            <li>
                                <strong>saiful</strong><span></span>

                            </li>

                        </ul>

                    </div>

                </div>


                <div class="card shadow-sm mb-4">

                    <div class="card-body">

                        <h6 class="card-title ">Likes <a href="#" class="ml-1"><small>.View All</small> </a>
                        </h6>
                        <div class="row no-gutters d-none d-lg-flex">
                            <div class="col-6 p-1">
                                <img src="{{ asset('img/avatar-dhg.png') }}" alt="img" width="80px"
                                    height="80px" class="rounded-circle mb-4">
                                <img src="{{ asset('img/avatar-fat.jpg') }}" alt="img" width="80px"
                                    height="80px" class="rounded-circle">



                            </div>
                            <div class="col-6 p-1 text-left">
                                <h6>Jacob Thornton @fat</h6>
                                <a href="#" class="btn btn-outline-info btn-sm mb-3"><i
                                        class="fas fa-user-friends"></i>Follow </a>

                                <h6>Mark otto</h6>
                                <a href="#" class="btn btn-outline-info  btn-sm"><i
                                        class="fas fa-user-friends"></i>Follow </a>

                            </div>

                        </div>

                    </div>




                </div>










            </div>




























        </div>





    </div>
@endsection
