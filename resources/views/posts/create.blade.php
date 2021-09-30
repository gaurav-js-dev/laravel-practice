@extends('layouts.app')

@section('content')

<h1>Create a Post</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\PostsController@store', 'files'=> true]) !!}

<div class="form-group">
    {!! Form::file('file',null,['class'=>'form-control']) !!}
</div>



<div class="form-group">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

{!! Form::submit('Create Post',['class'=>'btn-primary']) !!}

</form>

@section('footer')