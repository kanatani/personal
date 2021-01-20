@extends('person/layout')
@section('content')
<body>
    <div class="container-fluid">
        <div id="app">
            <div class="row">
                <div class="login_parent">
                    <div class="enter_sub">
                        <div class="sub-left-message">
                            <h2>If you have not started big5 test,lets start big5 test.</h2>
                            <br>
                            <h2>So you can get the application service.</h2>
                            <form action="/person/test" method="get">
                                <button type="submit" class="btn  btn-outline-dark w-50" id="login-test-button">test</button>
                            </form>
                        </div>
                    </div>
                    <div class="enter_main">      
                        <div class="sign_main" v-if="Loginactive">
                        @if (session('flash_message'))
                            <div class="flash_message">
                                {{ session('flash_message') }}
                            </div>
                        @elseif (session('no_message'))
                            <div class="flash_message">
                                {{ session('no_message') }}
                            </div>
                        @elseif (session('test_message'))
                            <div class="flash_message">
                                {{ session('test_message') }}
                                <form action="/person/test" method="get">
                                <button type="submit" class="btn btn-outline-info w-50" id="loguin-flash-button">test</button>
                            </form>
                            </div>
                        @endif
                            <div>
                                <h1 class="login-title"><a href="/person">person</a></h1>
                            </div>
                            <br>
                            <h2>sign up</h2>
                            <form  action="/person/top" method="post">
                            @csrf
                                    <div class="form-group">
                                        <p class="form_text">name</p>
                                        <input type="text" name="login_name" class="login_name" placeholder="&#xf007; yourname" require>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <p class="form_text">email</p>
                                        <input type="email" name="login_mail" class="login_mail" placeholder="&#xf0e0; your@emal" require>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <p class="form_text">password</p>
                                        <input type="password" name="login_pass" class="login_pass" placeholder="&#xf3c1; password" require>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-50">Submit</button>
                            </form> 
                            <button @click="good" class="btn btn-outline-info w-50">login</button>                 
                        </div>
                        <div class="login_main" v-else>
                            <div>
                                <h1 class="login-title"><a href="/person">person</a></h1>
                            </div>
                            <h2>login</h2>
                            <form  action="/person/mypage" method="post">
                            @csrf
                                    <div class="form-group">
                                        <p class="form_text">email</p>
                                        <input type="email" name="login_mail" class="login_mail" placeholder="&#xf0e0; your@emal">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <p class="form_text">password</p>
                                        <input type="password" name="login_pass" class="login_pass" placeholder="&#xf3c1; password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-50">Submit</button>
                            </form>      
                            <button @click="good" class="btn btn-outline-info w-50">sign up</button>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



