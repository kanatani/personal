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
                                        <a href="{{ route('mypage') }}" >mypage</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('community') }}">community</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('search') }}">search</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('chat') }}" class="current">chat</a>
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
                                <img src="<?php echo $fileName; ?>" alt="" class="myaccount_img">
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
            <div class="row">
                <div class="top_chat">
                    <div class="your_info_region">
                        @if(isset( $groupinfo->community_name))
                        <h2 class="top_chat_name">{{ $groupinfo->community_name}}</h2>
                        <img src="{{ $groupinfo->community_image }}" alt="" class="your_chat_img">
                        @else
                        <h2 class="top_chat_name">{{ $yourinfo->name}}</h2>
                        <img src="{{ $yourinfo->image }}" alt="" class="your_chat_img">
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="talkroom">
                    <div ref='messageDisplay' id="MessageArea">
                        <ul class="messages" v-for="m in messages">
                            <li class="right-side" v-if="m.user_id == <?php echo $myid ;?>">
                                <div class="pic">
                                <img src="{{ $fileName }}" alt="" class="chat_img">
                                </div>
                                <div class="text">
                                <span v-text="m.message"></span>
                                </div>
                            </li>
                            <li class="left-side" v-else>
                                <div class="pic">
                                <img :src="m.user_image" alt="" class="chat_img">
                                </div>
                                <div class="text">
                            <span v-text="m.message"></span>
                            <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat_submit">
                        <input type="hidden" id="chatroom" name="chatroom" value="{{ $chatroomid }}">
                            <textarea  v-model="message"  name="chat_submit_text" class="" id="chat_submit_text" cols="30" rows="3"></textarea>
                            <button type="button" class="btn btn-outline-secondary" id="chat_submit_button" @click="send()">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/chatscroll.js') }}"></script>
@endsection
