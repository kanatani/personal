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
                <div :class="{'is-active: isActive}" class="btn-humburger" @click="toggleButton"></div>
                <div></div>
                <div></div>
            </div>
        </div>
        
    </header>
  </div>
@endsection