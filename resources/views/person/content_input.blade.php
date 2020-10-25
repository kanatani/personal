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
        <div class="row thank_page">
            <div class="jumbotron col-sm-12">
                <h1 class="display-4 thanks_title">Thank you!</h1>
                <p class="lead">ご意見ありがとうございます。本アプリの改善に向けて全力で取り組んでいきます。</p>
                <hr class="my-4">
                <p>Thank you for submitnig your opinion. In order to your opition,This application will be changed for gest including you.</p>
                <a class="btn btn-primary btn-lg" href="/person" role="button">トップページ</a>
            </div>
        </div>
    </div>
</div>
@endsection