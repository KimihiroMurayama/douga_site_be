<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" itemprop="description" content="@yield('description')">
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/common.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    @yield('pageCss')
  </head>

  <body>

  
  <header>
      <div class="header-sp">
        <div class="header-sp-inner">
          <div class="header-wrap">
            <h1>
              <a href="/">
                <img class="header-logo" src="/images/logo.png" alt="">
            </a>
            </h1>
            <nav class="globalMenuSp">
              <ul class="header-nav">
                <li>
                  <a href="/">TOPページ</a>
                </li>
                <li>
                  <a href="/list">一覧ページ</a>
                </li>
                <li>
                  <a href="/detail">動画閲覧ページ</a>
                </li>
              </ul>
            </nav>
            <div class="navToggle sp-disp">
              <span></span><span></span><span></span><span>menu</span>
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="body">
    @yield('content')
    </div>


    <footer>
    <div class="inner">
    <div>
    <a href="/">
                <img class="header-logo" src="/images/logo-wh.png" alt="">
            </a>
    </div>
    <ul>
                <li>
                  <a href="/">TOPページ</a>
                </li>
                <li>
                  <a href="/list">一覧ページ</a>
                </li>
                <li>
                  <a href="/detail">動画閲覧ページ</a>
                </li>
              </ul>

              <div class="copyright">
                <p>
                動画販売サービス All Rights Reserved.
                </p>
              </div>
              </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="/js/common.js"></script>
    @yield('pageJs')
  </body>
</html>
