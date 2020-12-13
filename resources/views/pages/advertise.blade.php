@extends('layouts.app')
   
   @section('content')
     <h1>{{$title ?? '', 'You'}}</h1>
    @if(count($author)>0)
    <ul>
    @foreach($author as $author)
    <li>{{$author}}</li>
    @endforeach
    </ul>
    @endif
        @endsection
    