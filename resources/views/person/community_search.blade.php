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
            <div class="look-group">
                <div class="community-search">
                    <form action="{{ route('community_search') }}" method="get" id="community-form">
                        <input type="text" class="community-word" name="community_search" placeholder="&#xf002; ">
                        <button type="submit" class="btn btn-outline-info" id="community-search-button">検索</button>
                    </form>
                </div>
                <div class="look-group-list">
                   <div class="look-group-list-detail">
                       <ul class="look-group-list-link">
                       @foreach($lookgroup as $lookgroups)
                        <li>
                            <a href="group_detail/<?php echo $lookgroups->groupid; ?>">
                                <img class="group-detail-community-image" src="/uploads/{{ $lookgroups->image }}" alt="">
                                <br>
                                {{ $lookgroups->name }}
                                <br>
                                メンバー:{{ $lookgroups->member }}人
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