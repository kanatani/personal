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
        break;
    case $item['conscientiousness'] >= 4.9 && $item['conscientiousness'] <= 13.5;
        $serious = 'コツコツタイプ';
        $seriousimg = "/images/shutterstock_1692488656.jpg";
        $serioussm = '積み上げ型';
        break;
    case $item['conscientiousness'] >= -4.8 && $item['conscientiousness'] <= 4.8;
        $serious = 'スイッチタイプ';
        $seriousimg = "/images/shutterstock_1716129895.jpg";
        $serioussm = 'ON/OFF切替できる';
       break;
        case $item['conscientiousness'] >= -13.5 && $item['conscientiousness'] <= -4.9;
        $serious = '素直タイプ';
        $seriousimg = "/images/shutterstock_603829727.jpg";
        $serioussm = '自分の本能に素直な';
        break;
    case $item['conscientiousness'] <= -13.6;
        $serious = '速攻行動力タイプ';
        $seriousimg = "/images/shutterstock_1080828530.jpg";
        $serioussm = '思い立ったら即行動';
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
          break;

         case $item['kind'] >= -13.5 && $item['kind'] <= -4.9;
         $kind = '客観性重視タイプ';
         $kindimg = "/images/shutterstock_603829727.jpg";
         $kindsm = '合理的な答えを見つけやすい';
         break;

     case $item['kind'] <= -13.6;
         $kind = '独自タイプ';
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
            <div class="row">
                <div  class="page_header">
                <header>
                        <div>
                            <div class="header_title login_header_title">
                                <h1>person</h1>
                            </div>
                            <nav id="global_navi">
                                <ul>
                                    <li>
                                        <a href="{{ route('mypage') }}" class="current">mypage</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('community') }}">community</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('search') }}">search</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chat') }}" >chat</a>
                                    </li>
                                </ul>
                            </nav>
                        <div class="myaccount">
                            <div class="out_form">
                                <form action="/person/logout" method="get">
                                <button type="submit" class="btn btn-outline-info" id="out_button">logout</button>
                                </form>
                            </div>
                            <div>
                                <h3 class="myaccount_name">{{ $name }}
                                <img src="<?php echo $fileName; ?>" alt="" class="myaccount_img">
                                </h3>
                            </div>
                        </div>
                        <div class="responsive_navi">
                            <div :class="{'is-active':isActive}" class="btn-humburger" @click="toggleButton">
                                <div></div>
                                <div></div>
                            </div>
                            <transition name="navi">
                            <nav class="responsive" v-show="isActive">
                                    <ul>
                                        <li>
                                            <a href="{{ route('mypage') }}" >mypage</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('community') }}" >community</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('search') }}" >search</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('chat') }}" >chat</a>
                                        </li>
                                        <li>
                                        <form action="/person/logout" method="get">
                                        <button type="submit" class="btn btn-outline-info" id="out_button">logout</button>
                                        </form>
                                        </li>
                                    </ul>
                                </nav>
                            </transition>
                        </div>
                    </header>
                </div>
            </div>
            <div>
                <div class="mypage_head">
                    <div class="user_detail">
                        <div>
                            <h4>userid</h4>
                            <p>{{ $userid }}</p>
                            <h4>username</h4>
                            <p>{{ $yourname}}</p>
                            <img src="<?php echo $yourimage; ?>" alt="" class="youraccount_img">
                        </div>
                        <div class="like_data">
                            <input type="hidden" name="userid" value="<?php echo $userid; ?>" class="userid">
                            <input type="hidden" class="myid" value="<?php echo Session::get('id');  ?>">
                           @if(!empty($likes))
                            <button type="button" class="btn btn-outline-info" id="like_button">解除</button>
                            @else
                            <button type="button" class="btn btn-outline-info" id="like_button">いいね</button>
                            @endif
                        </div>                
                    </div>
                    <div>
                        <h1 class="your_page">your page</h1>
                    </div>
                    <div>
                        <div class="mypage_type">
                            <div class="extraversion_mypage personal_mypage">
                                <h3>外向性</h3>
                                <p>{{ $extraversion }}</p>
                            </div>
                            <div class="kind_mypage personal_mypage">
                                <h3>協調性</h3>
                                <p>{{ $kind }}</p>
                            </div>
                            <div class="serious_mypage personal_mypage">
                                <h3>勤勉性</h3>
                                <p>{{ $serious }}</p>
                            </div>
                            <div class="openness_mypage personal_mypage">
                                <h3>開放性</h3>
                                <p>{{ $openness }}</p>
                            </div>
                            <div class="neuroticism_mypage personal_mypage">
                                <h3>神経症的傾向</h3>
                                <p>{{ $neuroticism }}</p>
                            </div>
                        </div>
                        <div class="mytpage_chart">
                            <h2>chart</h2>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mypage_main">
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="extraversion_subpage">
                        外向性
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $extraversion }}</h5>
                        <p class="card-text">{{ $extraversionsm }}</p>
                        <form action="/person/your_result/{$userid}"  method="post">
                        @csrf
                            <input type="hidden" name="extraversion" value="extraversion">
                            <input type="hidden" name="userid" value="<?php echo $userid; ?>" class="userid">
                            <button type="submit" class="btn btn-outline-danger w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="kind_subpage">
                        協調性
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $kind }}</h5>
                        <p class="card-text">{{ $kindsm }}</p>
                        <form action="/person/your_result/{$userid}"  method="post">
                        @csrf
                            <input type="hidden" name="kind" value="kind">
                            <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                            <button type="submit" class="btn btn-outline-warning w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="serious_subpage">
                        勤勉性
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $serious }}</h5>
                        <p class="card-text">{{ $serioussm }}</p>
                        <form action="/person/your_result/{$userid}" method="post">
                        @csrf
                            <input type="hidden" name="serious" value="serious">
                            <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                            <button type="submit" class="btn btn-outline-info w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="openness_subpage">
                        開放性
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $openness }}</h5>
                        <p class="card-text">{{ $opennesssm }}</p>
                        <form action="/person/your_result/{$userid}"  method="post">
                        @csrf
                            <input type="hidden" name="openness" value="openness">
                            <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                          <button type="submit" class="btn btn-outline-success w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="neuroticism_subpage">
                        神経症的傾向
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $neuroticism }}</h5>
                        <p class="card-text">{{ $neuroticismsm }}</p>
                        <form action="/person/your_result/{$userid}"  method="post">
                        @csrf
                            <input type="hidden" name="neuroticism" value="neuroticism">
                            <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                        <button type="submit" class="btn btn-outline-dark w-25" id="neuroticism_button">sub detail</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="remainder">

            </div>
            <div class="row">
                <div class="footer_title col-sm-12" id="footer_titles">
                    <p>© person 2020</p>
                </div>
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
     <script src="{{ asset('/js/like.js') }}"></script>
    
@endsection



