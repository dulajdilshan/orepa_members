@extends('layouts.app')

@section('title','Page Title')

@section('sidebar')
    @parent
    <h1>{{$title}}</h1>
    <p>This is appended to the master sidebar</p>
@endsection


@section('content')
    <p>This is my body content</P>
@endsection