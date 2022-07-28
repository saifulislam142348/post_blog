@if (Auth::user()==$item->friends->isEmpty())
<form action="{{ route('user.friend') }}" method="post">
                                                   @csrf
                                                   <input type="hidden" name="user_id" value="{{ $item->id }}">
                                                   <input type="submit" value="friend">
                                               </form>
@else
                              
                               @foreach ($friend as $unfriend)
                                   <form action="{{ url('user/unfriend/' . $unfriend->id) }}" method="post">
                                       @method('DELETE')
                                       @csrf
                                       <button class="btn-success"><i class=" fa fa-thumbs-up">Requested</i></button>

                                   </form>
                               @endforeach
                           @endif