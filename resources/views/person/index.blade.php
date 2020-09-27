@extends('person/layout')
@section('content')
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="header col-xs-12">
      <div class="back-font">
        <h1>person</h1>
        <nav class=top_nav>
          <ul>
            <li>
              <a href="">top</a>
            </li>
            <li>
              <a href="">sign up</a>
            </li>
            <li>
              <a href="">お問い合わせ</a>
            </li>
          </ul>
        </nav>
      </div>
      </div>
      </div>
      <div class="top_intro">
        <h1 class="intro_title">無料診断テスト</h1>
        <div class="boxes">
          <div class="box">
          <h3>性格を診断</h3>
            <i class="fas fa-user-friends"></i>
            <p>big5からなる性格診断で5つの観点から性格をみることができる</p>
          </div>
          <div class="box">
            <h3>相手の性格診断</h3>
            <i class="fas fa-user-circle"></i>
            <p>気になっている相手の性格をみて分析してみよう</p>
          </div>
          
          <div class="box">
          <h3>見つけよう</h3>
          <i class="fas fa-male"></i>
          <p>掲示板機能やグループチャットで気になる人を見つけよう</p>
        </div>
      </div>
    </div>

    <div class="top_text">
      <div class="text_means">
        <h1>素の自分を探してみませんか</h1>
        <p>人生を生きていく上で自分の性格を知ることは重要なこと</p>
        <p>しかし素の性格を知らない人が多くいる</p>
        <h3>person</h3>
        <p>このアプリはそのようなお客様をサポートするアプリ</p>
      </div>
    </div>
    <div class="">
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

      <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="recommend" data-size="small" data-share="false"></div>
  
  </div>
  <footer>
    <nav class="footer_nav">
    <ul>
          <li>
            <a href="">top</a>
          </li>
          <li>
            <a href="">sign up</a>
          </li>
          <li>
            <a href="">お問い合わせ</a>
          </li>
        </ul>
    </nav>
  </footer>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v8.0&appId=2731799030261565&autoLogAppEvents=1" nonce="ykDF24Cg"></script>
@endsection



