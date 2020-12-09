@extends('person/layout')
@section('content')
<body>
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
            <div class="row openness">
                <div class="kindtest">
                    <div class="kindtest_title">
                        <h2>開放性テスト</h2>
                    </div>
                    <form action="/person/openness_result" method="post">
                    @csrf
                    <?php for($i = 1; $i<=6; $i++) { 
                        switch ($i) {
                            case 1:
                                $msg='1.新しいことには敏感な方ですか?';
                                break;
                            case 2:
                                $msg='2.あらゆる分野の知識を知っていますか?';
                                break;
                            case 3:
                                $msg='3.既存の手段より新しい方法で物事を取組みますか?';
                                break;
                            case 4:
                                $msg='4.価値観を柔軟に変えることができますか?';
                                break;
                            case 5:
                                $msg='5.よく空想や想像に浸る事はありますか?';
                                break;
                            case 6:
                                $msg='6.芸術や音楽、想像的な物に興味を引かれますか?';
                                break;
                        }
                        ?>
                        <div class="kindtest_check">
                            <div class="kind_check_question">
                                <div class="kind_check_font">
                                    <h2><?php echo $msg ?></h2>
                                </div>
                                <div class="kind_check_list">
                                    <p>同意する</p>
                                    
                                    <input type="radio" class="checklist" name="q<?php echo $i ?>" value="5"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q<?php echo $i ?>" value="4"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q<?php echo $i ?>" value="3"　style="width:50px;height:50px;" 　checked/>
                                    <input type="radio" class="checklist" name="q<?php echo $i ?>" value="2"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q<?php echo $i ?>" value="1"　style="width:50px;height:50px;" >
                                    <p>同意しない</p>
                                </div>
                                <div class="testborder"></div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php for($a = 7; $a<=12; $a++) { 
                        switch ($a) {
                            case 7:
                                $ms='7.状況が変化すると戸惑ってしまいますか?';
                                break;
                            case 8:
                                $ms='8.他人がした事を真似るのは得意ですか?';
                                break;
                            case 9:
                                $ms='9.既存のルールで行動することは得意ですか?';
                                break;
                            case 10:
                                $ms='10.視野が狭くなってしまうことはありませんか?';
                                break;
                            case 11:
                                $ms='11.空想より論理の方が好きですか?';
                                break;
                            case 12:
                                $ms='12.新しいことに抵抗を感じることはありますか?';
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
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>" value="5"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="4"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="3"　style="width:50px;height:50px;" checked/>
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="2"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q<?php echo $a ?>"  value="1"　style="width:50px;height:50px;" >
                                    <p>同意しない</p>
                                </div>
                                <div class="testborder">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <input type="hidden" name="openness" value="openness">
                    <input type="submit" class="btn btn-info w-100"  id="next-button" value="送信">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



