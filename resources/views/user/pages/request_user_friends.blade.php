<div class="jumbotrob">

    <div class="d-inline-flex p-2 bd-highlight">
        @foreach ($users as $item)
            @foreach ($item->friends as $fr)
                @if ($fr->friend == 0)
                    <ul>

                        <div class="d-flex flex-row">
                         
                                <a href="{{ url('user/pages/friendConfirm/' . $fr->user_id) }}">
                                
                                    <span>{{ $item->name }}</span>
                                    <input type="submit" value="Confirm" class="btn btn-warning">
                                </a>

                        </div>




                    </ul>
                @endif
            @endforeach
        @endforeach
    </div>

</div>
