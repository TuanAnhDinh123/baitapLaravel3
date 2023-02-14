@extends('layouts/userslayout')
@section('main')
 <div class="row">
    <h2 class="mt-3 mb-2">Sản phẩm bán chạy</h2>
        @foreach($dshot as $sp)
            <div class="col-4">
                <div><img class="img-thumbnail" src="{{asset('uploads/images/'.$sp->picture)}}" alt=""></div>
                <div>{{$sp->productName}}</div>
                <div>{{$sp->cateName}}</div>
                <div>{{number_format($sp->price,0)}}</div>
                <div>
                    <a href="{{url('chi-tiet/pro-'.$sp->productID.'.html')}}">Xem chi tiết</a>
                </div>
            </div>
        @endforeach
 </div>
 <div>
    <h2>Sản phẩm hiện có</h2>
 </div>
@endsection