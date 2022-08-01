<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color:#3097D1">
    <a href="index.html" class="navbar-brand"><img src="{{ asset('img/brand-white.png') }}" alt="logo" class="img-fluid"
            width="80px" height="100px"></a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span
            class="navbar-toggler-icon"></span></button>


    <div class="collapse navbar-collapse" id="responsive">
        <ul class="navbar-nav mr-auto text-capitalize">

            <li class="nav-item"><a href="{{ route('user') }}" class="nav-link active">Home <i class="fas fa-home"></i>
                </a></li>
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active">profile <i
                        class="fas fa-user"></i></a></li>

            <li class="nav-item"><a href="#" class="nav-link active">comment <i
                        class="far fa-comment"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link active"> All Post <i
                        class="far fa-comment"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link active">Catagory post <i
                        class="far fa-post"></i></a></li>

            <li class="nav-item"><a href="#" class="nav-link active">likePosts <i
                        class="fa fa-thumbs-up"></i></a></li>


        </ul>

        <form action="" class="form-inline ml-auto d-none d-md-block">
            <input type="text" name="search" id="search" placeholder="Search"
                class="class="typeahead form-control"">
        </form>

    




        <!------------------------------->

        @if (!Auth::user()->profileimages->isEmpty())
        <div class="dropdown">

            <a href="#" data-bs-toggle="dropdown">

                <img src="{{ asset(Auth::user()->profileimages->first()->image) }} " alt="img"
                    width="60px" height="60px"
                    class="rounded-circle card-img-top border border-success mt-n5 my-3">
            </a>



        </div>
    @else
        <div class="dropdown">

            <a href="#" data-bs-toggle="dropdown">

                <img src="{{ asset('img/no_image.jpg') }} " alt="img" width="60px" height="60px"
                    class="rounded-circle card-img-top border border-success mt-n5 my-3">
            </a>



            <ul class="dropdown-menu">
                <li><a class="dropdown-item btn btn-outline-info " href="{{ route('profil.image') }}">Add</a>
                </li>


            </ul>
        </div>
    @endif

        <!------------------------------->

    </div>





</nav>
