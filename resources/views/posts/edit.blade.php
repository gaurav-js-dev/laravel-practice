@extends('layouts.app')

@section('content')

<h1>Edit a Post</h1>

<form method="POST" action="/posts/{{$post->id}}">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <input value="{{$post->title}}" type="text" name="title" placeholder="Enter Title">
    <button type="submit" name="submit">Submit</button>
</form>

@section('footer')