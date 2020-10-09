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
            <div class="row kind">
                <div class="kindtest">
                    <div class="kindtest_title">
                        <h2>協調性テスト</h2>
                    </div>
                    <form action="/person/kind_result" method="post">
                    @csrf
                    <?php for($i = 1; $i<=6; $i++) { 
                        switch ($i) {
                            case 1:
                                $msg='1.相手を助けるのは得意ですか?';
                                break;
                            case 2:
                                $msg='2.いつも利他意識を持って行動してますか?';
                                break;
                            case 3:
                                $msg='3.自分の意見よりチームの意見を優先しますか?';
                                break;
                            case 4:
                                $msg='4.周りから優しいとよく言われるか?';
                                break;
                            case 5:
                                $msg='5.他人に嘘を着くのに罪悪感がわく?';
                                break;
                            case 6:
                                $msg='6.競争心を持たない方ですか?';
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
                                $ms='7.自分意見を何よりも大事にしていますか?';
                                break;
                            case 8:
                                $ms='8.他人よりも違うことをしたいと思いますか?';
                                break;
                            case 9:
                                $ms='9.よく独自性があるねと言われますか??';
                                break;
                            case 10:
                                $ms='10.必要な場合、嘘を着くとこができますか?';
                                break;
                            case 11:
                                $ms='11.他人にお願いされてから初めて人を助けますか?';
                                break;
                            case 12:
                                $ms='12.他人を信頼するのに少し考えますか??';
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
                                <div class="testborder"></div>
                            </div>
                        </div>
                    <?php } ?>
                    <input type="submit" class="btn btn-info w-50"  id="next-button" value="送信">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



