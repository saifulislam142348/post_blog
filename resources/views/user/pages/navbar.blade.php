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
            <li class="nav-item"><a href="#" class="nav-link active">CommentReplay <i
                        class="far fa-comment"></i></a></li>

            <li class="nav-item"><a href="#" class="nav-link active">likePosts <i
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
