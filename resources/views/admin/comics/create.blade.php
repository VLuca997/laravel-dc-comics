@extends('layouts.layout')

@section('page-title', 'nuovo comic')

@section('main-content')


<form class="bg-success text-center" action="{{route('comics.store')}}" method="POST">
    @csrf
    

    <div class="mb-3">
        <label for="thumb" class="form-label">images</label>
        <input name="thumb" type="text" class="form-control" id="thumb" placeholder="">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">titolo</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="">
    </div>

    

    <div class="mb-3">
        <label for="series" class="form-label">series</label>
        <input name="series" type="text" class="form-control" id="series" placeholder="">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input name="price" type="text" class="form-control" id="price" placeholder="">
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">date</label>
        <input name="date" type="text" class="form-control" id="date" placeholder="">
    </div>

    <div class="mb-3">
        <label for="artists" class="form-label">artists</label>
        <input name="artists" type="text" class="form-control" id="artists" placeholder="">
    </div>

    <div class="mb-3">
        <label for="writers" class="form-label">writers</label>
        <input name="writers" type="text" class="form-control" id="writers" placeholder="">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-warning"> nuovo fumetto</button>
</form>

@endsection