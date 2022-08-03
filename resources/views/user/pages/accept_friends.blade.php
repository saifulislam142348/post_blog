<div class="jumbotrob">

    <div class="d-inline-flex p-2 bd-highlight">


        <div class="d-flex flex-row">
            <table class="table table-bordered">

                <tr>

                    <th>#</th>
                    <th>Friend List</th>


                </tr>
                @foreach ($users as $key => $value)
                    @foreach ($value->friends as $k => $fr)
                        @if (Auth::user()->id == $fr->user_id && $fr->friend == 1)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td> <a href="">

                                     
                                            <span>{{ $fr->auth_id }}</span>
                                          
                                 

                                    </a>
                                </td>
                                <td>

                                </td>

                            </tr>
                        @endif
                    @endforeach
                @endforeach

            </table>


        </div>






    </div>

</div>
