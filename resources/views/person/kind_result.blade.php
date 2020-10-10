@extends('person/layout')
@section('content')
<body>
    <?php 
        $high = $kind['q1'] + $kind['q2']+ $kind['q3']+ $kind['q4']+ $kind['q5']+ $kind['q6'];
        $row = $kind['q7'] + $kind['q8']+ $kind['q9']+ $kind['q10']+ $kind['q11']+ $kind['q12'];
        $sum = $high - $row;

        switch (true) {
            case $sum >= 13.6;
               $msg = 'キリストタイプ';
               $img = "/images/shutterstock_1080828530.jpg";
                $ssg = '他人を愛してやまない';
               $detail1 = '利他性の鏡';
               $sbmsg1 = '協調性がとても低いあなたは集団で行動するより一人で行動する方が好きなタイプ。自分が正しいと思ったことは周りの意見関係なく自分を信じることができる人なので、独自性やカリスマ性があると考えれます。このような人たちは共感より論理的思考が長けている成功者の多くが持っている性格なので、個人的な成功ができる可能性があります。';

               $detail2 = '自己犠牲';
               $sbmsg2 = 'しかしその独自性が高いが故に他人との衝突やチームワークから外れる傾向があります。自分は悪いことはしていないと思っていても周りの人からは少し怖い人と思われている可能性があるかもしれません。また、大きな壁にぶつかった時にチームワークを組んで解決することを苦手と感じているかもしれません。';

               $detail3 = '他人と自分との区別';
               $sbmsg3 = '自分の意見を大切にすることは生きていく上で非常に重要なことですが,他の人たちの意見にもう少し傾聴したら共感できる部分を見つけられ、他人とうまく付き合うことができるかもしれません。そうすれば自分で解決できない大きな問題に直面したときに助けてくれる人たちが多いことに気づくでしょう。';

               $boxmain1 ='天使';
               $boxdetail1='周りの人が困っているときにすかさず手助けができる人です。';
               $boxmain2 ='グループ活動';
               $boxdetail2='独自性が高いが故にてきを作りやすい';

               $boxmain3 ='敵対心がない';
               $boxdetail3='周りの人から頼りにされたことはありませんか？';

               $boxmain4='慎み深さ';
               $boxdetail4='自分にも他人にも客観的な視点で捉えるため、必然的にストイックになる。';

               $boxmain5='';
               $boxdetail5='グループ活動をしているとき,常にモヤモヤとした違和感を感じませんか?';

               $boxmain6='流されやすい';
               $boxdetail6='競争を元にした環境では、その独自性をはっきできるでしょう。';
                break;
            case $sum >= 4.9 && $sum <= 13.5;
                 $msg = '慈善家タイプ';
                break;
            case $sum >= -4.8 && $sum <= 4.8;
                $msg = 'バランスタイプ';
                break;
                case $sum >= -13.5 && $sum <= -4.9;
                $msg = '客観性重視タイプ';
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
                        <div class="character_text bigcontent_text">
                            <h3>{{ $ssg }}</h3>
                            <h1>{{ $msg }}</h1>
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
                            <button type="button" class="btn btn-outline-info w-50" id="kind_button">勤勉性テスト</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



