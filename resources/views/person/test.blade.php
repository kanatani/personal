@extends('person/layout')
@section('content')
<body>
    <div class="container-fluid">
        <div id="app">
            <div class="row fixed-top">
                <header class="test_head col-sm-12">
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
                                        <li><a href="{{ url('/person/') }}">トップページ</a></li>
                                        <li><a href="{{ url('/person/contact') }}">お問い合わせ</a></li>
                                        <li><a href="">ログイン</a></li>
                                    </ul>
                                </nav>
                            </transition>
                    </div>
                </header>
            </div>
            <div class="row test_message">
                <div class="test_title">
                    <h1>無料診断テスト</h1>
                </div>
                <div class="test_detail">
                    <div class="test_boxes">
                        <div class="test_box">
                            <div class="icon_text">
                                <i class="fab fa-facebook-messenger fa-4x"></i>
                                <p>できるだけ率直に答えてください</p>
                            </div>
                        </div>
                        <div class="test_box">
                            <div  class="icon_text">
                                <i class="fas fa-user-circle  fa-4x"></i>
                                <p>自分の直感で決めてもらっても大丈夫です</p>
                            </div>
                        </div>
                        <div class="test_box">
                            <div  class="icon_text">
                                <i class="fas fa-times-circle  fa-4x"></i>
                                <p>できるだけ中立の答えはやめましょう</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



