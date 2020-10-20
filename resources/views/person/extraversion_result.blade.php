@extends('person/layout')
@section('content')
<body>
    <?php 
       
        
        switch (true) {
            case $sum >= 13.6;
               $msg = 'カリスマタイプ';
               $img = "/images/shutterstock_1586081839.jpg";
                $ssg = '多くの人を魅了する';
               $detail1 = '常に活動する行動力';
               $sbmsg1 = '外向性がとても高いあなたは、コミュニケーション力の塊です。大人数の人を束ねて先導することができて、持ち前のコミュ力で人々を魅了することができるタイプでもあります。また、活動にも積極的に参加して周囲の人に働きがけながら活動していくことができます。さらに、常に状況をポジティブに考える傾向があるので暗い状況を変えていく力もあります。';

               $detail2 = '刺激を過度に求めること';
               $sbmsg2 = 'しかし、その外向せいが高いが故に滅多な出来事が起こらない限りは刺激に満足することができない場合があります。そのため、より大きなリスクをとって行動する場合があります。これが成功すると良いのですが、失敗してしまうと自分だけでなく周りの人間を巻き込んでしまう可能性があります。また、その行動力についていけなくて周りから人がいなくなる可能性もあるかもしれません。';

               $detail3 = 'リスク管理をしながら行動を意識する';
               $sbmsg3 = '持ち前の外向性はグループ活動の上では大いに役立つ性質であります。もし自分がリスクが大きい行動をしようと思ったら、一旦自分で考えたり、周りの人達にアドバイスを求めたりして失敗する可能性も考えてみましょう。そうすることでより質が高い行動が取れて、成功しやすくなるでしょう。';

               $boxmain1 ='リーダーシップ';
                $boxdetail1='多くの人たちを束ねながら行動できるタイプです。「リーダーは君ね」と言われることが多くありませんか？';
 
                $boxmain2 ='ブランド品';
                $boxdetail2='社会的に価値のある物に興味が湧く傾向があります。よくブランド品を見つけていませんか?';
 
                $boxmain3 ='ポジティブ';
                $boxdetail3='どんな状況下でも前向きに捉えることができるので、常に周りを明るくすることができます。';
 
                $boxmain4='大きな失敗';
                $boxdetail4='その行動力故にたまに大きな失敗が起こる傾向があります。一度立ち止まって考えてみましょう。';
 
                $boxmain5='友人が多い';
                $boxdetail5='活動量が多いタイプなので、必然的に友達が多くなります。休日の予定は常に埋まっていませんか？';
 
                $boxmain6='パーティ大好き';
                $boxdetail6='刺激が多い所が好きな傾向があるので、より人が多い所にいく傾向があります。誕生日では、より多い人と楽しむタイプですか?';
                 break;

            case $sum >= 4.9 && $sum <= 13.5;
                 $msg = '外交官タイプ';
                 $img = "/images/shutterstock_1692488656.jpg";
                 $ssg = '人と会うのがが大好きな';
                $detail1 = 'グループでの盛り上げ役';
                $sbmsg1 = '外向性がかなり高いあなたは、グループの輪に入って活発的に行動していくタイプです。このタイプはパーティや宴会など人が集まる場所が好きで刺激を求めるタイプです。なので、人と話すことに慣れていて初めて話す相手でも上手くコミュニケーションをとることができるタイプでもあります。けれど、多くの人を束ねて行動するよりかは、パーティなどで話を盛り上げる方に興味があるタイプです。';
 
                $detail2 = '関係が短期になる可能性も';
                $sbmsg2 = '初期の段階ではスムーズに友人関係を作ることができます。しかし悩みを打ち明けたり深い話をする事より、新しい人間関係を築くことに重点を置くタイプでもあります。なので友人関係が浅く広い状態になる傾向があります。';
 
                $detail3 = '交流を深める';
                $sbmsg3 = 'コミュニケーションが高く誰とでも話せるあなたは、対人関係において非常に良い武器を持っています。しかし、たまには深い関係を作ってみたいと思ったら、身近な人に自分の悩みを打ち明けると相手もそれに答えて深い関係を築くことができるでしょう。';
 
                $boxmain1 ='リーダーシップ';
                $boxdetail1='多くの人たちを束ねながら行動できるタイプです。「リーダーは君ね」と言われることが多くありませんか？';
 
                $boxmain2 ='ブランド品';
                $boxdetail2='社会的に価値のある物に興味が湧く傾向があります。よくブランド品を見つけていませんか?';
 
                $boxmain3 ='ポジティブ';
                $boxdetail3='どんな状況下でも前向きに捉えることができるので、常に周りを明るくすることができます。';
 
                $boxmain4='大きな失敗';
                $boxdetail4='その行動力故にたまに大きな失敗が起こる傾向があります。一度立ち止まって考えてみましょう。';
 
                $boxmain5='友人が多い';
                $boxdetail5='活動量が多いタイプなので、必然的に友達が多くなります。休日の予定は常に埋まっていませんか？';
 
                $boxmain6='パーティ大好き';
                $boxdetail6='刺激が多い所が好きな傾向があるので、より人が多い所にいく傾向があります。誕生日では、より多い人と楽しむタイプですか?';
                 break;
 

            case $sum >= -4.8 && $sum <= 4.8;
                $msg = '八方美人タイプ';
                $img = "/images/shutterstock_478518385.jpg";
                $ssg = '内向と外向を使い分ける';
               $detail1 = '気遣い上手';
               $sbmsg1 = '社交性が標準なあなたは、周りの状況をみて自分のキャラを合わせることができるタイプです。例えば、周りの状況が少し暗いと思ったら外向的になって場を盛り上げることができます。反対に場が盛り上がってきたら、自分の活動は抑えてグループの輪にいない人達に話しかける事もできます。このようなタイプはグループ活動の中では潤滑油のような存在であり、決してなくてはならない存在でもあります。';

               $detail2 = '疲労が溜まる事も';
               $sbmsg2 = 'しかし、その気遣いさが故に自分が疲弊してしまう事もたまにあるかもしれません。自分が外向的に振る舞っても周りの状況をみたり、１人の人と話している時はグループの状況を見たりしています。その気遣いさが行きすぎると、自分がどういう風にしたいのかがわからなくなってしまう可能性があります。また、途中で帰りたいと思いつつも帰れないといった事もあるかもしれません。';

               $detail3 = '息抜きをして適度に活動をする';
               $sbmsg3 = 'このタイプはグループ活動では欠かせない存在である事は変わりありません。しかし、時には自分の気分に素直になって行動すると、もっとグループの活動の中が居心地の良い所になるかもしれませんね。';

               $boxmain1 ='オタク';
               $boxdetail1='一度興味を持った分野に対して徹底的に追求するのがこのタイプです。知らない間にある分野の専門家になったことはありませんか？';

               $boxmain2 ='個人行動';
               $boxdetail2='大人数で行動するより少人数や一人で行動することを好みます。人間関係でもより深い関係を築きます。';

               $boxmain3 ='落ち着き';
               $boxdetail3='あまりはしゃいだりするよりかは落ち着いた行動をする傾向があります。周りからクールだと思われているかもしれませんね。';

               $boxmain4='カウンセラー';
               $boxdetail4='自分の話より相手の話を聞くのが好きなタイプ。相手の会話を長く聞くことができるのでカウンセラーに向いてるかもしれません。';

               $boxmain5='深く考える';
               $boxdetail5='内向的な人の特徴として、行動する前によく考える傾向があります。必然的に失敗のリスクを減らす行動ができます。';

               $boxmain6='人見知り';
               $boxdetail6='初対面の人と多く会うと少し困惑してしまうタイプです。しかし、関係が深まると関係性を大事にしてくれるタイプでもあります。';
                break;

                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '人見知りタイプ';
                $img = "/images/shutterstock_603829727.jpg";
                $ssg = '緊張するけど人が好きな';
               $detail1 = '慎重に着実に';
               $sbmsg1 = '外向性が少し低いあなたは、一対一の会話を好む人見知りタイプです。少人数での行動の時に自分のコミュニケーション力を発揮します。また、人見知りタイプは自分の話より相手の話を聞くのを好む傾向があります。なので一旦仲良くなると、悩みを打ち明けられたり、進路相談されるなどとても深い関係を作ることができます。社交性が少し低いが故の素晴らしい能力です。';

               $detail2 = '過度な刺激への負担';
               $sbmsg2 = '一方、パーティや宴会など人混みが多くて刺激が強い環境においてはすぐ疲弊してしまうことがあるかもしれません。また、新しい人に出会う環境でも人見知りしてしまうので、少し苦手な傾向にあります。しかし社交性がとても低いことではないのでたまには新しい人と関わることを望みます。なので、そこにジレンマが生まれるので少し困っているかもしれません。';

               $detail3 = '自分に合った環境で出会ってみる';
               $sbmsg3 = '初対面の時は上手くコミュニケーション能力が発揮されませんが、仲良くなると深い関係を築くことができます。なので、初対面で合う環境をパーティーからバーやカフェなどの刺激の少ない環境へいくと自分のコミュニケーション力が発揮することができます。それか、同じ趣味を持った人と会うと初対面でも盛り上がる会話ができるかもしれませんね。 ';

               $boxmain1 ='オタク';
               $boxdetail1='一度興味を持った分野に対して徹底的に追求するのがこのタイプです。知らない間にある分野の専門家になったことはありませんか？';

               $boxmain2 ='個人行動';
               $boxdetail2='大人数で行動するより少人数や一人で行動することを好みます。人間関係でもより深い関係を築きます。';

               $boxmain3 ='落ち着き';
               $boxdetail3='あまりはしゃいだりするよりかは落ち着いた行動をする傾向があります。周りからクールだと思われているかもしれませんね。';

               $boxmain4='カウンセラー';
               $boxdetail4='自分の話より相手の話を聞くのが好きなタイプ。相手の会話を長く聞くことができるのでカウンセラーに向いてるかもしれません。';

               $boxmain5='深く考える';
               $boxdetail5='内向的な人の特徴として、行動する前によく考える傾向があります。必然的に失敗のリスクを減らす行動ができます。';

               $boxmain6='人見知り';
               $boxdetail6='初対面の人と多く会うと少し困惑してしまうタイプです。しかし、関係が深まると関係性を大事にしてくれるタイプでもあります。';
                break;

            case $sum <= -13.6;
                $msg = 'オタクタイプ';
                $img = "/images/shutterstock_1080828530.jpg";
                $ssg = '自分の興味を追求する';
               $detail1 = '好きなことには目が無い';
               $sbmsg1 = '社交性がとても低いあなたは、自分の興味や関心を大事にするオタクタイプです。あまり人との会話がなくても苦にならず、自分の内側から湧き上がってくる興味にしたがって全力で取り組みことに喜びを感じます。研究者にはこのタイプの人が多いです。';

               $detail2 = '外部への無関心';
               $sbmsg2 = '一方、学校や職場などの人間関係や活動に時間を使うことに強いストレスを感じることがあります。「この時間を自分が興味を持っている分野に使ったら良いことがあるのに、、、」と考えたことはありませんか？また、ブランド品や権力、社会的地位など社会的に認められていることにもあまり興味を持たない傾向にあります。';

               $detail3 = 'コミュニケーションを学んでみる';
               $sbmsg3 = '自分の興味を持った分野に対して徹底的に学ぶということは、素晴らしい経験をくれることでしょう。もしあなたが学校や職場において仲良くしたい人がいたりコミュニケーションを取らないといけないことが多い場合、対人関係の分野を学んでいくと良いかもしれません。そうすると、持ち前の徹底さのおかげで対人関係を学ぶことができるのでいつの間にかコミュニケーションがスムーズになっていることでしょう。';

               $boxmain1 ='オタク';
               $boxdetail1='一度興味を持った分野に対して徹底的に追求するのがこのタイプです。知らない間にある分野の専門家になったことはありませんか？';

               $boxmain2 ='個人行動';
               $boxdetail2='大人数で行動するより少人数や一人で行動することを好みます。人間関係でもより深い関係を築きます。';

               $boxmain3 ='落ち着き';
               $boxdetail3='あまりはしゃいだりするよりかは落ち着いた行動をする傾向があります。周りからクールだと思われているかもしれませんね。';

               $boxmain4='カウンセラー';
               $boxdetail4='自分の話より相手の話を聞くのが好きなタイプ。相手の会話を長く聞くことができるのでカウンセラーに向いてるかもしれません。';

               $boxmain5='深く考える';
               $boxdetail5='内向的な人の特徴として、行動する前によく考える傾向があります。必然的に失敗のリスクを減らす行動ができます。';

               $boxmain6='人見知り';
               $boxdetail6='初対面の人と多く会うと少し困惑してしまうタイプです。しかし、関係が深まると関係性を大事にしてくれるタイプでもあります。';
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
                        <div class="character_text extraversion_text">
                            <h3>{{ $ssg }}</h3>
                            <h1>{{ $msg }}</h1>
                        </div>
                    </div>
                    <div class="col-sm-12 extraversion_good">
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
                            <h2 class="special_text extraversion_text">{{ $msg }}さんの特徴</h2>
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
                                <form action="/person/neuroticism" method="get">
                                <button type="submit" class="btn btn-outline-light w-50" id="next_button">神経症的傾向テスト</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


