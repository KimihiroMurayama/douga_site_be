@extends('layout.common')

@section('title', 'Topページ')
@section('description', 'Topページです')
@section('pageCss')
<link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
@endsection

@section('content')
<div class="slider01">
<div><img src="http://placehold.jp/1920x640.png"></div>
<div><img src="http://placehold.jp/1920x640.png"></div>
<div><img src="http://placehold.jp/1920x640.png"></div>
<div><img src="http://placehold.jp/1920x640.png"></div>
</div>

<div class="inner">
<h2>ランキング</h2>
<div class="slider02">
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
</div>
</div>  

<div class="inner">
<h2>おすすめコンテンツ</h2>
<div class="slider02">
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
<div><img src="http://placehold.jp/300x300.png"></div>
</div>
</div>  
@endsection

@section('pageJs')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script type="text/javascript">
 $('.slider01').slick({
  slidesToShow: 1,
  slidesToScroll:1,
  autoplay: true,
  autoplaySpeed: 3000,
// 画像下のドット（ページ送り）を表示
  dots:true,
});
  </script>

<script type="text/javascript">
 $('.slider02').slick({
  slidesToShow: 3,
  slidesToScroll:1,
  autoplay: true,
  autoplaySpeed: 3000,
// 画像下のドット（ページ送り）を表示
  dots:true,
});
  </script>
@endsection