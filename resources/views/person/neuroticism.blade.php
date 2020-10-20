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
            <div class="row">
            <div class="neuroticism col-sm-12">
                <div class="kindtest">
                    <div class="kindtest_title">
                        <h2>神経症的傾向テスト</h2>
                    </div>
                    <form action="/person/neuroticism_result" method="post">
                    @csrf
                    <?php for($i = 1; $i<=6; $i++) { 
                        switch ($i) {
                            case 1:
                                $msg='1.悪い出来事が起こるとそのことをずっと考えますか?';
                                break;
                            case 2:
                                $msg='2.新しい環境にいくと不安を感じますか?';
                                break;
                            case 3:
                                $msg='3.嫌なことがあった時、感情が落ち着かないですか?';
                                break;
                            case 4:
                                $msg='4.敵意をぶつけられると自分もそれに答えてしまいますか?';
                                break;
                            case 5:
                                $msg='5.ソワソワしてしまうことがありますか?';
                                break;
                            case 6:
                                $msg='6.落ち込みが長く継続することがありますか?';
                                break;
                        }
                        ?>
                        <div class="row">
                        <div class="kindtest_check col-sm-12">
                            <div class="kind_check_question col-sm-12">
                                <div class="kind_check_font">
                                    <h2><?php echo $msg ?></h2>
                                </div>
                                <div class="kind_check_list">
                                    <p>同意する</p>
                                    <div class="check">
                                        <input type="radio" class="checklist" name="q<?php echo $i ?>" value="5">
                                        <input type="radio" class="checklist" name="q<?php echo $i ?>" value="4">
                                        <input type="radio" class="checklist" name="q<?php echo $i ?>" value="3"　checked/>
                                        <input type="radio" class="checklist" name="q<?php echo $i ?>" value="2">
                                        <input type="radio" class="checklist" name="q<?php echo $i ?>" value="1">
                                    </div>
                                    <p>同意しない</p>
                                </div>
                                <div class="testborder"></div>
                            </div>
                        </div>
                        </div>
                    <?php } ?>
                    <?php for($a = 7; $a<=12; $a++) { 
                        switch ($a) {
                            case 7:
                                $ms='7.何を言われても動じないですか?';
                                break;
                            case 8:
                                $ms='8.あまり過去の失敗を思い返さないですか?';
                                break;
                            case 9:
                                $ms='9.落ち込むことは滅多にないですか?';
                                break;
                            case 10:
                                $ms='10.嫌な出来事は次の日には忘れてますか?';
                                break;
                            case 11:
                                $ms='11.未来に対する心配があまりない?';
                                break;
                            case 12:
                                $ms='12.ストレスを感じてもあまり抱え込まないですか?';
                                break;
                        }
                        ?>
                        <div class="kindtest_check">
                            <div class="kind_check_question">
                                <div class="kind_check_font">
                                    <h2><?php echo $ms; ?></h2>
                                </div>
                                <div class="kind_check_list">
                                    <p>同意する</p>
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>" value="5">
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="4">
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="3"checked/>
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="2">
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="1">
                                    <p>同意しない</p>
                                </div>
                                <div class="testborder">

                                
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <input type="hidden" name="neuroticism" value="neuroticism">
                    <input type="submit" class="btn btn-info w-50"  id="next-button" value="送信">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection



