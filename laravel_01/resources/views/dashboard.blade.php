@extends('layouts.base')

@section('body')
<h2>dashboard</h2>
  
<h3>{{$details}}</h3>

@if (count($names)>0)

    <ul>
        @foreach ($names as $item)
        <li>{{$item}}</li>        
        @endforeach
    </ul>

@endif


@endsection

