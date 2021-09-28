@extends('layouts.app')

@section('content')

@if (($post))

<h1>{{$post->title}}</h1>
<a href="{{route('posts.edit', $post->id)}}">Edit</a>
<p>{{$post->content}}</p>
@endif

@section('footer')