{{-- @foreach ($item->friends as $fr)
    
@if ($fr->auth_id == Auth::user()->id)
<form action="{{ url('user/unfriend/' . $fr->user_id) }}" method="post">
    @method('DELETE')
    @csrf

    <button class="btn-success"><i class=" fa fa-thumbs-up">Requested</i></button>
</form>
@else
<form action="{{ route('user.friend') }}" method="post">
    @csrf

    <input type="hidden" name="user_id" value="{{ $item->id }}">
    <input type="submit" value="friend add">
</form>

@endif
       


      
       
        
@endforeach --}}
@if (!$item->friends->count() > 0)
    <form action="{{ route('user.friend') }}" method="post">
        @csrf

        <input type="hidden" name="user_id" value="{{ $item->id }}">
        <input type="submit" value="friend add">
    </form>
@else
    @if (Auth::user()->id == $item->friends->first()->auth_id && $item->friends->first()->friend == 0)

        <form action="{{ url('user/unfriend/' . $item->friends[0]->user_id) }}" method="post">
            @method('DELETE')
            @csrf

            <button class="btn-success"><i class=" fa fa-thumbs-up">Requested</i></button>
        </form>
    @else
        @if (Auth::user()->id == $item->friends->first()->auth_id && $item->friends->first()->friend == 1)
           <span>accept_friends</span>
            @else
            <form action="{{ route('user.friend') }}" method="post">
                @csrf

                <input type="hidden" name="user_id" value="{{ $item->id }}">
                <input type="submit" value="friend add">
            </form>
        @endif
    @endif






@endif
