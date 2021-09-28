@extends('layouts.app')

@section('content')

<h1>Edit a Post</h1>

<form method="POST" action="/posts/{{$post->id}}">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <input value="{{$post->title}}" type="text" name="title" placeholder="Enter Title">
    <button value="UPDATE" type="submit" name="submit">Submit</button>
</form>

<form method="POST" action="/posts/{{$post->id}}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="submit" value="DELETE">

</form>

@section('footer')