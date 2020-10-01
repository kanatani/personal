@extends('person/layout')
@section('content')
<body>
<div class="container-fluid">
    <div id="app">
        <p>内容{{ $data1['name'] }}</p>
        <p>内容{{ $data1['mail'] }}</p>
    </div>
</div>
@endsection