<div class="dropdown">
    <a href="#" data-bs-toggle="dropdown">

        <img src="{{ asset('img/no_image.jpg') }}" alt="img" width="120px" height="120px"
            class="rounded-circle border border-success mt-n5 my-3">
    </a>



    <ul class="dropdown-menu">
        <li>
            <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>

        <!-- Button trigger modal -->



    </ul>


    <ul>
       
    
       
        <ol>
            <a class=" btn dropdown-item " href="{{ route('Admincatagory') }}"> <span
                    class="btn btn-outline-success list-group-item">Catagory create</span></a>
        </ol>
        <ol>
            <a class=" btn dropdown-item " href="{{ route('Adminlvote') }}"> <span
                    class="btn btn-outline-success list-group-item">Votes count</span></a>
        </ol>
        <ol>
            <a class=" btn dropdown-item " href="{{ route('Admincomment') }}"> <span
                    class="btn btn-outline-success list-group-item">Comment</span></a>
        </ol>
      
    </ul>
</div>
