@extends('layouts/userslayout')
@section('main')
 <div class="row">
    <h2 class="mt-3 mb-2">Chi tiết sản phẩm</h2>
            <div class="col-4">
                <div><img class="img-thumbnail" src="{{asset('uploads/images/'.$detail->picture)}}" alt=""></div>
            </div>
            <div class="col-6">
                <div>{{$detail->productName}}</div>
                <div>{{$detail->cateName}}</div>
                <div>{{number_format($detail->price,0)}}</div>
                <div><a href="{{url('gio-hang/'.$detail->productID.'.html')}}">Thêm vào giỏ hàng</a></div>
            </div>
 </div>
@endsection