@extends('layouts.app')

@section('title', 'Modifica post')

@section('content')
    <div class="container">
        <form action="{{route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titolo:</label>
                <input type="text" class="form-control" id="title" name="title" value={{ $post->title}}>
            </div>
    
            <div class="form-group">
                <label for="text">Testo:</label>
                <input type="text" class="form-control" id="text" name="text" value={{ $post->text}}}>
            </div>
    
            <div class="form-group">
                <label for="author">Autore:</label>
                <input type="text" class="form-control" id="author" name="author" value={{ $post->author}}>
            </div>
    
            <div class="form-group">
                <label for="topic">Topic:</label>
                <input type="text" class="form-control" id="topic" name="topic" value={{ $post->topic}}>
            </div>
    
            <button type="submit" class="btn">Invio</button>
        </form>
    </div>
@endsection