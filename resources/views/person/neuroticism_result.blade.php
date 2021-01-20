@extends('person/layout')
@section('content')
<body>
    <?php 
        switch (true) {
            case $sum >= 13.6;
               $msg = '芸術家タイプ';
               $img = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_703964362.jpg";
               $ssg = '周りの刺激を表現に変える';
               $detail1 = '芸術家のの素質';
               $sbmsg1 = '神経症的傾向がとても高いあなたはガラスのハートの持ち主です。これは一見悪いように思われますが、メンタルの弱さはクリエイティブとの関わりがあります。例えば、有名な漫画家や音楽家、作家などの人達はメンタルが弱い傾向にあります。そのメンタルの弱さを使って素晴らしい作品や曲を作ることができます。感受性が豊かな故にできることでもあります。何かを使って自分を表現することが得意かもしれません。';

               $detail2 = '無意識に自分を傷つける';
               $sbmsg2 = 'その一方で一般の人たちよりメンタルがかなり弱いので、ストレスコントロールするのが苦手な傾向があります。バイトでお客さんに怒られたり職場で上司に叱られたことを2,3日も引きずっていることはありませんか？そのストレスを抱え込んでしまうと、いつか自分を傷つけることに繋がるかもしれません。';

               $detail3 = 'ストレスをコントロールする';
               $sbmsg3 = 'その繊細さ故にストレスをため込んでいると感じたら、ストレスの対処法を考えてみた方が良いかもしれません。例えばそのストレスを運動や散歩で解消するのも良いですし、その繊細さをクリエイティブな趣味に使って活躍するのも良い方法です。その繊細さを上手く使っていくと、あなたにとって掛け替えのない能力になり得るでしょう。';

               $boxmain1 ='芸術家';
               $boxdetail1='感受性が豊かなタイプですので、クリエイティブな能力があります。作品を作って自分を表現するのが得意なタイプです。もしかしたら、あなたの作品に大きく感動する人がいるかもしれません。';

               $boxmain2 ='傷つきやすい';
               $boxdetail2='ストレスに弱い傾向があるので、何か悪いことがあると落ち込んだり、動揺したりすることが多いタイプでもあります。自分のストレス解消法や対策を他人より多くすることをオススメします。';

               $boxmain3 ='怖がり';
               $boxdetail3='刺激に対して大きな反応を示す傾向があります。なのでホラー映画を見ているとき、リアクション的にはとても良い反応を示すでしょう。';

               $boxmain4='危機回避能力';
               $boxdetail4='新しいことをする時にあらゆる危険を事前に察して事前に対策を打つことができます。なので、失敗する可能性が低くなるで仕事では非常に良い能力を持っています。';

               $boxmain5='反芻思考';
               $boxdetail5='一度受けたストレスを何回も繰り返して考えてしまう傾向があります。三日前に友達や上司に言われた何気ない一言を覚えているかもしれません。';

               $boxmain6='未来の予想';
               $boxdetail6='メンタルの弱さは未来に対することに目を向ける能力を見に付けてくれます。上手く使うと未来を予想して今でやるべきことがわかるので、より失敗の少ない人生を歩めるかもしれません。';
                break;

            case $sum >= 4.9 && $sum <= 13.5;
                $msg = '石橋叩くタイプ';
                $img = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_653150977.jpg";
                $ssg = '潜在的な危機を回避する';
                $detail1 = '慎重に行動ができる';
                $sbmsg1 = '神経症的傾向がかなり高いあなたはメンタルが一般より少し弱い傾向があります。メンタルの弱さは世間では悪いと捉えがちな傾向にあります。しかし全くそんなことはないです。メンタルが弱い人の方が危機管理能力が強いです。環境が変化していき、何があるかわからないところでも損害回避することができます。なので結果的に無駄な行動やリスクを抑えることができます。この能力は対人関係でも発揮されます。人の怒りや悲しみ瞬時に察知して対応することができます。';
 
                $detail2 = '感受性の強さ故の問題';
                $sbmsg2 = '一方、そのメンタルの弱さが故にストレスを抱え込みやすい傾向があります。競争が激しい環境などにいくと必要以上に緊張してしまって上手く問題に対処できなくなります。その環境に長く居続けると自分を追い詰める行為に繋がるかもしれません。';
 
                $detail3 = '客観的に問題を見る';
                $sbmsg3 = 'もし問題が起こって自分が落ち込みそうになった時には客観的に状況を捉えてみるのが良い方法です。大抵の問題は複数の原因で起こっている可能性が高いので、自分を必要以上に追い詰めることはないとわかるでしょう。また、日常生活でストレスが溜まってきたらと感じたら、趣味に費やしたり運動などをして適度にリフレッシュをしてみましょう。';
 
                $boxmain1 ='芸術家';
               $boxdetail1='感受性が豊かなタイプですので、クリエイティブな能力があります。作品を作って自分を表現するのが得意なタイプです。もしかしたら、あなたの作品に大きく感動する人がいるかもしれません。';

               $boxmain2 ='傷つきやすい';
               $boxdetail2='ストレスに弱い傾向があるので、何か悪いことがあると落ち込んだり、動揺したりすることが多いタイプでもあります。自分のストレス解消法や対策を他人より多くすることをオススメします。';

               $boxmain3 ='怖がり';
               $boxdetail3='刺激に対して大きな反応を示す傾向があります。なのでホラー映画を見ているとき、リアクション的にはとても良い反応を示すでしょう。';

               $boxmain4='危機回避能力';
               $boxdetail4='新しいことをする時にあらゆる危険を事前に察して事前に対策を打つことができます。なので、失敗する可能性が低くなるで仕事では非常に良い能力を持っています。';

               $boxmain5='反芻思考';
               $boxdetail5='一度受けたストレスを何回も繰り返して考えてしまう傾向があります。三日前に友達や上司に言われた何気ない一言を覚えているかもしれません。';

               $boxmain6='未来の予想';
               $boxdetail6='メンタルの弱さは未来に対することに目を向ける能力を見に付けてくれます。上手く使うと未来を予想して今でやるべきことがわかるので、より失敗の少ない人生を歩めるかもしれません。';
                break;

            case $sum >= -4.8 && $sum <= 4.8;
                $msg = 'コントロールタイプ';
                $img = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_676026622.jpg";
                $ssg = '弱さと強さを兼ね備える';
               $detail1 = '自分をコントロールできる';
               $sbmsg1 = '神経症的傾向が標準なあなたは、客観性と共感を兼ね備えたタイプです。このタイプは自分のストレスを客観的に捉えることができます。なのでストレスが溜まってきたら、趣味に打ち込んだりして上手く解消することができます。けれどストレスにとても強いというわけではないので、他人の悩みに上手く付き合っていける人でもあります。なので他人の相談事に対して、相手に共感しつつ客観的なアドバイスをすることができます。相手にとって非常に参考になる言葉を与えることができます。';

               $detail2 = '周りに流される';
               $sbmsg2 = 'ストレスをコントロールするのが上手なあなたはどのような環境やどんな人と関わっても状況に合わせて対応することができます。しかしストレス耐性が標準レベルなので、たまに知らない間にストレスを多く抱え込んでしまったりすることがあるかもしれません。';

               $detail3 = '自分に気を遣う';
               $sbmsg3 = 'もし最近体調が悪化したり頭がモヤモヤしてしまうことがあったら、一旦自分の人間関係や環境を客観的に見ることをオススメします。そうすると、自分を苦しめていたストレスの原因を見つけることができて、距離をとったり早く対応することができるでしょう。プライベートでも定期的にストレス対策を行うことで、より長期的に活動することができるでしょう。';

               $boxmain1 ='単調';
               $boxdetail1='周りにあまり影響されないあなたは必然的に単調な生活を送っているかもしれません。たまには普段では絶対しない行動や物を買ったりするとより楽しい生活を送ることができます。';

               $boxmain2 ='サバイバル';
               $boxdetail2='どんな状況でも屈しないので、どこでも生きていけるタイプです。突然知らない環境に置かれても、周りに影響されずに要領よく行動することができるでしょう。';

               $boxmain3 ='幸福度が高い';
               $boxdetail3='ストレスを感じにくい傾向があるあなたは、悲観的になりづらい傾向があります。日常生活を難なくとこなせていくので、幸福度の高い人生を送ることができるでしょう。';

               $boxmain4='リーダー';
               $boxdetail4='ストレスを感じにくいあなたは何があっても動じないメンタルの持ち主なので、周りから頼りにされることが多いかもしれません。';

               $boxmain5='危機感が薄い';
               $boxdetail5='メンタルが強い故に危機感を持つのが少し低い傾向があります。先延ばししていた問題がいつの間にか大きくなった経験はありませんか？たまに自分の状況を観察した方が良いかもしれません。';

               $boxmain6='筋トレ';
               $boxdetail6='メンタルが強くて打たれ強いあなたは筋トレに向いているかもしれません。筋トレを始めると、自分にストイックになれるのでいつの間にかかっこいい体になっているでしょう。';
                break;

                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '頼れるお兄さんタイプ';
                 $img = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_373621933.jpg";
                 $ssg = '困難な場所でも冷静に動ける';
               $detail1 = '滅多なことでは屈しない';
               $sbmsg1 = '神経症的傾向が少し低いあなたは周りから頼りにされるお兄さんタイプです。何か問題が起こっても冷静さを見失わず行動することができるので、スムーズに問題解決することができます。また、ストレスの多い環境下でも周りに影響されずに作業を行うことができます。なので、仕事を継続することができてそれが成功に繋がる場合も多くあります。そのメンタルの強さはあなたに多くの成果を与えてくれるでしょう。';

               $detail2 = '危険を感じない';
               $sbmsg2 = 'その一方で、そのメンタルが強いが故に一般の人がやらない危険な行動でも躊躇なく行うことがあります。それが原因で自分を追い詰めてしまうことがあるかもしれません。また、周りの影響をあまり受けないので、知らない間に自分だけが違うことをしてしまう可能性があります。その結果、取り返しのつかない結果を招く事も起こり得ます。';

               $detail3 = '危機感を持つ';
               $sbmsg3 = 'メンタルの強さは仕事や日常など今の時代で生きていく上ではとても役に立つ能力です。しかし、自分の行動を少し立ち止まったり周りをよく見てリスクを考えてみると、自分の身を守ることに繋がっていきます。そうすることで、自分に訪れる危険を見つけ出して早めに対応することができます。程よい危機感を持つことで良い人生を送ることができるので是非試してみてください。';

               $boxmain1 ='単調';
               $boxdetail1='周りにあまり影響されないあなたは必然的に単調な生活を送っているかもしれません。たまには普段では絶対しない行動や物を買ったりするとより楽しい生活を送ることができます。';

               $boxmain2 ='サバイバル';
               $boxdetail2='どんな状況でも屈しないので、どこでも生きていけるタイプです。突然知らない環境に置かれても、周りに影響されずに要領よく行動することができるでしょう。';

               $boxmain3 ='幸福度が高い';
               $boxdetail3='ストレスを感じにくい傾向があるあなたは、悲観的になりづらい傾向があります。日常生活を難なくとこなせていくので、幸福度の高い人生を送ることができるでしょう。';

               $boxmain4='リーダー';
               $boxdetail4='ストレスを感じにくいあなたは何があっても動じないメンタルの持ち主なので、周りから頼りにされることが多いかもしれません。';

               $boxmain5='危機感が薄い';
               $boxdetail5='メンタルが強い故に危機感を持つのが少し低い傾向があります。先延ばししていた問題がいつの間にか大きくなった経験はありませんか？たまに自分の状況を観察した方が良いかもしれません。';

               $boxmain6='筋トレ';
               $boxdetail6='メンタルが強くて打たれ強いあなたは筋トレに向いているかもしれません。筋トレを始めると、自分にストイックになれるのでいつの間にかかっこいい体になっているでしょう。';
                break;

            case $sum <= -13.6;
                $msg = '騎士タイプ';
                $img = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_246130534.jpg";
                $ssg = '鋼のメンタルの持ち主';
               $detail1 = '不動のメンタル';
               $sbmsg1 = '神経症的傾向がとても低いあなたは、何があっても全く動じないメンタルを持っています。ストレスが多い環境や競争が激しい環境に身をおいても持ち前のメンタルの強さで乗り切れることができます。つまり、どこにいても生きていける人でもあります。プライベートでもメンタルの強さは発揮されます。例えば海外旅行で何か問題が発生した場合でも、動揺せずに自分がやるべきことに集中することができます。そのメンタルの強さに助けられたり惹かれてあなたと付き合っている人達も多くいるかもしれません。';
            
               $detail2 = '危機感の無さ';
               $sbmsg2 = '一方、その強すぎるメンタルが故に起こる事もあります。その一つとして、危機を感じにくい傾向があります。身を潜む潜在的な危機があったとしてもそのメンタルが強いが故に危険を感じる事ができずに問題が発生してしまうことがあります。これはメンタルが強い故に今現在に集中しすぎて、これから起こるかもしれない問題を考えることが少なくなっているから起こる問題です。';

               $detail3 = '少し慎重になる';
               $sbmsg3 = 'そのメンタルの強さは多くの人を引き付けて、幸せな人生を送る上でとても大切な能力です。けれどリスクのあることを始めたり新しいことを始める時は、これから起こる可能性のある問題を考えてその対処法を予め準備することがさらに良い結果につながります。';

               $boxmain1 ='単調';
               $boxdetail1='周りにあまり影響されないあなたは必然的に単調な生活を送っているかもしれません。たまには普段では絶対しない行動や物を買ったりするとより楽しい生活を送ることができます。';

               $boxmain2 ='サバイバル';
               $boxdetail2='どんな状況でも屈しないので、どこでも生きていけるタイプです。突然知らない環境に置かれても、周りに影響されずに要領よく行動することができるでしょう。';

               $boxmain3 ='幸福度が高い';
               $boxdetail3='ストレスを感じにくい傾向があるあなたは、悲観的になりづらい傾向があります。日常生活を難なくとこなせていくので、幸福度の高い人生を送ることができるでしょう。';

               $boxmain4='リーダー';
               $boxdetail4='ストレスを感じにくいあなたは何があっても動じないメンタルの持ち主なので、周りから頼りにされることが多いかもしれません。';

               $boxmain5='危機感が薄い';
               $boxdetail5='メンタルが強い故に危機感を持つのが少し低い傾向があります。先延ばししていた問題がいつの間にか大きくなった経験はありませんか？たまに自分の状況を観察した方が良いかもしれません。';

               $boxmain6='筋トレ';
               $boxdetail6='メンタルが強くて打たれ強いあなたは筋トレに向いているかもしれません。筋トレを始めると、自分にストイックになれるのでいつの間にかかっこいい体になっているでしょう。';
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
                        <humburger-component></humburger-component>
                    </div>
                </header>
            </div>
            <div class="row">
                <div class="character_result kind_result">
                            <div class="character_bigcontent kind_bigcontent">
                                <img  src="{{ $img }}" alt="">
                                <div class="character_text neuroticism_text">
                                    <div class="col-sm-12">
                                        <h3>{{ $ssg }}</h3>
                                        <h1>{{ $msg }}</h1>
                                    </div>
                                </div>
                            </div>
                    <div class="col-sm-12 neuroticism_good">
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
                            <h2 class="special_text neuroticism_text">{{ $msg }}さんの特徴</h2>
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
                                <form action="/person/sum_result" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-light w-50" id="next_button">テスト結果</button>
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



