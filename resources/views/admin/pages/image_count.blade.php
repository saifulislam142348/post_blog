<div class="dropdown">
    <button class="btn btn-info dropdown-toggle btn-lg"
        type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        photo
        <span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
       {{$profileImage->count()+$backgroundImage->count()}}

        </span>

    </button>
    <ul class="dropdown-menu"
        aria-labelledby="dropdownMenuButton1">


        <!-- Gallery -->
       
            @foreach ($profileImage as $item)
          
            <img src="{{asset($item->image)}}"  style=" height:60px; weight:50px;" alt="">
           
                <form action="{{url('admin/photo/delete/'.$item->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger"> delete<i class="fas fa-trash"></i> </button>
                </form>
            
          <br>
            @endforeach
         


            
     
        <!-- Gallery -->


    </ul>
</div>