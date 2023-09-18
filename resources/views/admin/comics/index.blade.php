@extends('layouts.layout')

@section('page-title', 'singleComics')

@section('main-content')
    <div class="row p-4">
        @foreach ($comics as $comic)
            
            <div class="col-4 border rounded-4 p-3 bg-danger">
                <h3 class="text-warning">{{$comic->title}}</h3>
                <img class="img-fluid  w-50" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <h5>{{$comic->series}}</h5>
                <h5>{{$comic->description}}</h5>
                <h5 class="fw-bold">{{$comic->price}}€</h5>
                <h5>{{$comic->sale_date}}</h5>

            </div>

        @endforeach
    </div>
@endsection