@extends('layouts.base')

@section('body')
<div class="well">
<form method="POST" action="{{route('post.update',$post['id'])}}">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <label >Title</label>
    <input type="text" name="title" value="{{$post['title']}}">

    <label >Post</label>
    <input type="textarea" name="body" value="{{$post['body']}}">

    <label >Author</label>
    <input type="text" name="author" value="{{$post['author']}}">

    <input type="submit" name="submit">
    </form>

    <a href="./"><button>Cancel</button></a>

    
</div>




@endsection


