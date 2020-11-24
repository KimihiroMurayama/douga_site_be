@extends('layout.common')

@section('title', '動画再生ページ')
@section('description', '動画再生ぺージだよ')
@section('pageCss')
<link href="/css/app.css" rel="stylesheet">
<link href="https://vjs.zencdn.net/7.8.2/video-js.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
@endsection

@section('content')
<div class="inner">
<h2>動画閲覧ページです。</h2>
<video id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" preload="auto" width="1054" height="640">
    </video>
    </div>
    <div class="inner">
    <h2>こちらの動画もおすすめ</h2>
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
<script src="//vjs.zencdn.net/7.8.2/video.min.js"></script>
    <script>
        $(document).ready(function() {
            var player = videojs('video');
            player.src({
                src: "https://first-release-douga-backet.s3.us-east-2.amazonaws.com/converted_movie_data/River+-+44509_hls.m3u8",
                type: 'application/x-mpegURL',
                // withCredentials: true
            });
        });
    </script>
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
