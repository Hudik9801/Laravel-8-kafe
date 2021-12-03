<!DOCTYPE html>
<html>
<head>
    <title>Laravel8kafej</title>
</head>
<body>

<h1>Welcome to laravel </h1>
<p>This is a paragraph.</p>
<br>
<a href="{{route('test',['id'=>12,'name'=>'Fatma'])}}">Test Sayfa</a>


</body>
</html>
@extends('layouts.home')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
