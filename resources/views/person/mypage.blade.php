@extends('person/layout')
@section('content')
<body>
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
                                        <a href="search" class="current">mypage</a>
                                    </li>
                                    <li>
                                        <a href="search">community</a>
                                    </li>
                                    <li>
                                        <a href="search">search</a>
                                    </li>
                                    <li>
                                        <a href="search">contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="myaccount">
                            <div class="out_form">
                                <form action="/person" method="get">
                                <button type="submit" class="btn btn-outline-info" id="out_button">logout</button>
                                </form>
                            </div>
                            <div>
                                <img src="" alt="">
                            </div>
                            <div>
                                <h3 class="myaccount_name">{{ $name }}</h3>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <div class="mypage_head">
                <div>
                    <h1>your page</h1>
                </div>
                <div>
                <div class="totalchart">
                    <canvas id="mypage"></canvas>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
                var ctx = document.getElementById('mypage');
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: ['開放性', '神経症的傾向', '社交性', '勤勉性', '協調性'],
                        datasets: [{
                            label: '性格分析',
                            data:[22,11,21,13,11],
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



