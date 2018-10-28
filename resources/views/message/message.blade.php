@extends('layouts.common')
 
<!-- ページ毎にタイトルを変える際はここも変更する  -->
@section('title', 'プロジェクト作成')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<!-- ここにページ毎に呼び込みたいCSSのpath -->
<link href="./css/XXX.css" rel="stylesheet">
@endsection
 
@include('layouts.head')
 
@include('layouts.header')
 
@section('content')
<div class="hero-body">
    <div class="container">
        <form action="" method="post">
            <div class="column is-8 is-offset-2 has-custom-border">
                <div class="has-mg-top-20">
                    <label class="label has-gray-text">お届けのお相手</label>
                    <p class="has-gray-text">藤代　明史さん</p>
                </div>
                <figure class="image is-square has-mg-top-20">
                    <img src="{{ asset('./images/dumy.png') }}" alt="">
                </figure>
                <div class="has-mg-top-20">
                    <label class="label has-gray-text">メッセージの内容</label>
                    <input class="input" type="text" placeholder="入力してください">
                </div>
                <div class="has-mg-top-20">
                    <label class="label has-gray-text">自分の名前</label>
                    <input class="input" type="text" placeholder="入力してください">
                </div>
                <div class="column is-offset-2 is-8 has-text-centered">
                    <input type="submit" class="button has-custom-color" value="確認する">
                </div>
            </div>
        </form>    
    </div>
</div>    
@endsection
  
@section('pageJs')
<!-- ここにページ毎に呼び込みたいJSのpath -->
<script src="/js/XXX.js"></script>
@endsection
 
@include('layouts.footer')