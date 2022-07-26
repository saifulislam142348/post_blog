<div class="btn-group">
    <button class="btn btn-success" type="button">
        <a href="{{ route('AdminDashboard') }}"></a> Dashboard

    </button>
    <button class="btn btn-danger" type="button">
        <div class="" aria-labelledby="navbarDropdown">
            <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        </li>
    </button>

</div>

<div class="btn-group">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
        data-bs-toggle="dropdown" aria-expanded="false">
        <strong> Menu Bar</strong>

    </button>
    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
        <li class="">
            <a class=" btn dropdown-item " href="{{ route('Adminuser') }}">
                <span class="btn btn-outline-success list-group-item">User</span>
            </a>
        </li>
        <li>
            <a class=" btn dropdown-item " href="{{ route('Adminposts') }}">
                <span class="btn btn-outline-success list-group-item">Post</span>
            </a>
        </li>
        <li>
            <a class=" btn dropdown-item " href="{{ route('Adminphoto') }}"> <span
                    class="btn btn-outline-success list-group-item">Post Photo</span></a>
        </li>
        <li>
            <a class=" btn dropdown-item " href="{{ route('Admincatagory') }}"> <span
                    class="btn btn-outline-success list-group-item">Catagory</span></a>
        </li>
        <li>
            <a class=" btn dropdown-item " href="{{ route('Adminlvote') }}"> <span
                    class="btn btn-outline-success list-group-item">Votes count</span></a>
        </li>
        <li>
            <a class=" btn dropdown-item " href="{{ route('Admincomment') }}"> <span
                    class="btn btn-outline-success list-group-item">Comment</span></a>
        </li>
        <li>
            <a class=" btn dropdown-item " href="{{ route('AdmincommentReplay') }}"> <span
                    class="btn btn-outline-success list-group-item">CommentReplay</span></a>
        </li>
    </ul>
</div>