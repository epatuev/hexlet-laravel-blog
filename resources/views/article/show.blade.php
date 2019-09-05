@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <a href="{{ url('/articles/'.$article->id.'/edit') }}">edit</a>
@endsection
