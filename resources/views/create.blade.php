@extends('layouts.common')
 
<!-- ページ毎にタイトルを変える際はここも変更する  -->
@section('title', 'プロジェクト作成')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<!-- ここにページ毎に呼び込みたいCSSのpath -->
<link href="{{ asset('./css/create.css') }}" rel="stylesheet">
@endsection
 
@include('layouts.head')
 
@include('layouts.header')
 
@section('content')
<div class="hero-body">
    <div class="container">
        <form action="/share" method="post">
        {{ csrf_field() }}
            <div class="column is-8 is-offset-2 has-custom-border">
                <label class="label has-gray-text">お届けのお相手</label>
                <div class="has-flex">
                    <input class="input has-mg-right-20" type="text" placeholder="性" name="first_name">
                    <input class="input has-mg-right-20" type="text" placeholder="名" name="last_name">
                </div>
                <div class="has-mg-top-20">
                    <label class="label has-gray-text">メッセージの目的</label>
                    <input class="input" type="text" placeholder="入力してください" name="message_purpose">
                </div>
                <div class="has-mg-top-20">
                    <label class="label has-gray-text">投稿の期限</label>
                    <input class="input" type="date" placeholder="日付を選択してください" name="post_deadline">
                </div>
                <div class="has-mg-top-20">
                    <label class="label has-gray-text">メールアドレス</label>
                    <p class="has-gray-text">投稿の期限が過ぎたら、指定のメールアドレスにリマインドを送ります</p>
                    <input class="input" type="email" placeholder="XXXX@example.com" name="reminder_mail_adress">
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