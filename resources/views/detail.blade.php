@extends('layout')
@section('content')
    <div class="wrapper row" style="width:40%">
        <div class="product-img col">
            <img src="/images/{{ $vegetable->image }}" alt="" style="width: 20rem;">
        </div>
        <div class="product-info col" >
            <div class="product-text">
                <h1>{{ $vegetable-> vegetable }}</h1>
                <p><span>{{$vegetable->new_price}}</span></p>
                <p>Có xuất xứ từ vùng Địa Trung Hải thực vật có hoa thuộc nhóm hai lá mầm với các lá tạo thành một cụm đặc hình gần như hình cầu.Là một loại rau hữu cơ rất dễ nhận biết,khó có thể nhầm lẫn</p>
            </div>
            <div class="product-price-btn">

            </div>
        </div>
    </div>
@endsection
