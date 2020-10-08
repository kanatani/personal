@extends('person/layout')
@section('content')
<body>
    <?php 
        $high = $kind['q1'] + $kind['q2']+ $kind['q3']+ $kind['q4']+ $kind['q5']+ $kind['q6'];
        $row = $kind['q7'] + $kind['q8']+ $kind['q9']+ $kind['q10']+ $kind['q11']+ $kind['q12'];
        $sum = $high - $row;

        switch ($sum) {
            case $sum < 17;
                $msg= ok;
                break;
            case $sum < 16 && $sum > 8;
                $msg= ok;
                break;
            case $sum < 20;
                $msg= ok;
                break;
            case $sum < 20;
                $msg= ok;
                break;
            case $sum < 20;
                $msg= ok;
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
            <div class="kind_result">
                <div class="kind_bigcontent">
                    <img src="" alt="">
                    <p></p>
                    <p></p>
                </div>
                <div class="kind_detail">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
@endsection



