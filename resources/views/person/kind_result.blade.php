@extends('person/layout')
@section('content')
<body>
    <?php 
        switch (true) {
            case $sum >= 13.6;
               $msg = 'キリストタイプ';
               $img = "/images/shutterstock_1586081839.jpg";
                $ssg = '他人を愛してやまない';
               $detail1 = '利他性の鏡';
               $sbmsg1 = '協調性がとても高いあなたは他人を助けるのに躊躇せず、とても良い対人関係を築くことができる人です。他人に対して丁寧に気を配ることができるので、周りの人たちからは優しい人と思われているかもしれません。グループ活動の時も周りの意見を尊重できるので、とてもスムーズに活動することができます。また、周囲の人たちからとても好かれやすい傾向があるので、もしものときに助けてくれる人たちが多い傾向があります。この持ち前の共感力を仕事に使うと、相手の欲しいものを考えることができるのでより需要が高いアイデアを思いつくことができるはずです。';

               $detail2 = '自己犠牲';
               $sbmsg2 = 'しかし、とても協調性が高い人はその特性故に自己犠牲をしやすい傾向もあります。共感力が高い人は、他人との衝突や言い合いをすることが嫌いになる傾向があります。『自分は違う意見なんだけど、グループが乱れるので言わないでおこう』と考えたことはありませんか？また、自分と他人との境界線が緩いために自分より他人を優先しすぎたり、自分が考える必要のない相手の問題まで考えてしまうことがあります。これは、相手の立場になって物事を考える能力が高いので起こる問題でもあります。それ故、競争が激しい環境では少し不利な立場におかれるかもしれません。';

               $detail3 = '他人と自分との区別';
               $sbmsg3 = '他人を助けることや意見を尊重することは人と生きていく上でとても大切なことです。しかし、自分の意見も大切にしながら人と過ごすと共感と客観をバランスよく持つことができ、自分をすり減らすことがなくなります。なので、より生きやすくなるかもしれません。また、仕事でも自分のアイデアを上司やグループに発言することをおすすめします。そうすることで、需要の高い物やアイデアが作られる可能性が高まります。その共感力を使ってみてください。';

               $boxmain1 ='利他性が高い';
               $boxdetail1='他人の立場で考える能力が高い傾向にあります。なので、周りの人が困っているときにすかさず手助けができる人です。よく優しい人と言われたことはありませんか？';

               $boxmain2 ='グループ活動';
               $boxdetail2='周りの意見を尊重できるあなたは、グループ活動を行う上で非常に欠かせない人物です。よく他人からグループ活動で誘われませんか？';

               $boxmain3 ='敵対心がない';
               $boxdetail3='他人を疑うことが滅多にないので、敵対心を持つことが少ないでしょう。なので、悪い人からは少し距離をおいた環境にいた方がいいかもしれません。';

               $boxmain4='慎み深さ';
               $boxdetail4='ボランティアや慈善活動など、他人に大して貢献することが得意な人は必然的に人に優しくできる人でしょう。カウンセラーや看護などの人に寄り添う仕事に向いてる可能性があります。';

               $boxmain5='友達が多い';
               $boxdetail5='周りの人達に対して優しく対応できるので、周りからとても好かれやすい人物です。友達を多く作ることができる人でしょう。また共感力が高いので、より充実した人間関係を作ることができるでしょう。';

               $boxmain6='自己犠牲';
               $boxdetail6='競争を元にした環境では、少し不利な環境におかれる可能性があります。自己犠牲には注意した方がいいでしょう。また、競争ではない環境を自分で選んで入ると持ち前の能力を発揮できます。';
                break;

            case $sum >= 4.9 && $sum <= 13.5;
                 $msg = 'ボランティアタイプ';
                 $img = "/images/shutterstock_1692488656.jpg";
                 $ssg = '第一印象から良い';
                $detail1 = 'チームワーク';
                $sbmsg1 = '協調性がかなり高いあなたは他人を助けるのが好きでグループ活動もかなり得意なタイプです。しかし、他人を助けすぎて自分を犠牲にするまで貢献するタイプではなく、自分の状態を客観的にみることもできます。自分に余裕があれば他人を助けられるタイプなのでバランスよく生活を送ることができます。仕事では、カウンセラーの様な相手の立場になって考えて寄り添う様な形でアドバイスを提案してあげる様な仕事においては大きく活躍することができるでしょう。';
 
                $detail2 = '流されやすい';
                $sbmsg2 = 'バランスが取れてる協調性タイプでも、自分と他人との境界線が一般より緩い傾向があります。共感力が高い人は、他人の気持ちに対して敏感な傾向があります。それ故に他人の感情を優先して考えてしまう傾向があります。なので、競争が激しい環境だと周りの環境に流されやすくなる傾向があります。また、他人との衝突を嫌う傾向があるため、グループ活動でも自分の意見を言いにくくなってしまうタイプでもあります。';
 
                $detail3 = '自分の意見を少し尊重する';
                $sbmsg3 = '環境に流されそうになったら、自分の本心に目を向けて周りの人と自分の意見の優先度を比べてみるといいかもしれません。そうすると、自分が今すべき行動を見つけられて自分の意見を尊重できます。また、競争が少なくて他人の気持ちを大事に扱うことが優先的な仕事を選んでいくと、仕事に対してモチベーションが湧いてより良い人生になっていくでしょう。';
 
                $boxmain1 ='利他性が高い';
               $boxdetail1='他人の立場で考える能力が高い傾向にあります。なので、周りの人が困っているときにすかさず手助けができる人です。よく優しい人と言われたことはありませんか？';

               $boxmain2 ='グループ活動';
               $boxdetail2='周りの意見を尊重できるあなたは、グループ活動を行う上で非常に欠かせない人物です。よく他人からグループ活動で誘われませんか？';

               $boxmain3 ='敵対心がない';
               $boxdetail3='他人を疑うことが滅多にないので、敵対心を持つことが少ないでしょう。なので、悪い人からは少し距離をおいた環境にいた方がいいかもしれません。';

               $boxmain4='慎み深さ';
               $boxdetail4='ボランティアや慈善活動など、他人に大して貢献することが得意な人は必然的に人に優しくできる人でしょう。カウンセラーや看護などの人に寄り添う仕事に向いてる可能性があります。';

               $boxmain5='友達が多い';
               $boxdetail5='周りの人達に対して優しく対応できるので、周りからとても好かれやすい人物です。友達を多く作ることができる人でしょう。また共感力が高いので、より充実した人間関係を作ることができるでしょう。';

               $boxmain6='自己犠牲';
               $boxdetail6='競争を元にした環境では、少し不利な環境におかれる可能性があります。自己犠牲には注意した方がいいでしょう。また、競争ではない環境を自分で選んで入ると持ち前の能力を発揮できます。';
                 break;

            case $sum >= -4.8 && $sum <= 4.8;
                $msg = 'バランスタイプ';
                $img = "/images/shutterstock_478518385.jpg";
                $ssg = '共感と客観を兼ね備えた';
               $detail1 = '合理性を重視する';
               $sbmsg1 = '協調性が標準なあなたは、客観性と協調性を兼ね備えたバランスが良いタイプです。グループ活動にもある程度馴染むことができ、自分一人でも物事を実行することができます。この特性はグループ活動で問題が起こったときに共感と客観を用いて問題をスムーズに解決することができる特性です。なので、グループ活動に一人は欲しい人材ですね。';

               $detail2 = '周りへの理解';
               $sbmsg2 = '共感力が標準な人はある場面では共感性、別の場面では共感性を発揮しない場面があるかもしれません。それ故、場面での行動が共通していないがため「何を考えているかわからない」、「いい人だと思ったのに、、、」と誤解される可能性があります。また、グループの問題で共感と問題解決方法を考えることができるが故に多くのことを考えて悩んでしまう可能性が大きいです。';

               $detail3 = '積極性';
               $sbmsg3 = '客観性と協調性のバランスはとても良い財産ではあります。グループ活動において持ち前のバランス力は非常に大きな力を発揮し、結果的に多くの人達に感謝されるでしょう。しかし、もし困っている人が目の前にいたときは普段より積極的に手助けをした方が周りの変な誤解も晴れることができるでしょう。';

               $boxmain1 ='カリスマ性';
               $boxdetail1='周りと合わせないので自分なりの考えを貫くことができます。このタイプは誰にも干渉されずに思考できるので、創造的なアイデアを思いつく可能性が高いです。';

               $boxmain2 ='敵が多い';
               $boxdetail2='協調性が低いタイプは、独自性が高いが故に周りの考えや行動に違和感を持ちやすいです。それ故に他人と違った考えや行動をするので敵を作りやすいタイプでもあります。';

               $boxmain3 ='リーダー';
               $boxdetail3='周りの人達に左右されずに自分の頭で考えて行動することができるタイプです。その姿を見て周りの人からは頼り甲斐がある人物だと見られている可能性があります。';

               $boxmain4='ストイック';
               $boxdetail4='自分にも他人にも共感より客観的な視点で捉えることができます。このタイプは相手にも厳しいですが、自分に対しても厳しくなる傾向があります。競争で大きな成果を発揮できるでしょう。';

               $boxmain5='違和感';
               $boxdetail5='グループ活動をしているとき、グループの考えに対して常にモヤモヤとした違和感を感じませんか?無理にグループ活動をしているとストレスを感じる傾向が高いタイプです。';

               $boxmain6='競争心';
               $boxdetail6='競争が激しい環境では、その独自性を発揮して行動することができるため、成果を出しやすくなります。自分がストイックになれる環境を選んで見るのもいい選択になりえます。';
                break;

                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '客観性重視タイプ';
                $img = "/images/shutterstock_603829727.jpg";
                $ssg = '合理的な答えを見つけやすい';
               $detail1 = '合理性を重視する';
               $sbmsg1 = '協調性が少し低いあなたは他人に流されにくく、自分の意見や考えたアイデアをしっかり持てるタイプです。他人と一緒に考えるより、自分で合理的な判断を行うことができるので、客観的に物事を考えて行動する事ができます。なので、他人よりも早く正解や成功にたどり着くことができます。';

               $detail2 = '少しのジレンマ';
               $sbmsg2 = 'しかし、全く協調性がないとまではいかず、多少は他人が気になっていることがあります。少しは他人を助けたいと思いつつも、自分の意見を重視するので素直に他人を助けることができない場合があるかもしれません。また、独自性が強いが故に他人の考えや行動に違和感を感じやすいタイプです。それ故、敵を作りやすいタイプでもあり、よりいっそ素直になれない可能性があります。';

               $detail3 = '他者への思いやり';
               $sbmsg3 = '客観性を持って行動することは多くの成果を残してくれます。なので、自分の意見を大切にして行動することは必要です。もし、少しの時間を他人への手助けに使うとあなたの気持ちをわかってくれたり、困ったときに手伝ってくれる人が多くなるでしょう。また、自分の考えをわかってくれる人がいたら、その人を大事にすると大切なパートナーになってくれるでしょう。';

               $boxmain1 ='カリスマ性';
               $boxdetail1='周りと合わせないので自分なりの考えを貫くことができます。このタイプは誰にも干渉されずに思考できるので、創造的なアイデアを思いつく可能性が高いです。';

               $boxmain2 ='敵が多い';
               $boxdetail2='協調性が低いタイプは、独自性が高いが故に周りの考えや行動に違和感を持ちやすいです。それ故に他人と違った考えや行動をするので敵を作りやすいタイプでもあります。';

               $boxmain3 ='リーダー';
               $boxdetail3='周りの人達に左右されずに自分の頭で考えて行動することができるタイプです。その姿を見て周りの人からは頼り甲斐がある人物だと見られている可能性があります。';

               $boxmain4='ストイック';
               $boxdetail4='自分にも他人にも共感より客観的な視点で捉えることができます。このタイプは相手にも厳しいですが、自分に対しても厳しくなる傾向があります。競争で大きな成果を発揮できるでしょう。';

               $boxmain5='違和感';
               $boxdetail5='グループ活動をしているとき、グループの考えに対して常にモヤモヤとした違和感を感じませんか?無理にグループ活動をしているとストレスを感じる傾向が高いタイプです。';

               $boxmain6='競争心';
               $boxdetail6='競争が激しい環境では、その独自性を発揮して行動することができるため、成果を出しやすくなります。自分がストイックになれる環境を選んで見るのもいい選択になりえます。';
                break;

            case $sum <= -13.6;
                $msg = '独自性タイプ';
                $img = "/images/shutterstock_1080828530.jpg";
                $ssg = '一人で物事を遂行する';
               $detail1 = 'カリスマ性や独自性';
               $sbmsg1 = '協調性がとても低いあなたは集団で行動するより一人で行動する方が好きなタイプ。自分が正しいと思ったことは周りの意見関係なく自分を信じることができる人なので、独自性やカリスマ性があると考えれます。このような人たちは共感より論理的思考が長けている成功者の多くが持っている性格なので、個人的な成功ができる可能性があります。';

               $detail2 = 'カリスマ性故の問題';
               $sbmsg2 = 'しかしその独自性が高いが故に他人との衝突やチームワークから外れる傾向があります。自分は悪いことはしていないと思っていても周りの人からは少し怖い人と思われている可能性があるかもしれません。また、大きな壁にぶつかった時にチームワークを組んで解決することを苦手と感じているかもしれません。';

               $detail3 = '他人との共感';
               $sbmsg3 = '自分の意見を大切にすることは生きていく上で非常に重要なことですが,他の人たちの意見にもう少し傾聴したら共感できる部分を見つけられ、他人とうまく付き合うことができるかもしれません。そうすれば自分で解決できない大きな問題に直面したときに助けてくれる人たちが多いことに気づくでしょう。';

               $boxmain1 ='カリスマ性';
               $boxdetail1='周りと合わせないので自分なりの考えを貫くことができます。このタイプは誰にも干渉されずに思考できるので、創造的なアイデアを思いつく可能性が高いです。';

               $boxmain2 ='敵が多い';
               $boxdetail2='協調性が低いタイプは、独自性が高いが故に周りの考えや行動に違和感を持ちやすいです。それ故に他人と違った考えや行動をするので敵を作りやすいタイプでもあります。';

               $boxmain3 ='リーダー';
               $boxdetail3='周りの人達に左右されずに自分の頭で考えて行動することができるタイプです。その姿を見て周りの人からは頼り甲斐がある人物だと見られている可能性があります。';

               $boxmain4='ストイック';
               $boxdetail4='自分にも他人にも共感より客観的な視点で捉えることができます。このタイプは相手にも厳しいですが、自分に対しても厳しくなる傾向があります。競争で大きな成果を発揮できるでしょう。';

               $boxmain5='違和感';
               $boxdetail5='グループ活動をしているとき、グループの考えに対して常にモヤモヤとした違和感を感じませんか?無理にグループ活動をしているとストレスを感じる傾向が高いタイプです。';

               $boxmain6='競争心';
               $boxdetail6='競争が激しい環境では、その独自性を発揮して行動することができるため、成果を出しやすくなります。自分がストイックになれる環境を選んで見るのもいい選択になりえます。';
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
                                    <form action="/person/mypage" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info w-50" id="next_button">mypage</button>
                                    </form>
                                </div>
                              @endif
                            @else
                            <div class="submit">
                                <form action="/person/serious" method="get">
                                <button type="submit" class="btn btn-outline-info w-50" id="next_button">勤勉性テスト</button>
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



