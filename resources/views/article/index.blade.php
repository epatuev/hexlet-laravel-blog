@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <div>
        <table>
            <thead>
            <tr>
                <td><a href="{{ route('articles.create') }}">create</a></td>
                <td>ID</td>
                <td>Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td><a href="{{ url('/articles/'.$article->id.'/edit') }}">edit</a></td>
                    <td>{{$article->id}}</td>
                    <td><a href="{{ url('/articles/'.$article->id) }}">{{$article->name}}</a></td>
                    <td><a href="{{ url('/articles/'.$article->id) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$articles->links()}}

        <div>
@endsection
