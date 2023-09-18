@extends('layouts.layout')

@section('page-title', 'home')

@section('main-content')
<div class="container bg-success ">
    <div class="row p-4">
        @foreach ($comics as $comic)
            
            <div class="col-4 border rounded-4 p-3 bg-danger">
                <h3 class="text-warning">{{$comic->title}}</h3>
                <img class="img-fluid  w-50" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <h5>{{$comic->series}}</h5>
                <h5>{{$comic->description}}</h5>
                <h5 class="fw-bold">{{$comic->price}}€</h5>
                <h5>{{$comic->sale_date}}</h5>
                <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id])}}"> click me </a>
                <a class="btn btn-success" href="{{ route('comics.create')}}"> form me </a>
            </div>

            @endforeach
        </div>
            {{-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
            <form class="d-flex flex-column" method="POST" action="{{ route('comics.store') }}">
                @csrf <!-- Token CSRF per la protezione -->
                
                <label for="title">Titolo:</label>
                <input type="text" name="title" id="title" required>
                
                <label for="description">Descrizione:</label>
                <textarea name="description" id="description" required></textarea>
                
                <label for="thumb">URL dell'immagine:</label>
                <input type="text" name="thumb" id="thumb" required>
                
                <label for="price">Prezzo:</label>
                <input type="number" name="price" id="price" step="0.01" required>
                
                <label for="series">Serie:</label>
                <input type="text" name="series" id="series" required>
                
                <label for="sale_date">Data di vendita:</label>
                <input type="date" name="sale_date" id="sale_date" required>
                
                <label for="artists">Artisti (separati da virgola):</label>
                <input type="text" name="artists" id="artists" required>
                
                <label for="writers">Sceneggiatori (separati da virgola):</label>
                <input type="text" name="writers" id="writers" required>
                
                <button type="submit">Invia</button>
            </form> --}}
    </div>
    
@endsection