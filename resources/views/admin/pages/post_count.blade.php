<div class="dropdown">
    <button class="btn btn-info dropdown-toggle btn-lg"
        type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        Post
        <span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ $post->count() }}

        </span>
    </button>
    <ul class="dropdown-menu"
        aria-labelledby="dropdownMenuButton1">
        <div class="container">
            <div class="jumbotron">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <th>Serial</th>
                        <th>name</th>
                        <th>email</th>
                        <th>post_title</th>
                        <th>post_catagory</th>
                        <th>post_body</th>
                        <th>post_photo</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($post as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->users->name }}</td>
                            <td>{{ $item->users->email }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->catagories->name }}
                            </td>
                            <td>
                             
                                    <p> {{ $item->body }}
                                    </p>
                              


                            </td>
                            <td>
                                <img src="{{ asset($item->image) }}"
                                    style="weight:60px; height:60px;"
                                    alt="">
                            </td>
                            <td>
                              <form action="{{url('admin/post/delete/'.$item->id)}}" method="POST">
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