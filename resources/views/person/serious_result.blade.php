@extends('person/layout')
@section('content')
<body>
    <?php 
        
        switch (true) {
            case $sum >= 13.6;
               $msg = '計画屋タイプ';
               $img = "/images/shutterstock_403187164.jpg";
                $ssg = '自分の計画を乱さない';
               $detail1 = '鬼ストイック';
               $sbmsg1 = '勤勉性がとても高いあなたは、自分が決めた目標に大して決まった手順を自分で考えて実行していくくタイプです。なので目標達成する可能性が非常に高い人物であります。また、滅多なことがない限り、途中で仕事を放り出すことはありません。むしろ、諦めが悪いタイプです。周りの人たちからは仕事ができる人と思われているかもしれませんね。';

               $detail2 = '一点集中';
               $sbmsg2 = '一方で勤勉性が高い人は一つのことに高い集中力を持って取り組んでいきます。そのため、マルチタスクな仕事に着くと少しストレスが溜まっていくかもしれません。また、プライベートでも仕事や目標に取り組む傾向があります。なので、恋人や友人の距離を少し取ってしまう時期があるかもしれません。';

               $detail3 = '視野を広げる';
               $sbmsg3 = '仕事や目標を全力で取り組むことは人生をより充実してくれることです。しかし、計画通りに行動しても解決できない問題に遭遇したときには、一旦立ち止まって休憩するのもいい解決に繋がるかもしれません。';

               $boxmain1 ='自己鍛錬';
               $boxdetail1='目標達成に全力で取り組むため、必然的に自分を鍛え上げます。鍛錬して成長することに喜びを感じるタイプです。';

               $boxmain2 ='一点集中';
               $boxdetail2='一つのことに集中するので、仕事や学業でも成功しやすいタイプです。';

               $boxmain3 ='計画屋';
               $boxdetail3='持ち前の集中力や衝動抑制で計画通りに実行することができます。旅行でも計画を立てながら準備をするタイプでしょう。';

               $boxmain4='両立が苦手';
               $boxdetail4='高い集中力が故に複数の仕事を行う際に戸惑う可能性があります。優先順位を決めていくのはいい方法かもしれません。';

               $boxmain5='信頼性';
               $boxdetail5='高い勤勉性で仕事を行うがために、部下や上司から高い信頼感をエルことができます。よく仕事の相談をされたことはありませんか？';

               $boxmain6='衝動に強い';
               $boxdetail6='衝動をコントロールするのがうまいため、滅多に仕事を投げ出すことはありません。';
                break;

            case $sum >= 4.9 && $sum <= 13.5;
                 $msg = 'コツコツタイプ';
                 $img = "/images/shutterstock_699712699.jpg";
                 $ssg = '積み上げ型';
                $detail1 = '着実に取り組む';
                $sbmsg1 = '勤勉性がかなり高いあなたは仕事や目標をコツコツと積み上げていき、実績を上げていくタイプです。長い時間を費やす資格試験や仕事でも、うまく習慣化することで実行することができる人です。また、勤勉性が高い人の傾向として浮気をする可能性が低くなります。なので、長期的なパートナーとしてむいていられます。';
 
                $detail2 = '同時進行が苦手';
                $sbmsg2 = 'ただ、仕事や目標に熱中するあまりにプライベートの時間を少し犠牲にしてしまう傾向もあります。仕事に熱中して時間が早く感じてしまう経験をしたことはありませんか？また、計画通りに行かないと少し戸惑ってしまう可能性もあります。';
 
                $detail3 = 'バランスを重視する';
                $sbmsg3 = 'もし自分が仕事に集中しすぎているなと思ったら、一旦仕事を程々にしてプライベートの時間を取ってみるのもいいかもしれません。また、優先順位を明確にして計画通りに行かなかった場合の対処法を考えてみるのもいい方法でしょう。';
 
                $boxmain1 ='自己鍛錬';
                $boxdetail1='目標達成に全力で取り組むため、必然的に自分を鍛え上げます。鍛錬して成長することに喜びを感じるタイプです。';
 
                $boxmain2 ='一点集中';
                $boxdetail2='一つのことに集中するので、仕事や学業でも成功しやすいタイプです。';
 
                $boxmain3 ='計画屋';
                $boxdetail3='持ち前の集中力や衝動抑制で計画通りに実行することができます。旅行でも計画を立てながら準備をするタイプでしょう。';
 
                $boxmain4='両立が苦手？';
                $boxdetail4='高い集中力が故に複数の仕事を行う際に戸惑う可能性があります。優先順位を決めていくのはいい方法かもしれません。';
 
                $boxmain5='信頼性';
                $boxdetail5='高い勤勉性で仕事を行うがために、部下や上司から高い信頼感をエルことができます。よく仕事の相談をされたことはありませんか？';
 
                $boxmain6='衝動に強い';
                $boxdetail6='衝動をコントロールするのがうまいため、滅多に仕事を投げ出すことはありません。';
                 break;
 

            case $sum >= -4.8 && $sum <= 4.8;
                $msg = 'スイッチタイプ';
                $img = "/images/shutterstock_1716129895.jpg";
                $ssg = 'ON/OFF切替できる';
               $detail1 = '合理性を重視する';
               $sbmsg1 = '勤勉性が標準なあなたは、仕事とプライベートをうまく両立できるタイプです。仕事ではすごくきっちりとしているがプライベートでは結構緩いことがあるかもしれません。また、仕事の中でも力を抜く部分と力をいれる部分を明確に分けることができるとても器用なタイプでもあります。';

               $detail2 = '関係の変化';
               $sbmsg2 = 'この器用さはプライベートでも現れます。友人関係では、初対面の人に対してはとても気を使います。しかし仲が深まると、気楽で少し雑に対応してしまうこともあります。恋人関係でも同じことがあります。';

               $detail3 = '器用さを生かす';
               $sbmsg3 = '持ち前の器用さは、どんな環境や分野においても生かすことができるでしょう。積極てきに新しいことをチャレンジしてもバランスよく活動することができるので、満足度が高い人生を送ることが出来るでしょう。';

               $boxmain1 ='自己鍛錬';
                $boxdetail1='目標達成に全力で取り組むため、必然的に自分を鍛え上げます。鍛錬して成長することに喜びを感じるタイプです。';
 
                $boxmain2 ='一点集中';
                $boxdetail2='一つのことに集中するので、仕事や学業でも成功しやすいタイプです。';
 
                $boxmain3 ='計画屋';
                $boxdetail3='持ち前の集中力や衝動抑制で計画通りに実行することができます。旅行でも計画を立てながら準備をするタイプでしょう。';
 
                $boxmain4='両立が苦手？';
                $boxdetail4='高い集中力が故に複数の仕事を行う際に戸惑う可能性があります。優先順位を決めていくのはいい方法かもしれません。';
 
                $boxmain5='信頼性';
                $boxdetail5='高い勤勉性で仕事を行うがために、部下や上司から高い信頼感をエルことができます。よく仕事の相談をされたことはありませんか？';
 
                $boxmain6='衝動に強い';
                $boxdetail6='衝動をコントロールするのがうまいため、滅多に仕事を投げ出すことはありません。';
                 break;

                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '衝動タイプ';
                $img = "/images/shutterstock_1466073518.jpg";
                $ssg = '自分の本能に素直な';
               $detail1 = '自分に素直';
               $sbmsg1 = '勤勉性が少し低いあなたは、思い立ったら考える前に行動することができるタイプです。例えば、やりたいことがあった場合にすぐ必要な物を揃えて行動することができます。けれど計画が全くできないタイプではないので、必要な時かやるべきことを実行することができます。';

               $detail2 = '衝動性の弱さ';
               $sbmsg2 = 'しかし、多少の勤勉性があるにしも衝動に少し弱い傾向があります。「ダイエットしてたのに飴玉を食べたから今日は食べる日にしよう!]という経験はありませんか？また、勉強や趣味に飽きてしまって途中で投げ出してしまう傾向があります。';

               $detail3 = '行動力を生かす';
               $sbmsg3 = '持ち前の行動力はどんな状況下に置かれても素早く行動することができるのでその特性を生かせる仕事や趣味を選ぶとその特性を行かせます。それでも物事を継続したい場合は、小さな一歩を習慣化する方法を見つけるとうまくいく可能性があります。';

               $boxmain1 ='行動力';
               $boxdetail1='物事を次から次へと取り組むことができるタイプは、必然的に行動をすることが増えます。「行動力がすごいね！」と周りから言われたことはありませんか？';

               $boxmain2 ='浮気性';
               $boxdetail2='行動力の高さは逆にいうと一つのことにあまり集中できないタイプでもあります。これは恋愛でも同じことが怒るかもしれません、、、';

               $boxmain3 ='旅行好き';
               $boxdetail3='旅行は新しい物や出来事に溢れています。新しい物好きな人は気持ちが満たされるでしょう。';

               $boxmain4='多趣味';
               $boxdetail4='趣味が他の人より多くありませんか？多くのことにチャレンジしているタイプなので、より広い分野を経験することができる人です。';

               $boxmain5='慣れが早い';
               $boxdetail5='状況に応じて素早く対応することができます。新しい環境に置かれても無理なく活動することができるので、今の時代で非常に生きやすい人かもしれませんね';

               $boxmain6='太りやすい';
               $boxdetail6='目の前にあったお菓子を無意識に食べてしまった経験を一日に多く経験したことがありませんか？。衝動に弱いタイプなので、健康では少し気を使った方が良いかもしれませんね。';
                break;

            case $sum <= -13.6;
                $msg = 'ハンタータイプ';
                $img = "/images/shutterstock_1502561861.jpg";
                $ssg = '思い立ったら即行動';
               $detail1 = '素早い行動力';
               $sbmsg1 = '勤勉性がとても低いあなたは、素晴らしい行動力を持っています。自分の感情に素直で、やりたい事があったら躊躇なく飛びつく事ができます。また、複雑な状況下でもやることを決めて素早い対応することができます。';

               $detail2 = '我慢が苦手';
               $sbmsg2 = '一方、継続することでしかできない仕事や資格試験、スキルを身に着けることが苦手なタイプでもあります。「その仕事には興味があるけど、途中でやめてしまいそうやな。」と思ったことはありませんか？また、その行動力が高いが故に多くの問題に当たってしまう可能性もあります。';

               $detail3 = '衝動のコントロール';
               $sbmsg3 = '行動力があることは人生をより良い方向へ導いてくれるでしょう。しかし、行動する前に失敗に対して十分考えたり、耐え抜くところは我慢するとより多い経験や成功を得ることができるようになるかもしれません。衝動をコントロールすることを学んでみましょう。';

               $boxmain1 ='行動力';
               $boxdetail1='物事を次から次へと取り組むことができるタイプは、必然的に行動をすることが増えます。「行動力がすごいね！」と周りから言われたことはありませんか？';

               $boxmain2 ='浮気性';
               $boxdetail2='行動力の高さは逆にいうと一つのことにあまり集中できないタイプでもあります。これは恋愛でも同じことが怒るかもしれません、、、';

               $boxmain3 ='旅行好き';
               $boxdetail3='旅行は新しい物や出来事に溢れています。新しい物好きな人は気持ちが満たされるでしょう。';

               $boxmain4='多趣味';
               $boxdetail4='趣味が他の人より多くありませんか？多くのことにチャレンジしているタイプなので、より広い分野を経験することができる人です。';

               $boxmain5='慣れが早い';
               $boxdetail5='状況に応じて素早く対応することができます。新しい環境に置かれても無理なく活動することができるので、今の時代で非常に生きやすい人かもしれませんね';

               $boxmain6='太りやすい';
               $boxdetail6='目の前にあったお菓子を無意識に食べてしまった経験を一日に多く経験したことがありませんか？。衝動に弱いタイプなので、健康では少し気を使った方が良いかもしれませんね。';
                break;
        }
    ?>
    <div class="container-fluid">
        <div id="app">
         <div class="row fixed-top">
                <header class="content_head col-sm-12">
                    <div>
                        <div class="header_title">
                            <h1>person</h1>
                        </div>
                            <div :class="{'is-active':isActive}" class="btn-humburger" @click="toggleButton">
                                <div></div>
                                <div></div>
                            </div>
                            <transition name="navi">
                            <nav class="navi" v-show="isActive">
                                    <ul>
                                        <li><a href="">トップページ</a></li>
                                        <li><a href="">お問い合わせ</a></li>
                                        <li><a href="">ログイン</a></li>
                                    </ul>
                                </nav>
                            </transition>
                    </div>
                </header>
            </div>
            <div class="row">
                <div class="character_result kind_result">
                    <div class="character_bigcontent kind_bigcontent">
                        <img  src="{{ $img }}" alt="">
                        <div class="character_text seriouscontent_text">
                            <h3>{{ $ssg }}</h3>
                            <h1>{{ $msg }}</h1>
                        </div>
                    </div>
                    <div class="col-sm-12 serious_good">
                        <div class="character_subcontent kind_subcontent">
                            <div class="character_msg">
                                <h1 class="character_title subcontent_title">{{ $detail1 }}</h1>
                                <p>{{ $sbmsg1 }}</p>
                            </div>
                            <div class="character_msg">
                                <h1 class="character_title subcontent_title">{{ $detail2 }}</h1>
                                <p>{{ $sbmsg2 }}</p>
                            </div>
                            <div class="character_msg">
                                <h1 class="character_title subcontent_title">{{ $detail3 }}</h1>
                                <p>{{ $sbmsg3 }}</p>
                            </div>
                        </div>
                        <div class="character_detail kind_detail">
                            <h2 class="special_text serious_text">{{ $msg }}さんの特徴</h2>
                            <div class="character_boxes">
                                <div class="character_box">
                                    <h3>{{ $boxmain1 }}</h3>
                                    <p>{{ $boxdetail1 }}</p>
                                </div>
                                <div class="character_box">
                                    <h3>{{ $boxmain2 }}</h3>
                                    <p>{{ $boxdetail2 }}</p>
                                </div>
                                <div class="character_box">
                                    <h3>{{ $boxmain3 }}</h3>
                                    <p>{{ $boxdetail3 }}</p>
                                </div>
                                <div class="character_box">
                                    <h3>{{ $boxmain4 }}</h3>
                                    <p>{{ $boxdetail4 }}</p>
                                </div>
                                <div class="character_box">
                                    <h3>{{ $boxmain5 }}</h3>
                                    <p>{{ $boxdetail5 }}</p>
                                </div>
                                <div class="character_box">
                                    <h3>{{ $boxmain6 }}</h3>
                                    <p>{{ $boxdetail6 }}</p>
                                </div>
                            </div>
                            @if( Auth::check() )
                              @if( isset($youid ) )
                                <div class="submit">
                                    <form action="/person/user/<?php echo $youid; ?>" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info w-50" id="next_button">userpage</button>
                                    </form>
                                </div>
                                @else
                                <div class="submit">
                                    <form action="/person/mypage" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info w-50" id="next_button">mypage</button>
                                    </form>
                                </div>
                              @endif
                            @else
                            <div class="submit">
                                <form action="/person/openness" method="get">
                                <button type="submit" class="btn btn-outline-light w-50" id="next_button">開放性テスト</button>
                                </form>
                            </div>
                            @endif                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



