@extends('layouts.app')

@section('content')
    <h1>Mostrando datos de la db</h1>
    <table class="table">
        <thead>
            <th>id</th>
            <th>titulo</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection