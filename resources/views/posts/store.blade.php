@extends('layouts.app')

@section('title', 'Inserimento nuovo promemoria')

@section('content')

        <form action="{{route('posts.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="title">Titolo:</label>
              <input type="text" class="form-control" id="title" name="title" value={{ old('title')}}>
            </div>

            <div class="form-group">
                <label for="text">Testo:</label>
                <input type="text" class="form-control" id="text" name="text" value={{ old('text')}}>
            </div>

            <div class="form-group">
                <label for="author">Autore:</label>
                <input type="text" class="form-control" id="author" name="author" value={{ old('author')}}>
            </div>

            <div class="form-group">
                <label for="topic">Topic:</label>
                <input type="text" class="form-control" id="topic" name="topic" value={{ old('topic')}}>
            </div>

            <button type="submit" class="btn">Invio</button>
        </form>
    </div>
@endsection