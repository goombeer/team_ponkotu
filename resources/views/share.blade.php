@extends('layouts.common')
 
<!-- ページ毎にタイトルを変える際はここも変更する  -->
@section('title', 'プロジェクト作成')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<!-- ここにページ毎に呼び込みたいCSSのpath -->
<link href="{{ asset('./css/share.css') }}" rel="stylesheet">
@endsection
 
@include('layouts.head')
 
@include('layouts.header')
 
@section('content')
<div class="hero-body">
    <div class="container">
        <div class="column is-8 is-offset-2 has-mg-100">
            <figure class="image is-square">
                <img src="{{ asset('./images/dumy.png') }}" alt="">
            </figure>
        </div>
        <div class="column is-8 is-offset-2 has-mg-100">
            <div class="has-mg-top-20">
                <p class="has-gray-text title is-4">メッセージの目的</p>
                <p class="has-gray-text">メッセージの内容が入ります。メッセージの内容が入ります。メッセージの内容が入ります。メッセージの内容が入ります。メッセージの内容が入ります。メッセージの内容が入ります。</p>
            </div>
        </div>
        <div class="column is-8 is-offset-2 has-mg-100">
            <div class="has-mg-top-20">
                <p class="has-gray-text title is-4">メッセージの投稿期限</p>
                <p class="has-gray-text">2018/09/29まで</p>
            </div>
        </div>
        <div class="column is-8 is-offset-2 has-mg-100">
            <a href="http://line.me/R/msg/text/?【ページタイトル】%0D%0A【共有するURL】">LINEでシェア</a>
            <a href="http://www.facebook.com/share.php?u=【共有するURL】" >Facebookでシェア</a>
            <a href="http://twitter.com/share?text=【ツイート文（日本語が含まれる場合にはURLエンコードが必要）】&url=【共有するURL】&hashtags=【ハッシュタグ（複数あるときはカンマ区切り）】" rel="nofollow">Twitterでシェア</a>
        </div>
        <div class="column is-8 is-offset-2 has-mg-100 has-flex">
            <input class="input" type="email" value="http://www.abcdefghi">
            <button><i class="far fa-copy fa-3x"></i></button>
        </div>
    <div>    
</div>
@endsection
  
@section('pageJs')
<!-- ここにページ毎に呼び込みたいJSのpath -->
<script src="/js/XXX.js"></script>
@endsection
 
@include('layouts.footer')