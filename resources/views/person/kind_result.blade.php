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
                $img = "/images/shutterstock_1080828530.jpg";
                $ssg = '一人で物事を遂行する';
               $msg = '独自性タイプ';
               $sbmsg1 = '協調性がかなり低いあなたは集団で行動するより一人で行動する方が好きなタイプ。自分が正しいと思ったことは周りの意見関係なく自分を信じることができる人なので、独自性やカリスマ性があると考えれます。このような人たちは成功者の多くが持っている性格なので、個人的な成功ができる可能性があります。';

               $sbmsg2 = 'しかしその独自性が高いが故に他人との衝突やチームワークから外れる傾向があります。自分は悪いことはしていないと思っていても周りの人からは少し怖い人と思われている可能性があるかもしれません。';

               $sbmsg3 = '自分の意見を大切にすることは生きていく上で非常に重要なことですが,他の人たちの意見にもう少し傾聴したら共感できる部分を見つけられるかもしれません。';
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
                <div class="kind_result">
                    <div class="kind_bigcontent col-sm-12">
                        <img  src="{{ $img }}" alt="">
                        <div class="bigcontent_text">
                            <h3>{{ $ssg }}</h3>
                            <h2>{{ $msg }}</h2>
                        </div>
                    </div>
                    <div class="kind_subcontent col-sm-12">
                        <p>{{ $sbmsg1 }}</p>
                        <p>{{ $sbmsg2 }}</p>
                        <p>{{ $sbmsg3 }}</p>
                        
                    </div>
                    <div class="kind_detail">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



