@extends('person/layout')
@section('content')
<body>
    <div class="container-fluid">
        <div id="app">
          <div class="enter_main">      
              <div class="sign_main" v-if="Loginactive">
                  <h2>sign up</h2>
                  <form  action="/person/top" method="post">
                  @csrf
                        <div class="form-group">
                            <p class="form_text">name</p>
                            <input type="text" name="login_name" class="login_name" placeholder="&#xf007; yourname">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
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
                   <button @click="good" class="btn btn-outline-info w-50">login</button>                 
              </div>
              <div class="login_main" v-else>
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
@endsection



