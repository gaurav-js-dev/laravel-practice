@extends('layouts.app')

@section('content')

<h1>Contact Page</h1>

@if (count($people))

@foreach($people as $person)
<ul>
    <li>{{$person}}</li>
</ul>
@endforeach

@endif

@stop