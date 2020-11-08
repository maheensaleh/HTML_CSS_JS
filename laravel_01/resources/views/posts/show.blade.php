@extends('layouts.base')

@section('body')
    
<div class="well">
        <strong>{{$post['title']}}</strong>
    <p>{{$post['body']}}</p>
    <small>{{$post['author']}}</small>

    <br><br>
    <a href="./{{$post['id']}}/edit/"><button>edit</button></a>
    <br><br>
    <a href="./"><button>Back</button></a>
    <br><br>
    
<form method="POST" action="{{route("post.destroy",$post['id'])}}">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="DELETE">
    
    <button type="submit" >Delete</button>
</form>
</div>




@endsection


