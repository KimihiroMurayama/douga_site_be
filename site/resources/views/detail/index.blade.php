<html>
    <body>
    <h1>動画再生ページどすえ</h1>
    Topページ <br>
    一覧ページ<br>
    動画閲覧ページ<br>
    <link href="https://vjs.zencdn.net/7.8.2/video-js.css" rel="stylesheet" />
    <video id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls="" preload="auto" width="320" height="240">
    </video>
    <script src="//vjs.zencdn.net/7.8.2/video.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
    </body>

</html>
