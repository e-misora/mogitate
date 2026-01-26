@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection

@section('content')
    <div class="content-top">
        <h2 class="content__outline">商品一覧</h2>
        <a class="link__products-register" href="/products/register">+ 商品を追加</a>
    </div>
    <div class="content__items">
        <div class="content__items--search">
            <form class="item--search-form" action="" method="post">
            @csrf
                <input class="item--search-name__input" type="text" placeholder="商品名で検索">
                <input class="item--search-name__submit" type="submit" value="検索">
                <div class="item--search-price">
                    <p class="item--search-price__tag">価格順で表示</p>
                    <select class="item--search-price__option">
                        <option>価格で並び替え</option>
                        <option value="">高い順に表示</option>
                        <option value="">低い順に表示</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="content__items--products">
            @foreach($products as $product)
            <form class="item--product-card" action="/products/detail" method="post">
            @csrf
                <button class="link__products-detail" type="submit">
                <img class="product-card__img" src="{{asset('fruits-img/kiwi.png')}}" alt="">
                <input type="hidden" name="image" value="{{$product['image']}}">
                <div class="product-card__cap">
                    <p>{{$product['name']}}</p>
                    <input type="hidden" name="name" value="{{$product['name']}}">
                    <p>¥{{$product['price']}}</p>
                    <input type="hidden" name="price" value="{{$product['price']}}">
                </div>
                <input type="hidden" name="description" value="{{$products['description']}}">
                </button>
            </form>
            @endforeach
        </div>
    </div>
    <form action="/products/register" enctype='multipart/form-data' method="post"> 
@csrf 
    <input type="file" name="image">  
    <input type="submit" value="写真を登録する"> 
</form>

@endsection