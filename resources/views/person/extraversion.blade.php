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
            <div class="extraversion col-sm-12">
                <div class="kindtest">
                    <div class="kindtest_title">
                        <h2>社交性テスト</h2>
                    </div>
                    <form action="/person/extraversion_result" method="post">
                    @csrf
                    <?php for($i = 1; $i<=6; $i++) { 
                        switch ($i) {
                            case 1:
                                $msg='1.他人と関わるのは好きですか?';
                                break;
                            case 2:
                                $msg='2.学校では目立った存在であったと思いますか?';
                                break;
                            case 3:
                                $msg='3.普段から楽観的に考えますか?';
                                break;
                            case 4:
                                $msg='4.外に出ないとすぐに退屈になりますか?';
                                break;
                            case 5:
                                $msg='5.パーティなどの多くの人が集まる場所は好きですか?';
                                break;
                            case 6:
                                $msg='6.ブランドや権力に興味がありますか?';
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
                                $ms='7.周りから大人しいと言われますか?';
                                break;
                            case 8:
                                $ms='8.他人と衝突するのを極力避けますか？';
                            case 9:
                                $ms='9.少数の人たちと仲良くなりたいですか?';
                                break;
                            case 10:
                                $ms='10.興味がある分野に対しては徹底的に突き詰めますか?';
                                break;
                            case 11:
                                $ms='11.休日は何も予定を入れずに家に過ごしますか?';
                                break;
                            case 12:
                                $ms='12.人に聞くより本から学ぶことが多いですか?';
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
                    <input type="hidden" name="extraversion" value="extraversion">
                    <input type="submit" class="btn btn-info w-50"  id="next-button" value="送信">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection



