@extends('person/layout')
@section('content')
<body>
    <?php 
       
        
        switch (true) {
            case $sum >= 13.6;
               $msg = '計画タイプ';
               $img = "/images/shutterstock_1586081839.jpg";
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

               $boxmain4='両立が苦手？';
               $boxdetail4='高い集中力が故に複数の仕事を行う際に戸惑う可能性があります。優先順位を決めていくのはいい方法かもしれません。';

               $boxmain5='信頼性';
               $boxdetail5='高い勤勉性で仕事を行うがために、部下や上司から高い信頼感をエルことができます。よく仕事の相談をされたことはありませんか？';

               $boxmain6='衝動に強い';
               $boxdetail6='衝動をコントロールするのがうまいため、滅多に仕事を投げ出すことはありません。';
                break;

            case $sum >= 4.9 && $sum <= 13.5;
                 $msg = 'コツコツタイプ';
                 $img = "/images/shutterstock_1692488656.jpg";
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
                $img = "/images/shutterstock_478518385.jpg";
                $ssg = 'ON/OFF切替できる';
               $detail1 = '合理性を重視する';
               $sbmsg1 = '勤勉性が標準なあなたは、仕事とプライベートをうまく両立できるタイプです。仕事ではすごくきっちりとしているがプライベートでは結構緩いことが多いと言い換えられます。また、仕事の中でも力を抜く部分と力をいれる部分を明確に分けることができるとても器用なタイプでもあります。';

               $detail2 = '器用さ故に';
               $sbmsg2 = 'しかし、活動を器用に調節できるが故に';

               $detail3 = '積極性';
               $sbmsg3 = '客観性と協調性のバランスはとても良い財産ではあります。しかし、もし困っている人が目の前にいたときは普段より積極的に手助けをした方が周りの誤解も晴れることができるでしょう。';

               $boxmain1 ='カリスマ性';
               $boxdetail1='周りと合わせないので自分なりの考えを貫くことができます。';
               $boxmain2 ='敵が多い';
               $boxdetail2='独自性が高いが故にてきを作りやすい';

               $boxmain3 ='リーダーシップ';
               $boxdetail3='周りの人から頼りにされたことはありませんか？';

               $boxmain4='ストイック';
               $boxdetail4='自分にも他人にも客観的な視点で捉えるため、必然的にストイックになる。';

               $boxmain5='違和感';
               $boxdetail5='グループ活動をしているとき,常にモヤモヤとした違和感を感じませんか?';

               $boxmain6='競争心';
               $boxdetail6='競争を元にした環境では、その独自性をはっきできるでしょう。';
                break;

                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '素直タイプ';
                $img = "/images/shutterstock_603829727.jpg";
                $ssg = '自分の本能に素直な';
               $detail1 = '自分に素直';
               $sbmsg1 = '勤勉性が少し低いあなたは、思い立ったら考える前に行動することができるタイプです。例えば、やりたいことがあった場合にすぐ必要な物を揃えて行動することができます。けれど計画が全くできないタイプではないので、必要な時かやるべきことを実行することができます。';

               $detail2 = '衝動性の弱さ';
               $sbmsg2 = 'しかし、多少の勤勉性があるにしも衝動に少し弱い傾向があります。「ダイエットしてたのに飴玉を食べたから今日は食べる日にしよう!]という経験はありませんか？また、勉強や趣味に飽きてしまって途中で投げ出してしまう傾向があります。';

               $detail3 = '行動力を生かす';
               $sbmsg3 = '持ち前の行動力はどんな状況下に置かれても素早く行動することができるのでその特性を生かせる仕事や趣味を選ぶとその特性を行かせます。それでも、物事を継続したい場合は小さな一歩を習慣化する方法を見つけるとうまくいく可能性があります。';

               $boxmain1 ='カリスマ性';
               $boxdetail1='周りと合わせないので自分なりの考えを貫くことができます。';
               $boxmain2 ='敵が多い';
               $boxdetail2='独自性が高いが故にてきを作りやすい';

               $boxmain3 ='リーダーシップ';
               $boxdetail3='周りの人から頼りにされたことはありませんか？';

               $boxmain4='ストイック';
               $boxdetail4='自分にも他人にも客観的な視点で捉えるため、必然的にストイックになる。';

               $boxmain5='違和感';
               $boxdetail5='グループ活動をしているとき,常にモヤモヤとした違和感を感じませんか?';

               $boxmain6='競争心';
               $boxdetail6='競争を元にした環境では、その独自性をはっきできるでしょう。';
                break;

            case $sum <= -13.6;
                $msg = '速攻行動力タイプ';
                $img = "/images/shutterstock_1080828530.jpg";
                $ssg = '一人で物事を遂行する';
               $detail1 = 'カリスマ性や独自性';
               $sbmsg1 = '協調性がとても低いあなたは集団で行動するより一人で行動する方が好きなタイプ。自分が正しいと思ったことは周りの意見関係なく自分を信じることができる人なので、独自性やカリスマ性があると考えれます。このような人たちは共感より論理的思考が長けている成功者の多くが持っている性格なので、個人的な成功ができる可能性があります。';

               $detail2 = 'カリスマ性故の問題';
               $sbmsg2 = 'しかしその独自性が高いが故に他人との衝突やチームワークから外れる傾向があります。自分は悪いことはしていないと思っていても周りの人からは少し怖い人と思われている可能性があるかもしれません。また、大きな壁にぶつかった時にチームワークを組んで解決することを苦手と感じているかもしれません。';

               $detail3 = '他人との共感';
               $sbmsg3 = '自分の意見を大切にすることは生きていく上で非常に重要なことですが,他の人たちの意見にもう少し傾聴したら共感できる部分を見つけられ、他人とうまく付き合うことができるかもしれません。そうすれば自分で解決できない大きな問題に直面したときに助けてくれる人たちが多いことに気づくでしょう。';

               $boxmain1 ='カリスマ性';
               $boxdetail1='周りと合わせないので自分なりの考えを貫くことができます。';
               $boxmain2 ='敵が多い';
               $boxdetail2='独自性が高いが故にてきを作りやすい';

               $boxmain3 ='リーダーシップ';
               $boxdetail3='周りの人から頼りにされたことはありませんか？';

               $boxmain4='ストイック';
               $boxdetail4='自分にも他人にも客観的な視点で捉えるため、必然的にストイックになる。';

               $boxmain5='違和感';
               $boxdetail5='グループ活動をしているとき,常にモヤモヤとした違和感を感じませんか?';

               $boxmain6='競争心';
               $boxdetail6='競争を元にした環境では、その独自性をはっきできるでしょう。';
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
                            <div class="submit">
                                <form action="/person/serious" method="get">
                                <button type="submit" class="btn btn-outline-light w-50" id="next_button">開放性</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



