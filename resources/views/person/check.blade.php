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
                    <humburger-component></humburger-component>
                </div>
            </header>
        </div>
        <div class="main_check">
            <div class="main-check-title">
                <h1>お問い合わせ</h1>
            </div>
            <div class="card">
                <div class="card_title">
                    <h3>Content Check</h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <div class="check_detail">
                            <p class="check_detail_parts">お名前</p>
                            <p class="check_detail_answer">{{ $data1['name'] }}</p>
                        </div>
                        <div class="check_detail">
                            <p class="check_detail_parts">メールアドレス</p>
                            <p class="check_detail_answer">{{ $data1['mail'] }}</p>
                        </div>
                        <div class="check_detail">
                            <p class="check_detail_parts">お問い合わせ内容</p>
                            <p class="check_detail_answer">{{ $data1['content'] }}</p>
                        </div>
                    </blockquote>
                    <form action="/person/content_input" method="post">
                       @csrf
                        <input type="hidden" name="name" value="{{ $data1['name'] }}">
                        <input type="hidden" name="mail" value="{{ $data1['mail'] }}">
                        <input type="hidden" name="content" value="{{ $data1['content'] }}">
                        <button type="submit" class="btn btn-info w-50" id="content_submit">送信</button>
                        <br>
                        <button type="button" onclick="history.back()" class="btn btn-primary w-50" id="content_submit">戻る</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
          <footer class="test_footer">
            <nav class="footer_nav">
                <ul>
                    <li>
                        <a href=" {{ url('/person/test') }}">top</a>
                    </li>
                    <li>
                        <a href=" {{ url('/person/loguin') }}">sign up</a>
                    </li>
                    <li>
                        <a href="{{ url('/person/contact') }}">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
          </footer>
          <div class="footer_title col-sm-12" id="footer_titles">
              <p>© person 2020</p>
          </div>
        </div>
    </div>
</div>
@endsection