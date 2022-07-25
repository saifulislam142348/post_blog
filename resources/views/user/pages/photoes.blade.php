
                    <div class="card shadow-sm card-left3 mb-4">

                        <div class="card-body">
                            <h5 class="card-title">Photos<small class="ml-2"><a href="#">.Edit </a></small></h5>

                            <div class="row">



                                <div class="col-6 p-1">
                                    <small><b>Profile</b> </small>
                                    @foreach (Auth::user()->profileImages as $item)
                                        <a href="" data-lightbox="id">
                                            <img src="{{ asset($item->image) }}" alt="img" class="img-fluid "></a>
                                    @endforeach

                                </div>
                                <div class="col-6 p-1">
                                    <small><b>background</b> </small>
                                    @foreach (Auth::user()->backgroundImages as $item)
                                        <a href="" data-lightbox="id">
                                            <img src="{{ asset($item->image) }}" alt="img" class="img-fluid "></a>
                                    @endforeach

                                </div>

                            </div>

                        </div>







                    </div>