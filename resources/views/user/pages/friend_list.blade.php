<div class="col-12 col-lg-3">

    <h3>
        <p class="text-center"> all Users List</p>
        
    </h3>



   <div class="jumbotron">

    
    
    @foreach ($users as $item)
  
    <div class="d-flex flex-row bd-highlight mb-3">

       
       
            <a href="#" class="btn btn-info text-warning btn-outline-dark btn-sm mb-3"><i
                    class="fas fa-user-friends">
                    <span>{{ $item->name }}</span>

                    <!------friend request---------->
                    @include('user/pages/friend_request')
                    <!------friend request end---------->
                </i>


                @if (!$item->profileImages->isEmpty())
                    <img src="{{ asset($item->profileImages->first()->image) }}" alt="img" width="60px"
                        height="60px" class="rounded-circle border border-success mt-n5 my-3">
                @else
                    <img src="{{ asset('img/no_image.jpg') }}" alt="img" width="60px" height="60px"
                        class="rounded-circle border border-success mt-n5 my-3">
                @endif
            </a>
   
    </div>
    
@endforeach
   </div>
      

    </div>
</div>
