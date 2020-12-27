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
               $sbmsg1 = '開放性がとても高いあなたは、新しいことにはすぐに手を伸ばすことで幸福感を得るタイプです。例えば、芸術や音楽に対して深い興味をもったり、新しい本を読むのが大好きだったり、新しい経験をすることが大好きなタイプです。また難しい問題が訪れても、持ち前の好奇心で取り組むことができます。このようなタイプは、グループの中でも高いリーダーシップを発揮したり、一人でも海外旅行などをする行動力の塊であるタイプです。なので、時代の変化を先導するには欠かせない人物でもあります。';

               $detail2 = '既存ルールに馴染めない';
               $sbmsg2 = '開放性の高さは現代のような変化が激しい時代においては活躍できる場面が多くあることは間違い無いでしょう。しかし、その高い行動力が故に既存の権威やルールに対して疑問を抱くことが多いです。企業での古いルールや取り組み方に対して新しい手法やルールを提案していきます。なので、変化をしていく中で変化を好まない他人と衝突することがあります。';

               $detail3 = '視野を広げる';
               $sbmsg3 = 'しかし、好奇心が高い人はその好奇心で他人を立場になって考えることができる人でもあります。その特性を人間関係に生かして、周りの人たちと上手く行動することができたら、非常に大きな成果をスムーズに出すことができます。より頭を使い良い意味で周りを巻き込みながら行動していくので、もしかしたら歴史上に名を残せる人物になれるかもしれませんね。';

               $boxmain1 ='幅広い交友関係';
                $boxdetail1='多くの環境に足を運ぶので、様々な環境で出会った人たちと交友関係を結ぶことができます。知らないパーティに行くとたまたま顔見知りに会うことが多くありませんか？';
 
                $boxmain2 ='頭が良い';
                $boxdetail2='新しい価値観や分野に興味を持つ人たちは総じて頭が良い傾向があります。こういった人たちは脳に対して積極的に刺激を与えるので、歳をとっても健康な状態を保てる加工性があります。';
 
                $boxmain3 ='既存ルールのストレス';
                $boxdetail3='退屈でつまらない仕事や古いルールの上で成り立っている環境にいると、ストレスを抱えるかもしれません。新しい仕事や趣味に取り組んで自分の好奇心を満たせる様なことをしてみましょう。';
 
                $boxmain4='知識の獲得';
                $boxdetail4='開放性が高い人は様々な分野に興味を持つことができるので、必然的に幅広い知識を得ることができるでしょう。日常生活において知識を使う機会を増やすと専門家顔負けの知識を手に入れるかもしれませんね。';
 
                $boxmain5='芸術の関心';
                $boxdetail5='クリエイティブな分野に興味を持つ傾向があります。音楽や芸術に大きく感動したことはありませんか？自分の趣味に取り入れるともっと芸術分野に対してハマっていくでしょう。';
 
                $boxmain6='チャレンジ';
                $boxdetail6='開放性が高いあなたは、新しいことにオープンでチャレンジしていきます。それ故に様々な分野を経験をしていくので刺激に溢れたより良い人生を歩む事が出来るでしょう。';
                 break;

            case $sum >= 4.9 && $sum <= 13.5;
                 $msg = '冒険家タイプ';
                 $img = "/images/shutterstock_443840548.jpg";
                 $ssg = '幅広い興味がある';
                $detail1 = '着実に取り組む';
                $sbmsg1 = '開放性がかなり高いあなたはチャレンジ力に優れて、新しいアイデアや経験をする事を得意とする性格です。様々な経験や知識を蓄えることが出来て、より革新的なアイデアを出すことで周りの人たちを驚かせるようなことを成し遂げる人でもあります。起業や大きなチャレンジに対しては少し戸惑ってしまいますが、やりたいと強く願っていることが多い傾向にあります。';
 
                $detail2 = '既存がストレスになる事も';
                $sbmsg2 = '一方で、既存の物やルールに縛られる期間が継続するとストレスを抱え込む傾向があります。例えば、会社の中にある無駄な会議や書類作成をする時に退屈して寝てしまいそうな経験はありませんか？人間関係では広い人間関係を好みます。新しい人と会って自分が知らないことを知ることが大好きなタイプです。なので、無理やりな人間関係を強いられるととても強いストレスを感じることがあります。';
 
                $detail3 = '聖月スタイルを変えてみる';
                $sbmsg3 = 'このようなタイプは、起業など変化が激しい環境下では持ち前の開放性を生かして活躍することができます。なので、もし変化やチャレンジする機会が少ない環境にいたら転職するのもありでしょう。どうしても変化が少ない環境にいないといけない時は、既存のやり方を少しずつ自分なりの手段でアレンジしていくのも良い手段かもしれません。生活の中で変化を取り入れると元気を取り戻すタイプですので是非試してみてください。';
 
                $boxmain1 ='幅広い交友関係';
                $boxdetail1='多くの環境に足を運ぶので、様々な環境で出会った人たちと交友関係を結ぶことができます。知らないパーティに行くとたまたま顔見知りに会うことが多くありませんか？';
 
                $boxmain2 ='頭が良い';
                $boxdetail2='新しい価値観や分野に興味を持つ人たちは総じて頭が良い傾向があります。こういった人たちは脳に対して積極的に刺激を与えるので、歳をとっても健康な状態を保てる加工性があります。';
 
                $boxmain3 ='既存ルールのストレス';
                $boxdetail3='退屈でつまらない仕事や古いルールの上で成り立っている環境にいると、ストレスを抱えるかもしれません。新しい仕事や趣味に取り組んで自分の好奇心を満たせる様なことをしてみましょう。';
 
                $boxmain4='知識の獲得';
                $boxdetail4='開放性が高い人は様々な分野に興味を持つことができるので、必然的に幅広い知識を得ることができるでしょう。日常生活において知識を使う機会を増やすと専門家顔負けの知識を手に入れるかもしれませんね。';
 
                $boxmain5='芸術の関心';
                $boxdetail5='クリエイティブな分野に興味を持つ傾向があります。音楽や芸術に大きく感動したことはありませんか？自分の趣味に取り入れるともっと芸術分野に対してハマっていくでしょう。';
 
                $boxmain6='チャレンジ';
                $boxdetail6='開放性が高いあなたは、新しいことにオープンでチャレンジしていきます。それ故に様々な分野を経験をしていくので刺激に溢れたより良い人生を歩む事が出来るでしょう。';
                 break;
 

            case $sum >= -4.8 && $sum <= 4.8;
                $msg = '器用タイプ';
                $img = "/images/shutterstock_670192495.jpg";
                $ssg = 'ルールと刺激をコントロールする';
               $detail1 = '世渡り上手';
               $sbmsg1 = '開放性が標準なあなたは、新しい経験にも対応できつつ既存の経験をするのにもあまり苦労を感じないタイプです。この器用タイプは、グループに所属する時も自分の立場を素早く確立して臨機応変に対応することが出来る人でもあります。プライベートでは、学生時代の人間関係を大切にしつつ新しい人間関係も上手く構築できるタイプです。趣味にもこの器用さが現れてきます。新しい経験を好んでチャレンジしていきますが、その分野にある程度慣れても苦痛にはならないので上手く継続することができます。極論を言うと、人生において大きな問題を抱えずに生活を送ることができるでしょう。';

               $detail2 = '器用さが故のジレンマ';
               $sbmsg2 = 'しかし、その器用さが故に日常生活を送るのに少し退屈さを感じる可能性があります。かといって開放性がとても高いわけではないので、起業したり大きなチャレンジをすることに対しては少し戸惑ったりしてしまう可能性があります。なので、器用が故に心にジレンマを抱えてしまうことがあるかもしれません。';

               $detail3 = '社会の中で生きていく';
               $sbmsg3 = '恐らくどんな環境でも上手く生活出来るあなたは、これといった大きな悩みがないかもしれません。しかし、もしその器用さが故に私生活が退屈を感じてきたら、起業や海外一人旅など一度大きなチャレンジをするのもいいかもしれません。その経験は自分の生活に良い刺激を与えてくれるでしょう。';

               $boxmain1 ='幅広い交友関係';
                $boxdetail1='多くの環境に足を運ぶので、様々な環境で出会った人たちと交友関係を結ぶことができます。知らないパーティに行くとたまたま顔見知りに会うことが多くありませんか？';
 
                $boxmain2 ='頭が良い';
                $boxdetail2='新しい価値観や分野に興味を持つ人たちは総じて頭が良い傾向があります。こういった人たちは脳に対して積極的に刺激を与えるので、歳をとっても健康な状態を保てる加工性があります。';
 
                $boxmain3 ='既存ルールのストレス';
                $boxdetail3='退屈でつまらない仕事や古いルールの上で成り立っている環境にいると、ストレスを抱えるかもしれません。新しい仕事や趣味に取り組んで自分の好奇心を満たせる様なことをしてみましょう。';
 
                $boxmain4='知識の獲得';
                $boxdetail4='開放性が高い人は様々な分野に興味を持つことができるので、必然的に幅広い知識を得ることができるでしょう。日常生活において知識を使う機会を増やすと専門家顔負けの知識を手に入れるかもしれませんね。';
 
                $boxmain5='芸術の関心';
                $boxdetail5='クリエイティブな分野に興味を持つ傾向があります。音楽や芸術に大きく感動したことはありませんか？自分の趣味に取り入れるともっと芸術分野に対してハマっていくでしょう。';
 
                $boxmain6='チャレンジ';
                $boxdetail6='開放性が高いあなたは、新しいことにオープンでチャレンジしていきます。それ故に様々な分野を経験をしていくので刺激に溢れたより良い人生を歩む事が出来るでしょう。';
                 break;

                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '慎重タイプ';
                $img = "/images/shutterstock_1767680240.jpg";
                $ssg = 'ルールで安全策を練る';
               $detail1 = '慎重に着実に';
               $sbmsg1 = '開放性が少し低いあなたは、慎重かつ安全に行動して成果を残すタイプです。新しい経験や方法を実行するより、自分で得た経験から学んだり既存のルールにしたがって生活していく傾向があります。これは無駄な失敗を回避して、リスクを考えて着実に行動できる人と言い換えられます。なので、大きな失敗がなく安全な人生を送ることができるでしょう。';

               $detail2 = '新鮮な経験も欲しい';
               $sbmsg2 = 'しかし、新しいことや知識に全く興味がないということではありません。新しい解決方法を思いついたり、刺激がある経験もしてみたいと考えているかもしれません。けれど、失敗してしまうことを回避してしまい、行動が上手く取れない場合があります。その結果、行動する前に多くの時間を使ってしまってタイミングを逃した経験が多いかもしれません。';

               $detail3 = 'たまには冒険をしてみる';
               $sbmsg3 = '持ち前のリスク回避能力は自身の身を守るのに大切な能力です。けれど、もし新しく学びたい分野があったり話してみたい人がいたりしたら、一歩足を踏み出して行動してみるのも悪くはないかもしれません。そうすることで自分の知識や経験が成果になる機会が増えていくので、チャレンジ力が上がっていきます。是非勇気を出して頑張ってみてください。';

               $boxmain1 ='マンネリ';
               $boxdetail1='同じことを繰り返す傾向は新鮮さを無くしてしまいます。友人や恋人と遊ぶときは同じ場所にいくことが多いかもしれません。また、メニューを選ぶ時も慣れ親しんだ物を好みやすい傾向があります。';

               $boxmain2 ='歴史好き';
               $boxdetail2='開放性が低い人は過去の物事から得られる知識や経験を好むため、歴史を学ぶのが好きな方かもしれません。';

               $boxmain3 ='リスク回避';
               $boxdetail3='新しいことを回避する傾向は必然的に無意識にあるリスクを回避することができます。その結果、大きな失敗を起こさないので安全な生活を送ることができるでしょう。';

               $boxmain4='ルール重視';
               $boxdetail4='ルールにしたがって作業するのが得意なタイプです。会社やグループのルールに沿って行動することが得意なので、安全な手法をとって成果を生み出していくことができます。';

               $boxmain5='イツメン';
               $boxdetail5='友達と長く深い友好関係を築く傾向があります。学生時代いつもと同じ人と遊んでいませんでしたか？結婚生活においてはパートナーをより大事にするタイプですので浮気の可能性は低いでしょう。';

               $boxmain6='問題解決';
               $boxdetail6='身近に起こった問題を過去の記事や経験で解決するのが得意なタイプです。その問題解決能力はあらゆる問題で活躍できます。仕事を共にする上では欠かせない人物です。';
                break;

            case $sum <= -13.6;
                $msg = 'マイペースタイプ';
                $img = "/images/shutterstock_198973802.jpg";
                $ssg = '慣れ親しんだ物が大好きな';
               $detail1 = 'マイペース';
               $sbmsg1 = '開放性がとても低いあなたは、周りより自分のペースを大切にしてそれを守り抜くタイプです。このタイプは自分が慣れ親しんだ分野や物に愛着がわくタイプであり身近なものを大切に扱うことができる傾向があります。また、乱れた行動をすることは滅多にないため、周りの人に安心感を与えているでしょう。また、伝統やルールをとても大事にします。なので、毎年行われている伝統的な行事などでは活躍する場面が多いにあります。';

               $detail2 = '新しいことを避ける';
               $sbmsg2 = '一方、新しい経験をするのが苦手なタイプでもあります。例えば、今まで遭遇したことがない問題に直面した場合、中々解決策を見つけることができずに困ったことはありませんか？また、一度決めたルールは何がなんでも守り抜く傾向があります。なので、新しい分野や価値観に対してたまに頑固になったりすることがあるかもしれません。';

               $detail3 = '柔軟になりことを意識してみる';
               $sbmsg3 = '自分のペースを守って生きていくのは、それだけ自分の価値観や経験を大切にしている証なのでとても良いことです。けれど、もし自分の考えでは上手くいけない問題に直面したときは、新しい分野に手を伸ばしてその経験を生かして取り組むと意外にあっさり解決することができるかもしれません。また、違う分野の友人を作ると世界観が広がって自分の価値観に良い刺激をもたらしてくれます。視野を広くするために、思い切って新しいことをするのもありかもしれませんね。';

               $boxmain1 ='マンネリ';
               $boxdetail1='同じことを繰り返す傾向は新鮮さを無くしてしまいます。友人や恋人と遊ぶときは同じ場所にいくことが多いかもしれません。また、メニューを選ぶ時も慣れ親しんだ物を好みやすい傾向があります。';

               $boxmain2 ='歴史好き';
               $boxdetail2='開放性が低い人は過去の物事から得られる知識や経験を好むため、歴史を学ぶのが好きな方かもしれません。';

               $boxmain3 ='リスク回避';
               $boxdetail3='新しいことを回避する傾向は必然的に無意識にあるリスクを回避することができます。その結果、大きな失敗を起こさないので安全な生活を送ることができるでしょう。';

               $boxmain4='ルール重視';
               $boxdetail4='ルールにしたがって作業するのが得意なタイプです。会社やグループのルールに沿って行動することが得意なので、安全な手法をとって成果を生み出していくことができます。';

               $boxmain5='イツメン';
               $boxdetail5='友達と長く深い友好関係を築く傾向があります。学生時代いつもと同じ人と遊んでいませんでしたか？結婚生活においてはパートナーをより大事にするタイプですので浮気の可能性は低いでしょう。';

               $boxmain6='問題解決';
               $boxdetail6='身近に起こった問題を過去の記事や経験で解決するのが得意なタイプです。その問題解決能力はあらゆる問題で活躍できます。仕事を共にする上では欠かせない人物です。';
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
                        <humburger-component></humburger-component>
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
                                <button type="submit" class="btn btn-outline-dark w-50" id="next_button">外向性テスト</button>
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



