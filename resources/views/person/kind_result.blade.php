@extends('person/layout')
@section('content')
<body>
    <div class="container-fluid">
        <div id="app">
        <p>内容{{ $kind['q1'] }}</p>
        <p>内容{{ $kind['q2'] }}</p>
        </div>
    </div>
@endsection



