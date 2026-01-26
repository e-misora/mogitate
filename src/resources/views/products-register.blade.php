@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{asset('css/products-register.css')}}">
@endsection

@section('content')
<div class="products-register__content">
    <h2>商品登録</h2>
    <form class="products-register__form" action="/products" method="post">
    @csrf
        <div class="products-register__form-group">
            <span class="products-register__form--label">商品名</span>
            <span class="products-register__form--required">必須</span>
            <input class="products-register__form--input" type="text" name="name" placeholder="商品名を入力">
        </div>
        <div class="products-register__form-group">
            <span class="products-register__form--label">値段</span>
            <span class="products-register__form--required">必須</span>
            <input class="products-register__form--input" type="text" name="price" placeholder="値段を入力">
        </div>
        <div class="products-register__form-group">
            <span class="products-register__form--label">商品画像</span>
            <span class="products-register__form--required">必須</span>
            <input class="products-register__form--input-img" type="file" name="image" >
        </div>
        <div class="products-register__form-group">
            <span class="products-register__form--label">季節</span>
            <span class="products-register__form--required">必須</span>
            <div>
            <input class="products-register__form--radio" type="radio">
            <label for="">春</label>
            <input class="products-register__form--radio" type="radio">
            <label for="">夏</label>
            <input class="products-register__form--radio" type="radio">
            <label for="">秋</label>
            <input class="products-register__form--radio" type="radio">
            <label for="">冬</label>
            </div>
        </div>
        <div class="products-register__form-group">
            <span class="products-register__form--label">商品説明</span>
            <span class="products-register__form--required">必須</span>
            <textarea name="description" class="products-register__form--input" placeholder="商品の説明を入力"></textarea>
        </div>
        <div class="products-register__form--button">
            <a class="products-register__form--back" href="/products">戻る</a>
            <button class="products-register__form--submit" type="submit">登録</button>
        </div>
    </form>

</div>

@endsection