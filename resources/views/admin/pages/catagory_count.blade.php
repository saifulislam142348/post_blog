<div class="dropdown">
    <button class="btn  btn-info dropdown-toggle btn-lg"
        type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        Catagory
        <span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{$catagory->count()}}

        </span>
    </button>
    <ul class="dropdown-menu"
        aria-labelledby="dropdownMenuButton1">
        <div class="container">
            <div class="jumbotron">
                <table class="table table-striped ">
                    <tr>
                        <th>Serial</th>
                        
                        <th>Catagory_name</th>
                        <th>Action</th>
                        
                    </tr>
                    @foreach ($catagory as $key=>$item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <form action="{{url('admin/catagory/delete/'.$item->id)}}" method="POST">
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