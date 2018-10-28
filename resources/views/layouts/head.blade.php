@section('head')
<meta charset="UTF-8">
<title>@yield('title') | cly7796.net</title>
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link href="/css/layout/master.css" rel="stylesheet">
@yield('pageCss')
@endsection