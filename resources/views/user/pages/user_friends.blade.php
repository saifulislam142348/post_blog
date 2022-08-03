<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title" id="exampleModalToggleLabel">
            <button type="button" class="btn btn-primary">
              MyFriends 
              <span class="badge badge-light">
             @php
                 $friendcount=DB::table('friends')->where('friend','1')->where('user_id',Auth::user()->id);
                 echo  $friendcount->count();
             @endphp

              </span>
              </button>
        </h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
@include('user/pages/accept_friends')
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal"> Friends request</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">
            <button type="button" class="btn btn-primary">
              Friends Requested
            <span class="badge badge-light">
              @php
                  $friendcount=DB::table('friends')->where('friend','0')->where('user_id',Auth::user()->id);
                  echo  $friendcount->count();
              @endphp
 
               </span>
            </button>
            
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  @include('user/pages/request_user_friends')
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-primary class="modal-dialog modal-dialog-scrollable" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
    <button type="button" class="btn btn-primary">
        My friends  <span class="badge badge-light">
     
         
            @php
                $friendcount=DB::table('friends')->where('friend','1')->where('user_id',Auth::user()->id);
             
                echo  $friendcount->count();
            @endphp

             
         
                
            
            </span>
      </button>
  </a>