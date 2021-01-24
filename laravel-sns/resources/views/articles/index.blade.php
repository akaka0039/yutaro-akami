
<!-- app.blade.phpをベースとして使うことを宣言 -->
@extends('app')

<!-- app.blade.phpの@yield('title')に対応 -->
<!-- app.blade.phpを元にこのように記述されていることになる
<title>
  記事一覧
</title>
-->
@section('title', '記事一覧')

@section('content')

<!-- includeを使うことで、別のビューを取り込める -->

@include('nav') {{--この行を追加--}}
  <div class="container">
    <!-- コントローラーから渡された配列$articlesから要素をひとつずつ取り出している -->
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach 
  </div>
@endsection
