<div class="col-12 col-lg-3">


    <div class="right-column">

        <div class="card shadow-sm mb-4">
          

        </div>


        <div class="card shadow-sm mb-4">

            <div class="card-body">

                <h6 class="card-title ">Likes <a href="#" class="ml-1"><small>.View All</small> </a>
                </h6>
                <div class="row no-gutters d-none d-lg-flex">
                    <div class="col-6 p-1">





                        @foreach ($users as $item)
                            <img src="{{ asset($item->profileImages[count($item->profileImages) - 1]->image) }}"
                                alt="img" width="80px" height="80px" class="rounded-circle">
                            <div class="col-6 p-1 text-left">
                                <h6>{{ $item->name }}</h6>
                                <a href="#" class="btn btn-outline-info btn-sm mb-3"><i
                                        class="fas fa-user-friends"></i>Follow </a>
                            </div>

                 
                    @endforeach
                </div>


            </div>
