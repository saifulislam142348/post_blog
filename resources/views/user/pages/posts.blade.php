<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postModalLabel">User Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('postStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group input-group-sm mb-3">

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">

                    </div>

                    <div class="input-group input-group-sm mb-3">

                        <select class="form-control" name="category_id">
                            <option selected>Open this select catagory menu</option>

                            @foreach ($catagory as $item)
                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                        @endforeach


                        </select>

                    </div>
                    <div class="input-group input-group-sm mb-3">

                        <input type="text" name="title" placeholder="Title" class="form-control">

                    </div>


                    <div class="input-group input-group mb-3 increment">

                        <br>
                        <input class="form-control input-group-sm " type="file" name="image">


                    </div>


                    <div class="input-group input-group-sm mb-3">

                        <textarea type="text" placeholder=" Whats on your mind? write now" name="body" class="form-control"></textarea>

                    </div>



                    <input class="btn btn-success" type="submit" value="save"><br>


                </form>

          
            </div>

        </div>
    </div>
</div>
