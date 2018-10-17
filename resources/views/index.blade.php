@extends('layouts.common')
 
<!-- ページ毎にタイトルを変える際はここも変更する  -->
@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<!-- ここにページ毎に呼び込みたいCSSのpath -->
<link href="{{ asset('./css/index.css') }}" rel="stylesheet">
@endsection
 
@include('layouts.head')
 
@include('layouts.header')
 
@section('content')
<div class="hero-body">
    <div class="container">
        <div class="column is-8 is-offset-2 has-white has-mg-100">
            <h1 class="title is-3 is-spaced has-gray-text has-text-centered">メッセージを集めて届けよう</h1>
            <h2 class="subtitle is-5 has-gray-text has-text-centered">〇〇は大切な人に日頃言えない感謝の気持ちを伝えるサービスです。</h2>
            <div class="has-text-centered">
                <a href="/create" class="button has-custom-color">さっそく始める</a>
            </div>
        </div>

        <div class="has-text-centered">
            <h4 class="title is-4 has-gray-text has-mg-50">ご利用の流れ</h4>
        </div>
        <div class="column is-offset-2 is-8 has-flex has-mg-50">
            <img src="./images/write.png" alt="">
            <div class="text-area">
                <h5 class="title is-5 has-gray-text">新規作成</h4>
                <p class="subtitle is-6">寄せ書きを作る目的、どう言った内容のメッセージにするか、寄せ書きを送る相手の写真を決めて新規作成する。</p>
            </div>
        </div>
        <div class="column is-offset-2 is-8 has-flex has-mg-50">
            <img src="./images/mail.png" alt="">
            <div class="text-area">
                <h5 class="title is-5 has-gray-text">シェアする</h4>
                <p class="subtitle is-6">メッセージを書いて欲しい、友人・知人に寄せ書きへの招待URLをシェアする。</p>
            </div>
        </div>
        <div class="column is-offset-2 is-8 has-flex has-mg-50">
            <img src="./images/image.png" alt="">
            <div class="text-area">
                <h5 class="title is-5 has-gray-text">画像で保存</h4>
                <p class="subtitle is-6">メッセージが集まると、一つの画像として保存されます。</p>
            </div>
        </div>
        <div class="column is-offset-2 is-8 has-text-centered">
            <a href="/create" class="button has-custom-color">さっそく始める</a>
        </div>
    </div>
</div>
@endsection
  
@section('pageJs')
<!-- ここにページ毎に呼び込みたいJSのpath -->
<script src="/js/XXX.js"></script>
@endsection
 
@include('layouts.footer')