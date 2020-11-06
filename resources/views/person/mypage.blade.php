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
                        <div class="responsive_navi">
                            <div :class="{'is-active':isActive}" class="btn-humburger" @click="toggleButton">
                                <div></div>
                                <div></div>
                            </div>
                            <transition name="navi">
                            <nav class="navi" v-show="isActive">
                                    <ul>
                                        <li>
                                            <a href="search">mypage</a>
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
                            </transition>
                        </div>
                    </header>
                </div>
            </div>
            <div>
                <div class="mypage_head">
                    <div>
                        <h1 class="your_page">your page</h1>
                    </div>
                    <div>
                        <div class="mypage_type">
                            <div class="extraversion_mypage personal_mypage">
                                <h3>外交生</h3>
                                <p>外交タイプ</p>
                            </div>
                            <div class="kind_mypage personal_mypage">
                                <h3>協調性</h3>
                                <p>外交タイプ</p>
                            </div>
                            <div class="serious_mypage personal_mypage">
                                <h3>勤勉性</h3>
                                <p>外交タイプ</p>
                            </div>
                            <div class="openness_mypage personal_mypage">
                                <h3>開放性</h3>
                                <p>外交タイプ</p>
                            </div>
                            <div class="neuroticism_mypage personal_mypage">
                                <h3>神経症的傾向</h3>
                                <p>外交タイプ</p>
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
                        外交生
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <form action="">
                            <button type="button" class="btn btn-outline-danger w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="kind_subpage">
                        協調性
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <form action="">
                            <button type="button" class="btn btn-outline-warning w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="serious_subpage">
                        勤勉性
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <form action="">
                            <button type="button" class="btn btn-outline-info w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="openness_subpage">
                        開放性
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <form action="">
                          <button type="button" class="btn btn-outline-success w-25">sub detail</button>
                        </form>
                    </div>
                </div>
                <div class="card text-center" id="sub_mypage">
                    <div class="card-header" id="neuroticism_subpage">
                        神経症的傾向
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <form action="">
                        <button type="button" class="btn btn-outline-dark w-25" id="neuroticism_button">sub detail</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/mypage.js') }}"></script>
    
@endsection



