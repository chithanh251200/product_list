@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Trang Sản Phẩm</h1>

            <div class="list-product mt-3">
                <div class="row">
                    @foreach ($Products as $item)
                        <div class="col-md-3 col-sm-4 col-6 mb-3">
                            <div class="product-item border py-2">
                                <div class="product-thumb">
                                    <a href="">
                                        <img class="img-fluid" src="" alt="">
                                    </a>
                                </div>
                                <div class="product-info p-2 text-center">
                                    <a class="product-title" href="{{Route('detail_product',$item->id)}}">{{$item -> name}}</a>
                                    <div class="price-box">
                                        <span class="current-price text-danger">{{number_format($item -> price,0,'','.')}}VND</span>
                                    </div>
                                    <a href="" class="btn btn-outline-danger btn-sm mt-3" class="add-to-cart">Đặt Mua</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
