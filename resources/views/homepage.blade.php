<link rel="stylesheet" type="text/css" href="{{('css/app.css') }}" >
@extends('layout')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
        }
        img{
            width: 100%;
            object-fit: cover;

        }
        .layout_wrapper{
            width: 90%;
            display: flex;
            justify-content: center;
            margin: auto;
            padding-top: 100px;
            flex-direction: column;
        }

        .image__style{
            display: flex;
            margin: auto;
        }

        .image__style img{
            width: 100%;
        }

        .vegetable__wrapper{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .vegetable__cart{
            height: 400px;
            border: 1px solid papayawhip;
        }

        .vegetable__cart:hover{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

        }
        .vegetable__info h3{
            color: green;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 600;
            text-align: center;

        }
        .price{
            display: flex;
            gap: 40px;
            text-align: center;
            justify-content: center;
        }
        .old__price{
            color: darkseagreen;
            text-decoration-line: line-through;
        }
        .new__price{
            color: darkgreen;
        }

-    </style>
<div class="layout_wrapper">
    <h1>Cac San Pham Hom Nay Co</h1>
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br/>
    @endif

    <div class="vegetable__wrapper">
        @foreach($vegetables as $vegetable)
        <div class="vegetable__cart">
            <div class="image__style">
                <img src="/images/{{$vegetable->image}}" alt="">
            </div>
            <div class="vegetable__info">
                <h3>{{$vegetable->vegetable}}</h3>
                <div class="price">
                    <span class="new__price">{{$vegetable->new_price}}</span>
                    <span class="old__price">{{$vegetable->old_price}}</span>
                </div>
                <a href="detail/{{$vegetable->vegetable_id}}">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
