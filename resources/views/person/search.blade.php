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
                                        <a href="search">mypage</a>
                                    </li>
                                    <li>
                                        <a href="search">community</a>
                                    </li>
                                    <li>
                                        <a href="search" class="current">search</a>
                                    </li>
                                    <li>
                                        <a href="search">contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="myaccount">
                                <div class="out_form">
                                    <form action="/person" method="get">
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
                                                <a href="search">mypage</a>
                                            </li>
                                            <li>
                                                <a href="search">community</a>
                                            </li>
                                            <li>
                                                <a href="search">search</a>
                                            </li>
                                            <li>
                                                <a href="search">contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </transition>
                            </div>
                    </header>
                </div>
            </div>
            <div class="search_head">
                <div>
                    <h1>search</h1>
                    <div class="border_line"></div>
                    <div>
                        <h1>気になる人の性格を調べてみよう!</h1>
                        <p>検索機能を使って相手の性格を知ることができます。知りたいと思った相手のことを理解することができます.</p>
                        <p>試しに相手のuseridを使って検索してみましょう.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






