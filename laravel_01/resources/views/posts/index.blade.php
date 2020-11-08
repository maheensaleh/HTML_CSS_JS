@extends('layouts.base')

@section('body')
    
    @if (count($posts)>0)

        @foreach ($posts as $post)
            
            {{-- <div class="well">
                <strong>{{$post['title']}}</strong>
            <p>{{$post['body']}}</p>
            </div> --}}

        <a href="./post/{{$post['id']}}">
                <div class="well">
                    <strong>{{$post['title']}}</strong>
                <p>{{$post['body']}} </p>
                
                </div>
            </a>
        @endforeach

    @endif


@endsection


