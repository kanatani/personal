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
                <div class="card_title">
                    <h3>Content Check</h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <div class="check_detail">
                            <p class="check_detail_parts">お名前</p>
                            <p>{{ $data1['name'] }}</p>
                        </div>
                        <div class="check_detail">
                            <p class="check_detail_parts">メールアドレス</p>
                            <p>{{ $data1['mail'] }}</p>
                        </div>
                        <div class="check_detail">
                            <p class="check_detail_parts">お問い合わせ内容</p>
                            <p>{{ $data1['content'] }}</p>
                        </div>
                    </blockquote>
                    <form action="/person/content_input" method="post">
                       @csrf
                        <input type="hidden" name="name" value="{{ $data1['name'] }}">
                        <input type="hidden" name="mail" value="{{ $data1['mail'] }}">
                        <input type="hidden" name="content" value="{{ $data1['content'] }}">
                        <button type="button" onclick="history.back()" class="btn btn-primary w-50" id="content_submit">戻る</button>
                        <br>
                        <button type="submit" class="btn btn-info w-50" id="content_submit">送信</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection