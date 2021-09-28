@extends('layouts.app')

@section('content')

@if (count($posts))


<ul>
    @foreach($posts as $post)
    <li> <a target="_blank" href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
    @endforeach
</ul>


@endif

@section('footer')