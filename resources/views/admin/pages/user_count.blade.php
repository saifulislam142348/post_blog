<div class="dropdown">
    <button class="btn btn-info dropdown-toggle btn-lg"
        type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        User
        <span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">


            {{ $user->count() }}

        </span>
    </button>
    <ul class="dropdown-menu">
        <div class="container">
            <div class="jumbotron">
                <table class="table table-striped ">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>about</th>
                        <th>type</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($user as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->about }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <img src=""
                                    style="weight:60px;"
                                    alt="">

                            </td>
                            <td>
                                <form action="{{url('admin/user/delete/'.$item->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                </form>
                              </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </ul>
</div>