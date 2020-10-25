@extends('person/layout')
@section('content')
<body>
<div class="container-fluid">
  <div id="app">
    <div class="row fixed-top">
        <header class="content_head col-sm-12">
            <div>
                <div class="header_title">
                    <h1>person</h1>
                </div>
                    <div :class="{'is-active':isActive}" class="btn-humburger" @click="toggleButton">
                        <div></div>
                        <div></div>
                    </div>
                    <transition name="navi">
                    <nav class="navi" v-show="isActive">
                            <ul>
                                <li><a href="">トップページ</a></li>
                                <li><a href="">お問い合わせ</a></li>
                                <li><a href="">ログイン</a></li>
                            </ul>
                        </nav>
                    </transition>
            </div>
        </header>
    </div>
    <div class="content">
        <div class="content_title">
            <div class="row">
                <div class="jumbotron jumbotron-fluid col-sm-12">
                    <div class="container">
                        <h2 class="display-4 content_message_title">お問い合わせ</h2>
                        <p class="lead content_message">こちらのアプリに関してのご質問、ご意見やご感想を気軽にお伝えください。頂いたご意見はこれからのアプリ開発の参考とさせていただきます。ご協力の程、よろしくお願いします。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content_input">
        <div class="input_title">
            <h2>お問い合わせ入力</h2>
        </div>
        <form class="content_form" action="/person/check" method="post">
            @csrf
             <div class="form-group">
                <label for="simei">name</label>
                <input v-model="name" class="form-control" id="simei" name="name"  type="text" placeholder="name">
                <p v-if="isInValidName">名前を入力してください</p>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input v-model="email" type="email" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="email@example.com">
                <p v-if="isInValidEmail">メールアドレスを入力してください</p>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content"  rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-25" id="contact_submit">Submit</button>
        </form>
    </div>
    <div class="row">
        <footer class="test_footer col-sm-12">
            <p>© person 2020</p>
        </footer>
    </div>
  </div>
</div>
@endsection