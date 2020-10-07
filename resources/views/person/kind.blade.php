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
                    <form action="">
                        <div class="kindtest_check">
                            <div class="kind_check_question">
                                <div class="kind_check_font">
                                    <h2>1.他人を助けるのが得意ですか?</h2>
                                </div>
                                <div class="kind_check_list">
                                    <p>同意する</p>
                                    <input type="radio" class="checklist" name="q1" value="1"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q1" value="1"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q1" value="1"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q1" value="1"　style="width:50px;height:50px;" >
                                    <input type="radio" class="checklist" name="q1" value="1"　style="width:50px;height:50px;" >
                                    <p>同意しない</p>
                                </div>
                                <div class="testborder"></div>
                            </div>
                            <div class="kind_check_question">
                                <div class="kind_check_font">
                                    <h2>1.他人を助けるのが得意ですか?</h2>
                                </div>
                                <div class="kind_check_list">
                                    <p>同意する</p>
                                    <input type="radio" class="checklist" name="q1" value="1">
                                    <input type="radio" class="checklist" name="q1" value="1">
                                    <input type="radio" class="checklist" name="q1" value="1">
                                    <input type="radio" class="checklist" name="q1" value="1">
                                    <input type="radio" class="checklist" name="q1" value="1">
                                    <p>同意しない</p>
                                </div>
                                <div class="testborder"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection



