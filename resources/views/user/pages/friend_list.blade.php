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
                            @if ($item->id == Auth::user()->id)
                            @else
                                <div class="col-6 p-1 text-left">
                                    <a href="#" class="btn btn-info text-warning btn-outline-dark btn-sm mb-3"><i
                                            class="fas fa-user-friends">
                                            <h6>{{ $item->name }}</h6>
                                        </i>Follow </a>


                                </div>



                                @if (!$item->profileImages->isEmpty())
                                    <img src="{{ asset($item->profileImages->first()->image) }}" alt="img"
                                        width="120px" height="120px"
                                        class="rounded-circle border border-success mt-n5 my-3">
                                @else
                                    <img src="{{ asset('img/no_image.jpg') }}" alt="img" width="120px"
                                        height="120px" class="rounded-circle border border-success mt-n5 my-3">
                                @endif
                            @endif
                        @endforeach

                    </div>


                </div>
