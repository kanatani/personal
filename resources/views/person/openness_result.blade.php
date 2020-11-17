@extends('person/layout')
@section('content')
<body>
    <?php 
        switch (true) {
            case $sum >= 13.6;
               $msg = 'ナポレオンタイプ';
               $img = "/images/shutterstock_205554184.jpg";
                $ssg = '新しいことが大好きな';
               $detail1 = '変化が大好き';
               $sbmsg1 = '開放性がとても高いあなたは、新しいことにはすぐに手を伸ばすことで幸福感を得るタイプです。例えば、芸術や音楽に対して深い興味をもったり、新しい本を読むのが大好きだったり、新しい経験をすることが大好きなタイプです。また難しい問題が訪れても、持ち前の好奇心で取り組むことができます。このようなタイプは、グループの中でも高いリーダーシップを発揮したり、一人でも海外旅行などをする行動力の塊であるタイプです。なので、時代の変化には欠かせない人物でもあります。';

               $detail2 = '既存ルールに馴染めない';
               $sbmsg2 = '開放性の高さは現代のような変化が激しい時代においては活躍できる場面が多くあることは間違い無いでしょう。しかし、その高い行動力が故に既存の権威やルールに対して疑問を抱くことが多いです。なので、変化をしていく中で変化を好まない他人と衝突することがあります。';

               $detail3 = '視野を広げる';
               $sbmsg3 = 'しかし、好奇心が高い人その好奇心で他人を立場になって考えることができる人でもあります。その特性を生かして、周りの人たちと上手く行動することができたら、非常に大きな成果につながります。より頭を使い行動していくので、もしかしたら歴史上に名を残せるかもしれませんね。';

               $boxmain1 ='幅広い交友関係';
                $boxdetail1='多くの環境に足を運ぶので、様々な環境で出会った人たちと交友関係を結ぶことがで切るでしょう。';
 
                $boxmain2 ='頭が良い';
                $boxdetail2='柔軟な価値観や新しいことに興味を持つ人たちは総じて頭が良い傾向があります。頭脳明晰なタイプではありませんか？';
 
                $boxmain3 ='既存ルールのストレス';
                $boxdetail3='退屈でつまらない仕事や古いルールの上で成り立っている環境にいると、ストレスを抱えるかもしれません。';
 
                $boxmain4='知識の獲得';
                $boxdetail4='様々な分野に興味を持つことができるので、必然的に幅広い知識を得ることができるでしょう。。';
 
                $boxmain5='芸術の関心';
                $boxdetail5='クリエイティブな分野に興味を持つ傾向があります。音楽や芸術に大きく感動したことはありませんか？';
 
                $boxmain6='チャレンジ';
                $boxdetail6='開放性が高いあなたは、新しいことにオープンです。それ故に様々な経験をへて成長することが出来るでしょう。';
                 break;

            case $sum >= 4.9 && $sum <= 13.5;
                 $msg = '冒険家タイプ';
                 $img = "/images/shutterstock_443840548.jpg";
                 $ssg = '幅広い興味がある';
                $detail1 = '着実に取り組む';
                $sbmsg1 = '開放性がかなり高いあなたはチャレンジ力に優れて、新しいアイデアや経験をするとこを得意とする性格です。様々な経験や知識を蓄えることが出来て、より革新的なアイデアを出すことで周りの人たちを驚かせるようなことを成し遂げる人でもあります。しかし、既存のルールや物事にもある程度慣れることができます。';
 
                $detail2 = '既存がストレスになる事も';
                $sbmsg2 = 'しかし、既存の物やルールに縛られる期間が継続するとストレスを抱え込む傾向があります。例えば、会社の中にある無駄な会議や書類作成をする時に退屈して寝てしまいそうな経験はありませんか？';
 
                $detail3 = '退屈を変えてみる';
                $sbmsg3 = 'このようなタイプは、起業など変化が激しい環境下では持ち前の開放性を生かして活躍することができます。なのでもし変化が少ない環境にいたら転職するのもありでしょう。どうしても変化が少ない環境にいないといけない時は、既存のやり方を少しずつ自分なりの手段でアレンジしていくのもssかもしれません。';
 
                $boxmain1 ='幅広い交友関係';
                $boxdetail1='多くの環境に足を運ぶので、様々な環境で出会った人たちと交友関係を結ぶことがで切るでしょう。';
 
                $boxmain2 ='頭が良い';
                $boxdetail2='柔軟な価値観や新しいことに興味を持つ人たちは総じて頭が良い傾向があります。頭脳明晰なタイプではありませんか？';
 
                $boxmain3 ='既存ルールのストレス';
                $boxdetail3='退屈でつまらない仕事や古いルールの上で成り立っている環境にいると、ストレスを抱えるかもしれません。';
 
                $boxmain4='知識の獲得';
                $boxdetail4='様々な分野に興味を持つことができるので、必然的に幅広い知識を得ることができるでしょう。。';
 
                $boxmain5='芸術の関心';
                $boxdetail5='クリエイティブな分野に興味を持つ傾向があります。音楽や芸術に大きく感動したことはありませんか？';
 
                $boxmain6='チャレンジ';
                $boxdetail6='開放性が高いあなたは、新しいことにオープンです。それ故に様々な経験をへて成長することが出来るでしょう。';
                 break;
 

            case $sum >= -4.8 && $sum <= 4.8;
                $msg = '器用タイプ';
                $img = "/images/shutterstock_670192495.jpg";
                $ssg = 'ルールと刺激をコントロールする';
               $detail1 = '世渡り上手';
               $sbmsg1 = '開放性が標準なあなたは、新しい経験にも対応できつつ既存の経験をするのにもあまり苦労を感じないタイプです。この器用タイプはグループに所属する時も自分の立場を素早く確立して臨機応変に対応することが出来る人でもあります。';

               $detail2 = '浅く広く';
               $sbmsg2 = '趣味にもこの器用さが現れてきます。新しい経験を好んでチャレンジしていきますが、その分野にある程度継続して活動することができます。どんな人や経験でも素早く慣れることができます。';

               $detail3 = '社会の中で生きていく';
               $sbmsg3 = '恐らくどこへいっても上手く生活出来るあなたはこれと言った悩みがないかもしれません。もし、その器用さが故に私生活が退屈になってきたら、一度大きなチャレンジをするのもいいかもしれませんね。';

               $boxmain1 ='幅広い交友関係';
                $boxdetail1='多くの環境に足を運ぶので、様々な環境で出会った人たちと交友関係を結ぶことがで切るでしょう。';
 
                $boxmain2 ='頭が良い';
                $boxdetail2='柔軟な価値観や新しいことに興味を持つ人たちは総じて頭が良い傾向があります。頭脳明晰なタイプではありませんか？';
 
                $boxmain3 ='既存ルールのストレス';
                $boxdetail3='退屈でつまらない仕事や古いルールの上で成り立っている環境にいると、ストレスを抱えるかもしれません。';
 
                $boxmain4='知識の獲得';
                $boxdetail4='様々な分野に興味を持つことができるので、必然的に幅広い知識を得ることができるでしょう。。';
 
                $boxmain5='芸術の関心';
                $boxdetail5='クリエイティブな分野に興味を持つ傾向があります。音楽や芸術に大きく感動したことはありませんか？';
 
                $boxmain6='チャレンジ';
                $boxdetail6='開放性が高いあなたは、新しいことにオープンです。それ故に様々な経験をへて成長することが出来るでしょう。';
                 break;

                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '慎重タイプ';
                $img = "/images/shutterstock_1767680240.jpg";
                $ssg = 'ルールで安全策を練る';
               $detail1 = '慎重に着実に';
               $sbmsg1 = '開放性が少し低いあなたは、慎重かつ安全に行動して成果を残すタイプです。新しい経験や方法を実行するより、自分で得た経験から学んだり既存のルールにしたがって生活していく傾向があります。これは無駄な失敗を回避して、リスクを考えて着実に行動できる人と言い換えられます。';

               $detail2 = '新鮮な経験も求める';
               $sbmsg2 = 'しかし、新しいことや知識に全く興味がないということではありません。新しい解決方法を思いついたり、刺激がある経験もしてみたいと考えているかもしれません。しかし、失敗してしまうことを回避してしまい、行動ができない場合があります。なので、行動するかどうかに悩むことが多いかもしれません。';

               $detail3 = 'たまには冒険をしてみる';
               $sbmsg3 = '持ち前のリスク回避能力は自身の身を守るのに大切な能力です。けれど、もし新しく学びたい分野があったり話してみたい人がいたりしたら、一歩足を踏み出して行動してみるのも悪くはないかもしれませんね。';

               $boxmain1 ='マンネリ';
               $boxdetail1='同じことを繰り返す傾向は新鮮さを無くしてしまいます。恋人とデートをするときはいつもと同じ場所にいきませんか？';

               $boxmain2 ='歴史好き';
               $boxdetail2='過去の物事から得られる知識や経験を好むため、歴史を学ぶのが好きな方ではないでしょうか？';

               $boxmain3 ='リスク回避';
               $boxdetail3='新しいことを回避する傾向は必然的に無意識にあるリスクを回避することができます。';

               $boxmain4='淡々と作業をする';
               $boxdetail4='ルールにしたがって作業するのが得意なタイプです。考えずに作業するのは得意ですか？';

               $boxmain5='イツメン';
               $boxdetail5='友達と長い友好関係を築く傾向があります。学生時代、いsつもと同じ人と遊んでいませんでしたか？';

               $boxmain6='問題解決';
               $boxdetail6='身近に起こった問題を過去の記事や経験で解決するのが得意なタイプです。その問題解決能力はあらゆる場面で活躍できます。';
                break;

            case $sum <= -13.6;
                $msg = 'マイペースタイプ';
                $img = "/images/shutterstock_198973802.jpg";
                $ssg = '慣れ親しんだ物が大好きな';
               $detail1 = 'マイペース';
               $sbmsg1 = '開放性がとても低いあなたは、周りより自分のペースを大切にしてそれを守り抜くタイプです。このタイプは自分が慣れ親しんだ分野や物に愛着がわくタイプであり身近なものを大切に扱うことができる傾向があります。また、乱れた行動をすることは滅多にないため、周りの人に安心感を与えているかもしれません。';

               $detail2 = '新しいことを避ける';
               $sbmsg2 = '一方、新しい経験をするのが苦手なタイプでもあります。例えば、今まで遭遇したことがない問題に直面した場合、中々解決策を見つけることができずに困ったことはありませんか？また、一度決めたルールは何がなんでも守り抜く傾向があります。なので、新しい分野や価値観に対してたまに頑固になったりすることがあるかもしれません。';

               $detail3 = '柔軟になりことを意識してみる';
               $sbmsg3 = '自分のペースを守って生きていくのは、それだけ自分の価値観や経験を大切にしている証なのでとても良いことです。けれど、もし自分の考えでは上手くいけない問題に直面したときは、新しい分野に手を伸ばしてその経験を生かして取り組むと意外にあっさり解決することができるかもしれません。また、違う分野の友人を作ると世界観が広がっていくでしょう。';

               $boxmain1 ='マンネリ';
               $boxdetail1='同じことを繰り返す傾向は新鮮さを無くしてしまいます。恋人とデートをするときはいつもと同じ場所にいきませんか？';

               $boxmain2 ='歴史好き';
               $boxdetail2='過去の物事から得られる知識や経験を好むため、歴史を学ぶのが好きな方ではないでしょうか？';

               $boxmain3 ='リスク回避';
               $boxdetail3='新しいことを回避する傾向は必然的に無意識にあるリスクを回避することができます。';

               $boxmain4='淡々と作業をする';
               $boxdetail4='ルールにしたがって作業するのが得意なタイプです。考えずに作業するのは得意ですか？';

               $boxmain5='イツメン';
               $boxdetail5='友達と長い友好関係を築く傾向があります。学生時代、いsつもと同じ人と遊んでいませんでしたか？';

               $boxmain6='問題解決';
               $boxdetail6='身近に起こった問題を過去の記事や経験で解決するのが得意なタイプです。その問題解決能力はあらゆる場面で活躍できます。';
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
                        <div class="character_text openness_text">
                            <h3>{{ $ssg }}</h3>
                            <h1>{{ $msg }}</h1>
                        </div>
                    </div>
                    <div class="col-sm-12 openness_good">
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
                            <h2 class="special_text opennesses_text">{{ $msg }}さんの特徴</h2>
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
                                <form action="/person/extraversion" method="get">
                                <button type="submit" class="btn btn-outline-light w-50" id="next_button">外向性テスト</button>
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



