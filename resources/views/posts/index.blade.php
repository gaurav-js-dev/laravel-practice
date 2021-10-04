@extends('layouts.app')

@section('content')



<ul>
    @foreach($posts as $post)
    <div class="image-container">
        <img src="{{$post->path}}" height="100" alt="">
    </div>
    <li> <a target="_blank" href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
    @endforeach
</ul>



@section('footer')