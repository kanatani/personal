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
                                            <li><a href=" {{ url('/person') }} ">トップページ</a></li>
                                            <li><a href="">お問い合わせ</a></li>
                                            <li><a href="">ログイン</a></li>
                                        </ul>
                                    </nav>
                                </transition>
                        </div>
                    </header>
                </div>
                <div>
                    <div class="newuser">
                        <div>
                            <h1>プロフィール作成</h1>
                        </div>
                        <form action="/person/mypage" method="post" class="new_form">
                        @csrf
                            <image-component></image-component>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">free space</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-info w-25" id="new_submit">mypage!</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <script>

    </script>
@endsection






