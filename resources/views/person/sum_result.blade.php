@extends('person/layout')
@section('content')
<body>
    <?php
    
        switch (true) {
            // 勤勉性
            case $item['conscientiousness'] >= 13.6;
                $serious = '計画タイプ';
                $seriousimg = "/images/shutterstock_403187164.jpg";
                $serioussm = '自分の計画を乱さない';
                $seriousmsg = '勤勉性がとても高いあなたは、自分が決めた目標に大して決まった手順を自分で考えて実行していくくタイプです。なので目標達成する可能性が非常に高い人物であります。また、滅多なことがない限り、途中で仕事を放り出すことはありません。むしろ、諦めが悪いタイプです。周りの人たちからは仕事ができる人と思われているかもしれませんね。';
                break;

            case $item['conscientiousness'] >= 4.9 && $item['conscientiousness'] <= 13.5;
                $serious = 'コツコツタイプ';
                $seriousimg = "/images/shutterstock_1692488656.jpg";
                $serioussm = '積み上げ型';
                $seriousmsg = '勤勉性がとても高いあなたは、自分が決めた目標に大して決まった手順を自分で考えて実行していくくタイプです。なので目標達成する可能性が非常に高い人物であります。また、滅多なことがない限り、途中で仕事を放り出すことはありません。むしろ、諦めが悪いタイプです。周りの人たちからは仕事ができる人と思われているかもしれませんね。';
                break;

            case $item['conscientiousness'] >= -4.8 && $item['conscientiousness'] <= 4.8;
                $serious = 'スイッチタイプ';
                $seriousimg = "/images/shutterstock_1716129895.jpg";
                $serioussm = 'ON/OFF切替できる';
                $seriousmsg = '勤勉性がとても高いあなたは、自分が決めた目標に大して決まった手順を自分で考えて実行していくくタイプです。なので目標達成する可能性が非常に高い人物であります。また、滅多なことがない限り、途中で仕事を放り出すことはありません。むしろ、諦めが悪いタイプです。周りの人たちからは仕事ができる人と思われているかもしれませんね。';
                break;

                case $item['conscientiousness'] >= -13.5 && $item['conscientiousness'] <= -4.9;
                $serious = '素直タイプ';
                $seriousimg = "/images/shutterstock_603829727.jpg";
                $serioussm = '自分の本能に素直な';
                $seriousmsg = '勤勉性がとても高いあなたは、自分が決めた目標に大して決まった手順を自分で考えて実行していくくタイプです。なので目標達成する可能性が非常に高い人物であります。また、滅多なことがない限り、途中で仕事を放り出すことはありません。むしろ、諦めが悪いタイプです。周りの人たちからは仕事ができる人と思われているかもしれませんね。';
                break;

            case $item['conscientiousness'] <= -13.6;
                $serious = '速攻行動力タイプ';
                $seriousimg = "/images/shutterstock_1080828530.jpg";
                $serioussm = '思い立ったら即行動';
                $seriousmsg = '勤勉性がとても高いあなたは、自分が決めた目標に大して決まった手順を自分で考えて実行していくくタイプです。なので目標達成する可能性が非常に高い人物であります。また、滅多なことがない限り、途中で仕事を放り出すことはありません。むしろ、諦めが悪いタイプです。周りの人たちからは仕事ができる人と思われているかもしれませんね。';
                break;
         
        }

        switch (true) {
                // 協調性
                case $item['kind'] >= 13.6;
                $kind = 'キリストタイプ';
                $kindimg = "/images/shutterstock_1586081839.jpg";
                 $kindsm = '他人を愛してやまない';
                 break;
 
             case $item['kind'] >= 4.9 && $item['kind'] <= 13.5;
                  $kind = 'ボランティアタイプ';
                  $kindimg = "/images/shutterstock_1692488656.jpg";
                  $kindsm = '第一印象から良い';
                
                  break;
 
             case $item['kind'] >= -4.8 && $item['kind'] <= 4.8;
                 $kind = 'バランスタイプ';
                 $kindimg = "/images/shutterstock_478518385.jpg";
                 $kindsm = '共感と客観を兼ね備えた';
                 $kindmsg = '協調性が標準なあなたは、客観性と協調性を兼ね備えたバランスが良いタイプです。グループ活動にもある程度馴染むことができ、自分一人でも物事を実行することができます。この特性はグループ活動で問題が起こったときに共感と客観を用いて問題をスムーズに解決することができる特性です。なのでグループに一人は欲しい人材ですね。';
                
                 break;
 
                 case $item['kind'] >= -13.5 && $item['kind'] <= -4.9;
                 $kind = '客観性重視タイプ';
                 $kindimg = "/images/shutterstock_603829727.jpg";
                 $kindsm = '合理的な答えを見つけやすい';
                 break;
 
             case $item['kind'] <= -13.6;
                 $kind = '独自性タイプ';
                 $kindimg = "/images/shutterstock_1080828530.jpg";
                 $kindsm = '一人で物事を遂行する';
                 break;
        }

        // 開放性

        switch (true) {
            case $item['openness'] >= 13.6;
               $openness= 'ナポレオンタイプ';
               $opennessimg= "/images/shutterstock_1586081839.jpg";
                $opennesssm = '新しいことが大好きな';
                 break;

            case $item['openness'] >= 4.9 && $item['openness'] <= 13.5;
                 $openness= '冒険家タイプ';
                 $opennessimg= "/images/shutterstock_1692488656.jpg";
                 $opennesssm = '幅広い興味がある';
                 break;
 

            case $item['openness'] >= -4.8 && $item['openness'] <= 4.8;
                $openness= '器用タイプ';
                $opennessimg= "/images/shutterstock_670192495.jpg";
                $opennesssm = 'ルールと刺激をコントロールする';
                $opennessmsg = '協調性が標準なあなたは、客観性と協調性を兼ね備えたバランスが良いタイプです。グループ活動にもある程度馴染むことができ、自分一人でも物事を実行することができます。この特性はグループ活動で問題が起こったときに共感と客観を用いて問題をスムーズに解決することができる特性です。なのでグループに一人は欲しい人材ですね。';
                 break;

                case $item['openness'] >= -13.5 && $item['openness'] <= -4.9;
                $openness= '慎重タイプ';
                $opennessimg= "/images/shutterstock_603829727.jpg";
                $opennesssm = 'ルールで安全策を練る';
                break;

            case $item['openness'] <= -13.6;
                $openness= 'こだわりタイプ';
                $opennessimg= "/images/shutterstock_1080828530.jpg";
                $opennesssm = '慣れ親しんだ物が大好きな';
                break;
        }

        // 外交性

        switch (true) {
            case $item['extraversion'] >= 13.6;
               $extraversion = 'カリスマタイプ';
               $extraversionimg = "/images/shutterstock_1586081839.jpg";
               $extraversionsm = '多くの人を魅了する';
                 break;

            case $item['extraversion'] >= 4.9 && $item['extraversion'] <= 13.5;
                 $extraversion = '外交官タイプ';
                 $extraversionimg = "/images/shutterstock_1692488656.jpg";
                $extraversionsm = '人と会うのがが大好きな';
                 break;
 

            case $item['extraversion'] >= -4.8 && $item['extraversion'] <= 4.8;
                $extraversion = '八方美人タイプ';
                $extraversionimg = "/images/shutterstock_478518385.jpg";
               $extraversionsm = '内向と外向を使い分ける';
               $extraversionmsg = '協調性が標準なあなたは、客観性と協調性を兼ね備えたバランスが良いタイプです。グループ活動にもある程度馴染むことができ、自分一人でも物事を実行することができます。この特性はグループ活動で問題が起こったときに共感と客観を用いて問題をスムーズに解決することができる特性です。なのでグループに一人は欲しい人材ですね。';
                break;

                case $item['extraversion'] >= -13.5 && $item['extraversion'] <= -4.9;
                $extraversion = '人見知りタイプ';
                $extraversionimg = "/images/shutterstock_603829727.jpg";
               $extraversionsm = '緊張するけど人が好きな';
                break;

            case $item['extraversion'] <= -13.6;
                $extraversion = 'オタクタイプ';
                $extraversionimg = "/images/shutterstock_1080828530.jpg";
               $extraversionsm = '自分の興味を追求する';
                break;
        }


        // 神経症的傾向
        switch (true) {
            case $item['neuroticism'] >= 13.6;
               $neuroticism = '芸術家タイプ';
               $neuroticismimg= "/images/shutterstock_1080828530.jpg";
               $neuroticismsm = '周りの刺激を表現に変える';
                break;

            case $item['neuroticism'] >= 4.9 && $item['neuroticism'] <= 13.5;
                $neuroticism = '石橋叩くタイプ';
                $neuroticismimg= "/images/shutterstock_603829727.jpg";
                $neuroticismsm = '潜在的な危機を回避する';
                break;

            case $item['neuroticism'] >= -4.8 && $item['neuroticism'] <= 4.8;
                $neuroticism = 'コントロールタイプ';
                $neuroticismimg= "/images/shutterstock_478518385.jpg";
                $neuroticismsm = '弱さと強さを兼ね備える';
                $neuroticismmsg = '協調性が標準なあなたは、客観性と協調性を兼ね備えたバランスが良いタイプです。グループ活動にもある程度馴染むことができ、自分一人でも物事を実行することができます。この特性はグループ活動で問題が起こったときに共感と客観を用いて問題をスムーズに解決することができる特性です。なのでグループに一人は欲しい人材ですね。';
                break;

                case $item['neuroticism'] >= -13.5 && $item['neuroticism'] <= -4.9;
                $neuroticism = '頼れるお兄さんタイプ';
                 $neuroticismimg= "/images/shutterstock_1692488656.jpg";
                 $neuroticismsm = '困難な場所でも冷静に動ける';
                break;

            case $item['neuroticism'] <= -13.6;
                $neuroticism = '騎士タイプ';
                $neuroticismimg= "/images/shutterstock_1586081839.jpg";
                $neuroticismsm = '鋼のメンタルの持ち主';
                break;
        }

    ?>

    <div class="container-fluid">
        <div id="app">
            <div class="row fixed-top">
                    <header class="content_head">
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
                                            <li><a href=" {{ url('/person') }} ">トップページ</a></li>
                                            <li><a href="">お問い合わせ</a></li>
                                            <li><a href="">ログイン</a></li>
                                        </ul>
                                    </nav>
                                </transition>
                        </div>
                    </header>
                </div>
        </div>
        <div class="total">
            <div>
                <div class="total_title">
                    <h1>your character</h1>
                </div>
                <div class="totalchart">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="big5_result_text row">
                    <h1 id="big5_detail_title">big5 detail</h1>
                    <div class="serious_result col-sm-12" id="bigfive_detail">
                        <p>勤勉性</p>
                        <div class="total_msg serious_message">
                            <img  src="{{ $seriousimg }}" alt="">
                            <div class="">
                                <h3>{{ $serioussm }}</h3>
                                <h1>{{ $serious }}</h1>
                                <p>{{ $seriousmsg }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="kind_results col-sm-12" id="bigfive_detail">
                        <p>協調性</p>
                        <div class="total_msg kind_message">
                            <img  src="{{ $kindimg }}" alt="">
                            <div>
                                <h3>{{ $kindsm }}</h3>
                                <h1>{{ $kind }}</h1>
                                <p>{{ $kindmsg }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="openness_results col-sm-12" id="bigfive_detail">
                        <p>開放性</p>
                        <div class="total_msg openness_message">
                        <img  src="{{ $opennessimg }}" alt="">
                        <div>
                            <h3>{{ $opennesssm }}</h3>
                            <h1>{{ $openness }}</h1>
                            <p>{{ $opennessmsg }}</p>
                        </div>
                        </div>
                    </div>
                    <div class="extra_results col-sm-12" id="bigfive_detail">
                        <p>外交性</p>
                        <div class="total_msg extraversion_message">
                            <img  src="{{ $extraversionimg }}" alt="">
                            <div>
                                <h3>{{ $extraversionsm }}</h3>
                                <h1>{{ $extraversion }}</h1>
                                <p>{{ $extraversionmsg }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="neuroticism_results col-sm-12" id="bigfive_detail">
                        <p>神経症的傾向</p>
                        <div class="total_msg neuroticism_message">
                            <img  src="{{ $neuroticismimg }}" alt="">
                            <div>
                                <h3>{{ $neuroticismsm }}</h3>
                                <h1>{{ $neuroticism }}</h1>
                                <p>{{ $neuroticismmsg }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="select_area">
                    <a href="/person" class="badge badge-info">戻る</a>
                    <br>
                    <a href="/person" class="badge badge-dark">Dark</a>
                </div>
            </div>
        </div>
    </div>
    <script>
                var ctx = document.getElementById('myChart');
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: ['開放性', '神経症的傾向', '社交性', '勤勉性', '協調性'],
                        datasets: [{
                            label: '性格分析',
                            data:[<?php echo $item['openness']; ?>,<?php echo $item['neuroticism']; ?>,<?php echo $item['extraversion']; ?>,-<?php echo $item['conscientiousness']; ?>,<?php echo $item['kind']; ?>],
                            backgroundColor: 'RGBA(225,95,150, 0.5)',
                            borderColor: 'RGBA(225,95,150, 0.5)',
                            borderWidth: 1,
                            pointBackgroundColor: 'RGB(46,106,177)'
                        }]
                    },
                    options: {
                       title: {
                           display: true,
                           text: '性格分析'
                       },
                       scale: {
                            ticks:{
                            min: -30,
                            max:30,
                            stepSize: 10,
                        }
                       }
                    }
                });
     </script>
@endsection



