@extends('person/layout')
@section('content')
<body>
      <div class="container-fluid">
        <div id="app">
          <div class="row">
            <div class="header col-sm-12">
              <div class="back-font">
                <h1>person</h1>
                <nav class=top_nav>
                  <ul>
                    <li>
                      <a href=" {{ url('/person/test') }}">test</a>
                    </li>
                    <li>
                      <a href="" v-on:click.prevent.stop="openModal">sign up</a>
                    </li>
                    <li>
                      <a href="{{ url('/person/contact') }}">お問い合わせ</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div id="overlay" v-show="showContent">
              <div class="login_form">
                <form action="top_blade_php" method="post">
                  <div>
                      <div class="login_title"><h3>login</h3></div>
                        <div>
                          <div class="email_form">
                            <p class="form_text">email</p>
                            <input type="text" name="login_mail" class="login_mail" placeholder="your@emal">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="pass_form">
                            <p class="form_text">password</p>
                            <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                            <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                          </svg></span>
                            <input type="text" name="login_pass" class="login_pass" placeholder="password">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
                          </div>
                        </div>
                  </div>
                  <button  type="submit" class="btn btn-primary" id="login_submit" >submit</button>
                </form>
                <button class="btn btn-info"id="login_submit" v-on:click="closeModal">close</button>
              </div>
              <p></p>
            </div>
            </div>
          </div>
          <div class="row fadeIn">
          <div class="top_intro col-sm-12 data-delighter">
            <h1 class="intro_title">基本機能</h1>
            <div class="boxes">
              <div class="box">
              <h3>性格診断</h3>
                <i class="fas fa-user-friends fa-3x" id="mark"></i>
                <p>big5からなる性格診断で5つの観点から性格をみることができます。ご自身の性格の特徴を詳しく説明しつつ、グラフなどを使ってわかりやすくしています。心理学に基づいた研究で、知らない自分の一面を知ることができます。
                </p>
              </div>
              <div class="box">
                <h3>相手の性格診断</h3>
                <i class="fas fa-user-circle fa-3x" id="mark"></i>
                <p>ID検索をすることで、気になっている相手の性格をみて分析してみよう。相手の性格を見ることで、相手のことをより詳しく理解できます。人によって性格は違ってきますから、客観的に他人と自分の違いを見る事もできます。
                </p>
              </div>
              <div class="box">
              <h3>コストがかからない</h3>
              <i class="fas fa-male fa-3x" id="mark"></i>
              <p>personの基本機能は無料です。なので、何度も相手や自分を診断することができます。自分を知ることや、相手を理解する事、人間関係を充実させる一つのツールとしてどんどん使用してください。きっと手助けになるはずです。</p>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="big5">
            <div class="big5_text">
              <h1>big5テスト</h1>
              <p>big5とは、人間の性格を５つのパーソナリティ特性で把握するという理論です。</p>
              <p>1980年代から現代にかけて研究者から多くの信頼性を得られているテストでもあります。</p>
            </div>
            <div class="big5_content">
             <h3>5つの特性</h3> 
             <div class="big5_point">
               <div class="big5_detail detail1">
                 <h4>外向性</h4>
                 <p>外の刺激に大してポジティブな反応、外に関心があるのかを示す性質
                 </p>
                 <p>キーワード：自己主張 活動性 社交性</p>
               </div>
               <div class="big5_detail detail2">
                 <h4>勤勉性</h4>
                 <p>衝動や欲望をうまくコントロールすること、物事に大して真面目に取り組む性質</p>
                 <p>キーワード：計画性 慎重 自己探求</p>
               </div>
               <div class="big5_detail detail3">
                 <h4>協調性</h4>
                 <p>他人に大しての思いやり、集団行動でどれだけ他の人たちと協力できるのかを示す性質</p>
                 <p>キーワード：優しさ グループ 利他性</p>
               </div>
               <div class="big5_detail detail4">
                 <h4>開放性</h4>
                 <p>知的好奇心の高さ、新しいことに対しての興味、勉学などにどれだけ興味があるのかを表す性質</p>
                 <p>キーワード：新しさ 興味の広さ 想像力</p>
               </div>
               <div class="big5_detail detail5">
                 <h4>神経症的傾向</h4>
                 <p>感情の安定さやストレスに対しての感受性を表す性質</p>
                 <p>キーワード：傷つきやすさ 衝動性 不安性</p>
               </div>
             </div>
            </div>
          </div>
        </div>

      <div class="top_text detail">
        <div class="text_means">
          <h1>素の自分を探してみませんか?</h1>
          <p>人生を生きていく上で自分の性格を知ることは重要なこと。</p>
          <p>自分の性格をもっと知りたい人は多いはず。</p>
          <h3>person</h3>
          <p>このアプリはそのようなお客様をサポートするアプリ。</p>
          <p>自分でも知らない自分を知ってしまいましょう。</p>
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
          <div class="footer_title col-sm-12" id="footer_titles">
              <p>© person 2020</p>
          </div>
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



