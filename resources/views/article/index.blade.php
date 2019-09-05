@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <div>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td><a href="{{ url('/articles/'.$article->id) }}">{{$article->name}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$articles->links()}}

        <a href="{{ route('articles.create') }}">Create article</a>

        <div>
@endsection
