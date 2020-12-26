@extends('person/layout')
@section('content')
<body>
    <div class="container-fluid">
        <div id="app">
            <div class="row">
                <div  class="page_header">
                <header>
                        <div>
                            <div class="header_title login_header_title">
                                <h1>person</h1>
                            </div>
                            <nav id="global_navi">
                                <ul>
                                    <li>
                                        <a href="{{ route('mypage') }}" class="current">mypage</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('community') }}">community</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('search') }}">search</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chat') }}" >chat</a>
                                    </li>
                                </ul>
                            </nav>
                        <div class="myaccount">
                            <div class="out_form">
                                <form action="/person/logout" method="get">
                                <button type="submit" class="btn btn-outline-info" id="out_button">logout</button>
                                </form>
                            </div>
                            <div>
                                <h3 class="myaccount_name">{{ $name }}
                                <img src="/uploads/<?php echo $fileName; ?>" alt="" class="myaccount_img">
                                </h3>
                            </div>
                        </div>
                        <div class="responsive_navi">
                            <div :class="{'is-active':isActive}" class="btn-humburger" @click="toggleButton">
                                <div></div>
                                <div></div>
                            </div>
                            <transition name="navi">
                            <nav class="responsive" v-show="isActive">
                                    <ul>
                                        <li>
                                            <a href="{{ route('mypage') }}" >mypage</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('community') }}" >community</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('search') }}" >search</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('chat') }}" >chat</a>
                                        </li>
                                        <li>
                                        <form action="/person/logout" method="get">
                                        <button type="submit" class="btn btn-outline-info" id="out_button">logout</button>
                                        </form>
                                        </li>
                                    </ul>
                                </nav>
                            </transition>
                        </div>
                    </header>
                </div>
             </div>
            <div class="row make-community">
                <div class="col-sm-12">
                    <div class="make-community-title">
                        <h1>make community</h1>
                        <p>自分があったらいいなと思う様なグループを作ることができます。同じ分野に興味を持っている人達と仲間を作ってconnectionを構築していきましょう。</p>
                    </div>
                    <div class="border_line"></div>
                    <div class="make-community-content"> 
                        <form action="community" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="make-community-name">
                                <h3>カードタイトル</h3>
                                <input type="text" class="make-community-form" name="community_name"placeholder="コミュニティ名を入力" require>
                            </div>
                            <div class="make-community-image">
                                <image-component></image-component>
                            </div>
                            <div class="community-category">
                                <h3>カテゴリー選択</h3>
                                <select name="community_category" id="category">
                                    <option value="音楽">音楽</option>
                                    <option value="運動">運動</option>
                                    <option value="ゲーム">ゲーム</option>
                                    <option value="読書">読書</option>
                                    <option value="アウトドア">アウトドア</option>
                                    <option value="仕事">仕事</option>
                                </select>
                            </div>
                            <div class="make-button">
                                <button type="submit" class="btn btn-outline-info" id="community-button">コミュニティを作成</button>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
            <div class="row">
                <div class="footer_title col-sm-12" id="footer_titles">
                    <p>© person 2020</p>
                </div>
            </div>
        </div>
    </div>
@endsection






