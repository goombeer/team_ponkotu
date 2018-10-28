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
        finish
    <div>    
</div>
@endsection
  
@section('pageJs')
<!-- ここにページ毎に呼び込みたいJSのpath -->
<script src="/js/XXX.js"></script>
@endsection
 
@include('layouts.footer')