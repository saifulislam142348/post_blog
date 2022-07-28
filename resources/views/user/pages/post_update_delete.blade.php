@if($item->users->id==Auth::user()->id)
<div class="dropdown">
    <a class="btn  dropdown-toggle" href="#" role="button"
        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        @if (session('edit'))
            <h6 class="alert alert-success">{{ session('edit') }}</h6>
        @endif
        <li><a class="class="btn btn-sm btn-success"
                href="{{ url('user/post/edit/' . $item->id) }}"><i
                    class="fas fa-edit"></i>Edit</a></li>
        <li>
            @if (session('delete'))
                <h6 class="alert alert-success">{{ session('delete') }}</h6>
            @endif
            <form action="{{ url('user/post/delete/' . $item->id) }}"
                method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-sm btn-danger"> <i
                        class="fas fa-trash">Delete</i> </button>
            </form>
        </li>

    </ul>
</div>
@endif