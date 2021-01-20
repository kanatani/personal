@extends('person/layout')
@section('content')
<body>
    <div class="container-fluid">
        <div id="app">
            <div class="row fixed-top">
                    <header class="content_head">
                        <div>
                            <div class="header_title">
                                <h1>person</h1>
                            </div>
                            <humburger-component></humburger-component>
                        </div>
                    </header>
                </div>
                <div class="user-top-page">
                    <div class="newuser">
                        <div>
                            <h1>プロフィール作成</h1>
                        </div>
                        <form action="/person/newmypage" method="post" class="new_form" enctype="multipart/form-data">
                        @csrf
                            <div class="top-self-introduction">
                                <h2>self-introduction</h2>
                            </div>
                            @if (session('image_message'))
                            <div class="flash_message">
                                {{ session('image_message') }}
                            </div>
                            @endif
                            <div class="top-image">
                                <image-component></image-component>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">free space</label>
                                <textarea class="form-control" id="self-introduction" rows="2" name="self-introduction" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-info w-25" id="new_submit">mypage!</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection






