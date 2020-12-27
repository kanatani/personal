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
            <div class="group-detail">
                <div class="group-detail-info">
                    <div class="group-detail-info-title">
                        <h2>{{ $communities->name }}</h2>
                    </div>
                    <div class="group-detail-info-list">
                        <img class="group-detail-info-image" src="/uploads/{{ $communities->image }}" alt="">
                    </div>
                    <div class="group-detail-info-detail">
                        <p>カテゴリー:{{ $communities->category }}</p>
                        <p>メンバー:{{ $communities->member }}人</p>
                    </div>
                    <div class="group-detail-info-like">
                        <input type="hidden" name="grouplike" id="grouplike" value="{{ $communities->groupid }}">
                        @if(!isset($mygroupjoin))
                        <button  type="button" class="btn btn-outline-info" id="group-detail-info-button" @click="join" >参加する!</button>
                        @else
                        <button type="button" class="btn btn-outline-info" id="group-detail-info-button" @click="join" >解除する!</button>
                        @endif
                    </div>
                </div>
                <div class="group-detail-border">
                    <div class="border_line"></div>
                </div>
                <div class="group-detail-member-list">
                    <div class="group-detail-member">
                        <ul class="group-detail-member-info">
                        @foreach ($communitymember as $communitymembers)
                        <li>
                            <a href="/person/user/{{ $communitymembers->user_id }}" >
                                <img class="group-detail-member-image" src="/uploads/{{ $communitymembers->image }}" alt="">
                                <br>
                                {{ $communitymembers->name }}
                            </a>
                        </li>
                        @endforeach
                        </ul>
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