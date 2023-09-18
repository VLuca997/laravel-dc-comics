@extends('layouts.layout')

@section('page-title', 'nuovo comic')

@section('main-content')


<div class="container">

    <form class="bg-success text-center" action="{{route('comics.store')}}" method="POST">
        
        @csrf  {{-- TOKEN LARAVEL --}}

        {{-- @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach

                </ul>
            </div>
        @endif --}}
    
        <div class="mb-3">
            <label for="thumb" class="form-label">images</label>
            <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" placeholder="" value="{{old('thumb')}}" required>
            @error('thumb')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input name="title"  type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="" value="{{old('title')}}" required>
            @error('title')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
    
        
    
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series" placeholder="" value="{{old('series')}}" required>
            @error('series')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder=""value="{{old('price')}}" required>
            @error('price')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="date" class="form-label">date</label>
            <input name="date" type="text" class="form-control @error('date') is-invalid @enderror" id="date" placeholder=""value="{{old('date')}}" required>
            @error('date')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="artists" class="form-label">artists</label>
            <input name="artists" type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" placeholder=""value="{{old('artists')}}" required>
            @error('artists')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="writers" class="form-label">writers</label>
            <input name="writers" type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" placeholder=""value="{{old('writers')}}" required>
            @error('writers')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3" required>{{old('description')}}</textarea>
            @error('description')
            <div class="alert alert-danger mb-4">{{$message}}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-warning"> nuovo fumetto</button>
    </form>
</div>

@endsection