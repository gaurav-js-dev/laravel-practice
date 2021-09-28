@extends('layouts.app')

@section('content')

<h1>Create a Post</h1>

<form method="POST" action="/posts">
    @csrf
    <input type="text" name="title" placeholder="Enter Title">
    <button type="submit" name="submit">Submit</button>
</form>

@section('footer')