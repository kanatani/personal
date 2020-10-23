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
            <div class="row serious">
                <div class="kindtest">
                    <div class="kindtest_title">
                        <h2>勤勉性テスト</h2>
                    </div>
                    <form action="/person/serious_result" method="post">
                    @csrf
                    <?php for($i = 1; $i<=6; $i++) { 
                        switch ($i) {
                            case 1:
                                $msg='1.自分は欲求や不満に強い方ですか?';
                                break;
                            case 2:
                                $msg='2.何かを始める時は計画を立ててからはじめますか?';
                                break;
                            case 3:
                                $msg='3.目標を達成することに喜びを感じますか?';
                                break;
                            case 4:
                                $msg='4.何事に対しても誠実に取り組むことを意識していますか?';
                                break;
                            case 5:
                                $msg='5.自分は人より真面目であると考えていますか?';
                                break;
                            case 6:
                                $msg='6.論理的に考えてコツコツと活動ができますか?';
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
                                $ms='7.いつも気分で物事を判断してしまいがちですか?';
                                break;
                            case 8:
                                $ms='8.物事を取り組むときに、考える前に行動してしまいますか?';
                                break;
                            case 9:
                                $ms='9.飽きっぽい性格ですか?';
                                break;
                            case 10:
                                $ms='10.複数のことを同時にやることは得意ですか?';
                                break;
                            case 11:
                                $ms='11.欲しいものがあった場合、すぐに手をつけますか?';
                                break;
                            case 12:
                                $ms='12.物事を続けるのは苦手ですか?';
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
                    <input type="hidden" name="serious" value="serious">
                    <input type="submit" class="btn btn-info w-50"  id="next-button" value="送信">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



