<div class="jumbotrob">

    <div class="d-inline-flex p-2 bd-highlight">


        <div class="d-flex flex-row">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Friend Request List:</th>

                </tr>
                @foreach ($users as $key => $item)
                    @foreach ($item->friends as $fr)
                        @if (Auth::user()->id==$fr->user_id && $fr->friend == 0)
                            <tr>

                                <td>{{ $fr->auth_id}}</td>
                                <td>
                                    <a href="{{ url('user/pages/friendConfirm/' . $fr->user_id) }}">
                                         
                                        <span>{{ $fr->auth_id->usersfriend->name}}</span>
                                        <input type="submit" value="Confirm" class="btn btn-warning">
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            </table>



        </div>






    </div>

</div>
