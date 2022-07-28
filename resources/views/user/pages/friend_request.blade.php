@if ($item->friends->isEmpty())
<form action="{{ route('user.friend') }}" method="post">
                                                   @csrf
{{--                                                   
                                                   <input type="hidden" name="auth_id" value="{{Auth::user()->id}}"> --}}
                                                   <input type="hidden" name="user_id" value="{{ $item->id }}">
                                                   <input type="submit" value="friend">
                                               </form>
@else
                              
                         
                                   <form action="{{ url('user/unfriend/' . $friend->first()->id) }}" method="post">
                                       @method('DELETE')
                                       @csrf
                                       <button class="btn-success"><i class=" fa fa-thumbs-up">Requested</i></button>

                                   </form>
                           
                           @endif