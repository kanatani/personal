@extends('person/layout')
@section('content')
<body>
  <div class="container-fluid">
    <header>
        <div>
            <div class="header_title">
                <h1>person</h1>
            </div>
            <div id="app">
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
        </div>
        
    </header>
  </div>
@endsection