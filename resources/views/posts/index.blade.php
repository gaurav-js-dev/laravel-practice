@extends('layouts.app')

@section('content')



<ul>
    @foreach($posts as $post)
    <li> <a target="_blank" href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
    @endforeach
</ul>



@section('footer')