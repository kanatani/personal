@extends('person/layout')
@section('content')
<body>
      <div class="container-fluid">
        <div class="row">
          <div class="header col-sm-12">
            <div class="back-font">
              <h1>person</h1>
              <nav class=top_nav>
                <ul>
                  <li>
                    <a href=" {{ url('/person/test') }} ">test</a>
                  </li>
                  <li>
                    <a href="">sign up</a>
                  </li>
                  <li>
                    <a href="{{ url('/person/contact') }}">お問い合わせ</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          </div>
          <div class="row fadeIn">
          <div class="top_intro col-sm-12 data-delighter">
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
        </div>

        <div class="row">
          <div class="big5">
            <div class="big5_text">
              <h1>big5テスト</h1>
              <p>bog5とは、人間を５つのパーソナリティ特性で把握するという理論です。</p>
            </div>
            <div class="big5_content">
             <h3>5つの特性</h3> 
             <div class="big5_point">
               <div class="big5_detail detail1">
                 <h4>外向性</h4>
                 <p>外の刺激に大してポジティブな反応、外に関心があるのかを示す性質</p>
               </div>
               <div class="big5_detail detail2">
                 <h4>勤勉性</h4>
                 <p>衝動や欲望をうまくコントロールすること、物事に大して真面目に取り組む性質</p>
               </div>
               <div class="big5_detail detail3">
                 <h4>協調性</h4>
                 <p>他人に大しての思いやり、集団行動でどれだけ他の人たちと協力できるのかを示す性質</p>
               </div>
               <div class="big5_detail detail4">
                 <h4>開放性</h4>
                 <p>知的好奇心の高さ、新しいことに対しての興味、勉学などにどれだけ興味があるのかを表す性質</p>
               </div>
               <div class="big5_detail detail5">
                 <h4>神経症的傾向</h4>
                 <p>感情の安定さやストレスに大しての感受性を表す性質</p>
               </div>
             </div>
            </div>
          </div>
        </div>

      <div class="top_text detail">
        <div class="text_means">
          <h1>素の自分を探してみませんか</h1>
          <p>人生を生きていく上で自分の性格を知ることは重要なこと</p>
          <p>しかし素の性格を知らない人が多くいる</p>
          <h3>person</h3>
          <p>このアプリはそのようなお客様をサポートするアプリ</p>
        </div>
      </div>

      <div class="social_button">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="recommend" data-size="small" data-share="false"></div>
        <div class="row">
          <footer class="col-sm-12">
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
        </div>
    </div>
    <script src="{{ asset('/js/jquery.bgswitcher.js') }}"></script>
    
    <script>
    
      jQuery(function($) {
        $('.header').bgSwitcher({
          images: ['images/shutterstock_622200797.jpg','images/768013045-huge.jpg','images/shutterstock_762804607.jpg'], // 切り替え画像
            Interval: 5000, //切り替えの間隔 1000=1秒
            start: true, //$.fn.bgswitcher(config)をコールした時に切り替えを開始する
            loop: true, //切り替えをループする
            shuffle: false, //背景画像の順番をシャッフルする
            effect: "fade", //エフェクトの種類 "fade" "blind" "clip" "slide" "drop" "hide"
            duration: 3000, //エフェクトの時間 1000=1秒
            easing: "swing", //エフェクトのイージング "swing" "linear"
        });
      });

    </script>
    <script src="{{ asset('/js/head.js') }}"></script>
@endsection



