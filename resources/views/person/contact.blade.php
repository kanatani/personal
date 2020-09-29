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
                <div class="hamburger_btn" v-on:click='ActiveBtn=!ActiveBtn'>
                    <span class="line line_01" v-vind:class="{'btn_line01':ActiveBtn}"></span>
                    <span class="line line_02" v-vind:class="{'btn_line02':ActiveBtn}"></span>
                    <span class="line line_03" v-vind:class="{'btn_line03':ActiveBtn}"></span>
                </div>
                <transition name="menu">
                    <div class="menu" v-show="ActiveBtn">
                        <ul>
                            <li><a href="">っき</a></li>
                            <li><a href="">っき</a></li>
                            <li><a href="">っき</a></li>
                            <li><a href="">っき</a></li>
                        </ul>
                    </div>
                </transition>
            </div>
        </div>
        
    </header>
  </div>
@endsection