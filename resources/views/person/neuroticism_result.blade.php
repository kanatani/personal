@extends('person/layout')
@section('content')
<body>
    <?php 
       
        
        switch (true) {
            case $sum >= 13.6;
               $$msg = '芸術家タイプ';
               $img = "/images/shutterstock_1080828530.jpg";
               $ssg = '周りの刺激を表現に変える';
               $detail1 = '芸術家のの素質';
               $sbmsg1 = '神経症的傾向がとても高いあなたはガラスのハートの持ち主です。これは一見悪いように思われますが、メンタルの弱さはクリエイティブとの関わりがあります。例えば、有名な漫画家や音楽家、作家などの人達はメンタルが弱い傾向にあります。そのメンタルの弱さを使って素晴らしい作品や曲を作ることができます。感受性が豊かな故にできることでもあります。何かを使って自分を表現することが得意かもしれません。';

               $detail2 = '無意識に自分を傷つける';
               $sbmsg2 = 'その一方で一般の人たちよりメンタルがかなり弱いので、ストレスコントロールするのが苦手な傾向があります。バイトでお客さんに怒られたり職場で上司に叱られたことを2,3日も引きずっていることはありませんか？そのストレスを抱え込んでしまうと、いつか自分を傷つけることに繋がるかもしれません。';

               $detail3 = 'ストレスをコントロールする';
               $sbmsg3 = 'その繊細さ故にストレスをため込んでいると感じたら、ストレスの対処法を考えてみた方が良いかもしれません。例えばそのストレスを運動や散歩で解消するのも良いですし、その繊細さをクリエイティブな趣味に使って活躍するのも良い方法です。その繊細さを上手く使っていくと、あなたにとって掛け替えのない能力になり得るでしょう。';

               $boxmain1 ='芸術家';
               $boxdetail1='クリエイティブ能力が高いので、作品を作って自分を表現するのが得意なタイプです。また、感受性がとても豊かです。もしかしたら、あなたのファンがいるかもしれません。';

               $boxmain2 ='傷つきやすい';
               $boxdetail2='ストレスに弱い傾向があるので、何か悪いことがあると落ち込んだり、動揺したりすることが多い性格でもあります。';

               $boxmain3 ='怖がり';
               $boxdetail3='ホラーや恐怖を感じる物に敏感なので、リアクション的にはとても良い反応を示すでしょう。';

               $boxmain4='危機回避能力';
               $boxdetail4='あらゆる危険を事前に察することができます。なので、失敗する可能性が低くなるでしょう。';

               $boxmain5='反芻思考';
               $boxdetail5='一度受けたストレスを何回も繰り返すタイプです。三日前に友達や上司に言われた何気ない一言を覚えているかもしれません。';

               $boxmain6='未来の予想';
               $boxdetail6='メンタルの弱さは未来に対することに目を向ける能力をみに付けてくれます。上手く使うと未来を予想して今できることを予想することができるので、より失敗の少ない人生を歩めるかもしれません。';
                break;

            case $sum >= 4.9 && $sum <= 13.5;
                $msg = '石橋叩くタイプ';
                $img = "/images/shutterstock_603829727.jpg";
                $ssg = '潜在的な危機を回避する';
                $detail1 = 'チームワーク';
                $sbmsg1 = '協調性がかなり高いあなたは他人を助けるのが好きでグループ活動もかなり得意なタイプです。しかし、他人を助けすぎて自分を犠牲にするまで貢献するタイプではなく、自分の状態を客観的にみることもできます。自分に余裕があれば他人を助けられるタイプなのでバランスよく生活を送ることができます。';
 
                $detail2 = 'リードする力';
                $sbmsg2 = 'バランスが取れてる協調性タイプでも、自分と他人との境界線が一般より緩い傾向があります。なので、競争が激しい環境だと周りの変化に流されやすくなる傾向があります。また、グループ活動でも自分の意見を言いにくく、流されやすいタイプでもあります。';
 
                $detail3 = '自分の意見を少し尊重する';
                $sbmsg3 = '環境に流されそうになったら、自分の本心に目を向けて周りの人と自分の意見の優先度を比べてみるといいかもしれません。そうすると、自分が今すべき行動を見つけられて自分の意見を尊重できます。';
 
                $boxmain1 ='利他性が高い';
                $boxdetail1='周りの人が困っているときにすかさず手助けができる人です。よく優しい人と言われたことはありませんか？';
 
                $boxmain2 ='グループ活動';
                $boxdetail2='周りの意見を尊重できるあなたは、グループ活動を行う上で非常に欠かせない人物です。よく他人から活動を誘われませんか？';
 
                $boxmain3 ='敵対心がない';
                $boxdetail3='他人を疑うことが滅多にないので、敵対心を持つことが少ないでしょう。なので、悪い人からは少し距離をおいた環境にいた方がいいかもしれません。';
 
                $boxmain4='慎み深さ';
                $boxdetail4='他人に大して貢献することが得意な人は必然的にちとに優しくできる人でしょう。';
 
                $boxmain5='友達が多い';
                $boxdetail5='周りからとても好かれやすいので友達を多く作ることができる人です。';
 
                $boxmain6='自己犠牲';
                $boxdetail6='競争を元にした環境では、少し不利な環境におかれる可能性があります。自己犠牲には注意した方がいいでしょう。';
                 break;

            case $sum >= -4.8 && $sum <= 4.8;
                $msg = '占い師タイプ';
                $img = "/images/shutterstock_478518385.jpg";
                $ssg = '弱さと強さを兼ね備える';
               $detail1 = '合理性を重視する';
               $sbmsg1 = '協調性が標準なあなたは、客観性と協調性を兼ね備えたバランスが良いタイプです。グループ活動にもある程度馴染むことができ、自分一人でも物事を実行することができます。この特性はグループ活動で問題が起こったときに共感と客観を用いて問題をスムーズに解決することができる特性です。なのでグループに一人は欲しい人材ですね。';

               $detail2 = '周りへの理解';
               $sbmsg2 = '共感力が標準な人はある場面では共感性、別の場面では共感性を発揮しない場面があるかもしれません。それ故、場面での行動が共通していないがため「何を考えているかわからない」、「いい人だと思ったのに、、、」と誤解される可能性があります。';

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
                $msg = '頼れるお兄さんタイプ';
                 $img = "/images/shutterstock_1692488656.jpg";
                 $ssg = '困難な場所でも冷静に動ける';
               $detail1 = '合理性を重視する';
               $sbmsg1 = '協調性が少し低いあなたは他人に流されにくく、自分の意見を持てるタイプです。自分で合理的な判断を行うことができるので、共感力が高い人に比べて客観的に物事を行う事ができます。なので、他人よりも早く正解や成功にたどり着くことができます。';

               $detail2 = '少しのジレンマ';
               $sbmsg2 = 'しかし、全く協調性がないとまではいかず、多少は他人が気になっていることがあります。少しは他人を助けたいと思いつつも、自分の意見を重視するので素直に他人を助けることができない場合があるかもしれません。また、独自性が強いが故に敵を作りやすいタイプでもあり、よりいっそ素直になれない可能性があります。';

               $detail3 = '他者への思いやり';
               $sbmsg3 = '自分の意見を大切にすることは大事ですが、少しの時間を他人への手助けに使うとあなたの気持ちをわかってくれたり、困ったときに手伝ってくれる人が多くなるでしょう。';

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
                $msg = '騎士タイプ';
                $img = "/images/shutterstock_1586081839.jpg";
                $ssg = '鋼のメンタルの持ち主';
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

    <div class="container-fluid result">
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
                                <div class="character_text bigcontent_text">
                                    <div class="col-sm-12">
                                        <h3>{{ $ssg }}</h3>
                                        <h1>{{ $msg }}</h1>
                                    </div>
                                </div>
                            </div>
                    <div class="col-sm-12 character_good">
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
                            <h2 class="special_text">{{ $msg }}さんの特徴</h2>
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
                                <button type="submit" class="btn btn-outline-info w-50" id="kind_button">勤勉性テスト</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



