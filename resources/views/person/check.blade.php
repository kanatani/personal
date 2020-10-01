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
        <div class="main_check">
            <div class="card">
                <h3>お問い合わせ内容確認</h3>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>内容{{ $data1['name'] }}</p>
                    <p>内容{{ $data1['mail'] }}</p>
                    <p>内容{{ $data1['content'] }}</p>
                    </blockquote>
                    <form action="/person/content_input" method="post">
                        <input type="hidden" name="name" value="{{ $data1['name'] }}">
                        <input type="hidden" name="mail" value="{{ $data1['mail'] }}">
                        <input type="hidden" name="content" value="{{ $data1['content'] }}">
                        <button type="button" onclick="history.back()" class="btn btn-primary">戻る</button>
                        <button type="submit" class="btn btn-info">Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection