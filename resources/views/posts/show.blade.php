@extends('layouts.app')

@section('title', 'Dettagli post')

@section('content')
    <div class="container">
        <h1>Dettagli del singolo post-it</h1>
        <div class="show-post">
            <p>Titolo: {{ $post['title']}}.</p>
            <p>Descrizione: {{ $post['text']}}</p>
            <p>Topic: {{ $post['topic']}}.</p>
            <p>Autore: {{ $post['author']}}</p>
        </div>
    </div>
@endsection