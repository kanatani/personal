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
                                        <a href="{{ route('mypage') }}">mypage</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('community') }}" class="current">community</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('search') }}">search</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chat') }}">chat</a>
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
                                            <a href="mypage">mypage</a>
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
            <div class="row">
            </div>
            <div class="row">
                <div class="footer_title col-sm-12" id="footer_titles">
                    <p>© person 2020</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/jquery.bgswitcher.js') }}"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
@endsection