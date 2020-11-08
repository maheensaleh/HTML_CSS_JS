@extends('layouts.base')

@section('body')

    <div class="well">

    <form method="post" action="{{route('post.store')}}">
        
        {{ csrf_field() }}

        <label >Title</label>
        <input type="text" name="title">

        <label >Post</label>
        <input type="textarea" name="body">

        <label >Author</label>
        <input type="text" name="author">

        <input type="submit" name="submit">
    </form>
    </div>

@endsection


