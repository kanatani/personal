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
                      <a href=" {{ url('/person/loguin') }}">sign up & login</a>
                    </li>
                    <li>
                      <a href="{{ url('/person/contact') }}">お問い合わせ</a>
                    </li>
                  </ul>
                </nav>
              </div>
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
          <div class="top-intro-text">
            <h2>まずはテストを受けてみてください!</h2>
            <form action="/person/test" method="GET" class="top-intro-form">
              <button type="submit" class="btn btn-outline-info" id="intro-test-button">big5 test</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
                <footer class="test_footer">
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
    <script src="{{ asset('/js/index.js') }}"></script>
    <script src="{{ asset('/js/head.js') }}"></script>
@endsection



