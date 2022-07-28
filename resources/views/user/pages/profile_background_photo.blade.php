<div class="left-column">


    <div class="card card-left1 mb-4">
        <!---------------------------------->
        @if (!Auth::user()->backgroundImages->isEmpty())
            <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset(Auth::user()->backgroundImages->first()->image) }} " alt="img" width="120px"
                        height="120px" class="card-img-top img-fluid border border-secondary">
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item btn btn-outline-info " href="{{ route('background.image') }}">Add</a>
                    </li>
                    <li><a class="dropdown-item btn btn-outline-info "
                            href="{{ route('background.imageEdit') }}">Edit</a></li>
                    <li><a class="dropdown-item btn btn-outline-info " href="#">Delete</a></li>

                </ul>
            </div>
        @else
            <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('img/no_image_bg.jpg') }} " alt="img" width="120px" height="120px"
                        class="card-img-top img-fluid border border-secondary">
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item btn btn-outline-info " href="{{ route('background.image') }}">Add</a>
                    </li>

                </ul>
            </div>
        @endif



        <!----------------------->
        <div class="card-body text-center ">
            @if (!Auth::user()->profileimages->isEmpty())
                <div class="dropdown">

                    <a href="#" data-bs-toggle="dropdown">

                        <img src="{{ asset(Auth::user()->profileimages->first()->image) }} " alt="img"
                            width="120px" height="120px" class="rounded-circle border border-success mt-n5 my-3">
                    </a>



                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item btn btn-outline-info " href="{{ route('profil.image') }}">Add</a>
                        </li>
                        <li><a class="dropdown-item btn btn-outline-info "
                                href="{{ route('profile.imageEdit') }}">Edit</a>
                        </li>
                        <li><a class="dropdown-item btn btn-outline-info " href="#">Delete</a></li>

                    </ul>
                </div>
            @else
                <div class="dropdown">

                    <a href="#" data-bs-toggle="dropdown">

                        <img src="{{ asset('img/no_image.jpg') }}" alt="img" width="120px" height="120px"
                            class="rounded-circle border border-success mt-n5 my-3">
                    </a>



                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item btn btn-outline-info " href="{{ route('profil.image') }}">Add</a>
                        </li>


                    </ul>
                </div>
            @endif








            <h5 class="card-title"> {{ Auth::user()->name }}</h5>
            <p class="card-text text-justify mb-2">

            <ul class="list-unstyled nav justify-content-center">
                <a href="#" class="text-dark text-decoration-none">
                    <li class="nav-item"> <br>
                        <strong>
                            <!-- Button trigger modal -->
                           
                            @include('user/pages/user_friends')

<!---------------------modal end-------------------->
                        </strong>
                    </li>
                </a>

            </ul>

        </div>




    </div>
