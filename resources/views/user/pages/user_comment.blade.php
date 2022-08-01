
<!-- Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="commentModalLabel">Comment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('commentstore') }}" method="POST">
                @csrf



                <div class="mb-3">
                  
                    <input type="hidden" name="post_id" class="form-control"
                        value="{{ $item->id }}">

                </div>
                <div class="mb-3">
                    
                    <input type="hidden" name="user_id" class="form-control"
                        value="{{ $item->user_id }}">

                </div>

                <div class="mb-3">
                    <label class="form-label">Comment</label>
                    <input type="text" class="form-control" name="message">
                    @foreach ($errors->all() as $error)
                        <span class="text-danger">{{ $error }}</span>
                    @endforeach

                </div>


                <button type="submit" class="btn btn-primary">
                    
                    send</button>
            </form>
        </div>

      
      </div>
     
     
    
      

    </div>

   

   

  </div>
  