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
            <div class="chat_header">
                <div class="chat_header_text">
                    <h1 class="chat_header_title">chatroom</h1>
                    <div class="border_line"></div>
                    <div class="chat">
                        <div class="chat_room">
                            @foreach ($chatrooms as $chatroom)
                            <?php $chatroomid = $chatroom->chatroom; ?>
                            @if(isset($chatroom->user_name))
                            <div class="chat_room_info">
                                <a href="chatroom/<?php echo $chatroomid; ?>" class="chat_room_enter">
                                    <img src="/uploads/<?php echo $chatroom->user_image; ?>" alt="" class="chat_room_img">
                                    <h4 class="chat_user_name">{{ $chatroom->user_name }}</h4>
                                </a>
                            </div>
                            @else
                            <div class="chat_room_info">
                                <a href="chatroom/<?php echo $chatroomid; ?>" class="chat_room_enter">
                                    <img src="/uploads/<?php echo $chatroom->community_image; ?>" alt="" class="chat_room_img">
                                    <h4 class="chat_user_name">{{ $chatroom->community_name }}</h4>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
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