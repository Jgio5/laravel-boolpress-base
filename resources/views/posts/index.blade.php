@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="container">
        <h1 class="title">Tutti i tuoi promemoria</h1>
        <div class="section-box">
            @foreach($posts as $post)
            <div class="box">
                <div class="title-post">
                    <h1>{{ $post['title']}}</h1>
                </div>
                <div class="text-post">
                    <p>{{ $post['text']}}</p>
                </div>
                <div class="info-post">
                    <p>{{ $post['author']}}</p>
                </div>
                <div class="mod-post">
                    <div class="dettagli mod">
                        <a href="{{ route('posts.show', ['post'=>$post->id]) }}">
                            <p>Dettagli</p>
                        </a>
                    </div>
                    <div class="modifica mod">
                        <a href="{{ route('posts.edit', ['post'=>$post->id]) }}">
                            <p>Modifica</p>
                        </a>
                    </div>
                    <div class="cancella mod">
                        {{-- @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif --}}
                        <form action="{{ route('posts.destroy', ['post' =>$post->id])}}" method = "post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Cancella</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection