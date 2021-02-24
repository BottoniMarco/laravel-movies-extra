@extends('layouts.main')
@section('header')
  <h1 style="text-align:center"class="mt-5">Crea un nuovo film</h1>
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('movies.store') }}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="title">Titolo</label>
    <input type="text"class="form-control" id='title' name="title" placeholder="titolo" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="subtitle">Regista</label>
    <input type="text" class="form-control" id='director'name="director" placeholder="director"value="{{ old('director') }}">
  </div>
  <div class="form-group">
    <label for="year">Year</label>
    <input type="text" class="form-control" id='year' name="year" placeholder="year"
    value="{{ old('year') }}">
  </div>
  <div class="form-group">
    <label for="genres">Genres</label>
    <input type="text" class="form-control" id='genres' name="genres" placeholder="genres"
    value="{{ old('genres') }}">
  </div>
  <div class="form-group">
    <label for="poster">Poster</label>
    <input type="text" class="form-control" id='poster_name' name="poster_name" placeholder="Poster URL"
    value="{{ old('poster_name') }}">
  </div>
  <div class="text-right my-3">
    <input type="submit" value="Invia"class="btn btn-primary">
  <a href="{{route('movies.index') }}"class="btn btn-dark">Indietro</a>
  </div>
</form>
@endsection