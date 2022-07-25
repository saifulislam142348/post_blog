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
        <p class="card-text"> <i class="fas fa-map-marker mr-2"></i> From <a href="#"
                class="text-decoration-none">
                <div class="" aria-labelledby="navbarDropdown">
                    <a class="" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
            </a>
        </p>




    </div>





</div>