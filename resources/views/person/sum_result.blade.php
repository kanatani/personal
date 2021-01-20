@extends('person/layout')
@section('content')
<body>
    <?php
    
        switch (true) {
            // 勤勉性
            case $item['conscientiousness'] >= 13.6;
                $serious = '計画タイプ';
                $seriousimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_403187164.jpg";
                $serioussm = '自分の計画を乱さない';
		break;

            case $item['conscientiousness'] >= 4.9 && $item['conscientiousness'] <= 13.5;
                $serious = 'コツコツタイプ';
                $seriousimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_699712699.jpg";
                $serioussm = '積み上げ型'; 
                break;

            case $item['conscientiousness'] >= -4.8 && $item['conscientiousness'] <= 4.8;
                $serious = 'スイッチタイプ';
                $seriousimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1716129895.jpg";
                $serioussm = 'ON/OFF切替できる';
                break;

                case $item['conscientiousness'] >= -13.5 && $item['conscientiousness'] <= -4.9;
                $serious = '素直タイプ';
                $seriousimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1466073518.jpg";
                $serioussm = '自分の本能に素直な';
                break;

            case $item['conscientiousness'] <= -13.6;
                $serious = '速攻行動力タイプ';
                $seriousimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1502561861.jpg";
                $serioussm = '思い立ったら即行動';
                break;
         
        }

        switch (true) {
                // 協調性
                case $item['kind'] >= 13.6;
                $kind = 'キリストタイプ';
                $kindimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1586081839.jpg";
                 $kindsm = '他人を愛してやまない';
                 break;
 
             case $item['kind'] >= 4.9 && $item['kind'] <= 13.5;
                  $kind = 'ボランティアタイプ';
                  $kindimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1692488656.jpg";
                  $kindsm = '第一印象から良い';
                  break;
 
             case $item['kind'] >= -4.8 && $item['kind'] <= 4.8;
                 $kind = 'バランスタイプ';
                 $kindimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_478518385.jpg";
                 $kindsm = '共感と客観を兼ね備えた';                
                 break;
 
                 case $item['kind'] >= -13.5 && $item['kind'] <= -4.9;
                 $kind = '客観性重視タイプ';
                 $kindimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_603829727.jpg";
                 $kindsm = '合理的な答えを見つけやすい';
                 break;
 
             case $item['kind'] <= -13.6;
                 $kind = '独自性タイプ';
                 $kindimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1080828530.jpg";
                 $kindsm = '一人で物事を遂行する';
                 break;
        }

        // 開放性

        switch (true) {
            case $item['openness'] >= 13.6;
               $openness= 'ナポレオンタイプ';
               $opennessimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_205554184.jpg";
                $opennesssm = '新しいことが大好きな';
                 break;

            case $item['openness'] >= 4.9 && $item['openness'] <= 13.5;
                 $openness= '冒険家タイプ';
                 $opennessimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_443840548.jpg";
                 $opennesssm = '幅広い興味がある';
                 break;
 

            case $item['openness'] >= -4.8 && $item['openness'] <= 4.8;
                $openness= '器用タイプ';
                $opennessimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_670192495.jpg";
                $opennesssm = 'ルールと刺激をコントロールする';
                 break;

                case $item['openness'] >= -13.5 && $item['openness'] <= -4.9;
                $openness= '慎重タイプ';
                $opennessimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1767680240.jpg";
                $opennesssm = 'ルールで安全策を練る';
                break;

            case $item['openness'] <= -13.6;
                $openness= 'こだわりタイプ';
                $opennessimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_198973802.jpg";
                $opennesssm = '慣れ親しんだ物が大好きな';
                break;
        }

        // 外交性

        switch (true) {
            case $item['extraversion'] >= 13.6;
               $extraversion = 'カリスマタイプ';
               $extraversionimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_640536037.jpg";
               $extraversionsm = '多くの人を魅了する';
                 break;

            case $item['extraversion'] >= 4.9 && $item['extraversion'] <= 13.5;
                 $extraversion = '外交官タイプ';
                 $extraversionimg ="http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1571369995.jpg";
                $extraversionsm = '人と会うのがが大好きな';
                 break;
 

            case $item['extraversion'] >= -4.8 && $item['extraversion'] <= 4.8;
                $extraversion = '八方美人タイプ';
                $extraversionimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1253308768.jpg";
               $extraversionsm = '内向と外向を使い分ける';
                break;

                case $item['extraversion'] >= -13.5 && $item['extraversion'] <= -4.9;
                $extraversion = '人見知りタイプ';
                $extraversionimg = "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1204875721.jpg";
               $extraversionsm = '緊張するけど人が好きな';
                break;

            case $item['extraversion'] <= -13.6;
                $extraversion = 'オタクタイプ';
                $extraversionimg ="http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1319513894.jpg";
               $extraversionsm = '自分の興味を追求する';
                break;
        }


        // 神経症的傾向
        switch (true) {
            case $item['neuroticism'] >= 13.6;
               $neuroticism = '芸術家タイプ';
               $neuroticismimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_703964362.jpg";
               $neuroticismsm = '周りの刺激を表現に変える';
                break;

            case $item['neuroticism'] >= 4.9 && $item['neuroticism'] <= 13.5;
                $neuroticism = '石橋叩くタイプ';
                $neuroticismimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_653150977.jpg";
                $neuroticismsm = '潜在的な危機を回避する';
                break;

            case $item['neuroticism'] >= -4.8 && $item['neuroticism'] <= 4.8;
                $neuroticism = 'コントロールタイプ';
                $neuroticismimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_676026622.jpg";
                $neuroticismsm = '弱さと強さを兼ね備える';
                break;

                case $item['neuroticism'] >= -13.5 && $item['neuroticism'] <= -4.9;
                $neuroticism = '頼れるお兄さんタイプ';
                 $neuroticismimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_373621933.jpg";
                 $neuroticismsm = '困難な場所でも冷静に動ける';
                break;

            case $item['neuroticism'] <= -13.6;
                $neuroticism = '騎士タイプ';
                $neuroticismimg= "http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_246130534.jpg";
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
                            <humburger-component></humburger-component>
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
                    <canvas id="myChart" class="chart-detail"></canvas>
                </div>
                <div class="big5_result_text row">
                    <h1 class="big5_detail_title">big5 detail</h1>
                    <div class="serious_result col-sm-12" id="bigfive_detail">
                        <p>勤勉性</p>
                        <div class="total_msg serious_message">
                            <img  src="{{ $seriousimg }}" alt="">
                            <div class="">
                                <h3>{{ $serioussm }}</h3>
                                <h1>{{ $serious }}</h1>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="select_area">
                    <form action="/person/loguin" method="get">
                    <button type="submit" class="btn btn-outline-success" id="result_button">ログイン</button>
                    </form>
                    <form action="/person/logout" method="get">
                        <button type="submit" class="btn btn-outline-secondary" id="result_button">トップページ</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer_title col-sm-12" id="footer_titles">
                <p>© person 2020</p>
            </div>
        </div>
    </div>
    <script>
     window.onload = function() {
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: ['開放性', '神経症的傾向', '社交性', '勤勉性', '協調性'],
                    datasets: [{
                        label: '性格分析',
                        data:[<?php echo $item['openness']; ?>,<?php echo $item['neuroticism']; ?>,<?php echo $item['extraversion']; ?>,<?php echo $item['conscientiousness']; ?>,<?php echo $item['kind']; ?>],
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
        }
     </script>
@endsection



