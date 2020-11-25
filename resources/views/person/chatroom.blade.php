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
                                        <a href="mypage">mypage</a>
                                    </li>
                                    <li>
                                        <a href="search">community</a>
                                    </li>
                                    <li>
                                        <a href="search">search</a>
                                    </li>
                                    <li>
                                        <a href="chat" class="current">chat</a>
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
                                            <a href="person/mypage">mypage</a>
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
                <div class="top_chat">
                    <div class="your_info_region">
                        <h2 class="top_chat_name">{{ $yourname }}</h2>
                        <img src="/uploads/{{ $yourimage }}" alt="" class="your_chat_img">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="talkroom col-sm-12">
                   <div>
                       <div class="mytalk">
                           <div class="mytalk_image_space">
                                <img src="/uploads/{{ $yourimage }}" alt="" class="mytalk_img">
                           </div>
                           <div class="mytalk_space">
                            <div class=mytalk_text_space>
                                <p>例</p>
                            </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>  
@endsection