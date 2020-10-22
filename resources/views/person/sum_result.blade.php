@extends('person/layout')
@section('content')
<body>
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
                                            <li><a href="">トップページ</a></li>
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
                            data:[-14,41,41,44,23],
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
                       ticks:{
                           suggestedMax:25,
                           suggestedMin: 0,
                           stepSize: 5,

                       }
                    }
                });
     </script>
@endsection



