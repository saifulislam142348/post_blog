<div class="left-column">


    <div class="card card-left1 mb-4">

        <div class="dropdown">
            <a href="#" data-bs-toggle="dropdown">
                <img src="{{ asset(Auth::user()->backgroundImages[count(Auth::user()->backgroundImages) - 1]->image) }} "
                    alt="img" width="120px" height="120px"
                    class="card-img-top img-fluid border border-secondary">
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item btn btn-outline-info "
                        href="{{ route('background.image') }}">Add</a></li>
                <li><a class="dropdown-item btn btn-outline-info "
                        href="{{ route('background.imageEdit') }}">Edit</a></li>
                <li><a class="dropdown-item btn btn-outline-info " href="#">Delete</a></li>

            </ul>
        </div>
        <div class="card-body text-center ">


            <div class="dropdown">

                <a href="#" data-bs-toggle="dropdown">

                    <img src="{{ asset(Auth::user()->profileimages[count(Auth::user()->profileimages) - 1]->image) }} "
                        alt="img" width="120px" height="120px"
                        class="rounded-circle border border-success mt-n5 my-3">
                </a>



                <ul class="dropdown-menu">
                    <li><a class="dropdown-item btn btn-outline-info "
                            href="{{ route('profil.image') }}">Add</a></li>
                    <li><a class="dropdown-item btn btn-outline-info "
                            href="{{ route('profile.imageEdit') }}">Edit</a></li>
                    <li><a class="dropdown-item btn btn-outline-info " href="#">Delete</a></li>

                </ul>
            </div>
            <h5 class="card-title"> {{ Auth::user()->name }}</h5>
            <p class="card-text text-justify mb-2">
                {{ Auth::user()->about }}</p>
            <ul class="list-unstyled nav justify-content-center">
                <a href="#" class="text-dark text-decoration-none">
                    <li class="nav-item"> <br> <strong>
                        <button class="btn btn-info">
                            <span><b>Friends:</b> </span>
                            {{$users->count()}}
                        </button>
               
                    </strong></li>
                </a>
                
            </ul>

        </div>




    </div>