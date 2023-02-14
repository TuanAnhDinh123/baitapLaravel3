<ul class="list-group mt-5">
    @foreach($ds as $d)
        <li class="list-group-item">
            <a href="{{url('list-cate/'.$d->cateID)}}" class="text-decoration-none text-dark">{{$d->cateName}}</a>
        </li>
    @endforeach
</ul>