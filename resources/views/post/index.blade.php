@extends('base')
@section('title') Inicio @endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>{{"ID"}}</th>
                <th>{{"TITLE"}}</th>
                <th>{{"AUTHOR"}}</th>
                <th>{{"ACCIONES"}}</th>
            </tr>
        </thead>
        <tbody>
            @if (count($posts) >=1)
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row"> {{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->author}}</td>
                        <td> editar | borrar </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td scope="row"> {{"no encuentro resultados"}}</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection