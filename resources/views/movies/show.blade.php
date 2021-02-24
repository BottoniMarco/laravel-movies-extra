@extends('layouts.main')


@section('content')
  <div class="text-center my-4">
    <h1>{{ $movie->title }}</h1>
    <h3> {{ $movie->director }}</h3>
    <small> {{ $movie->year}} </small>
    <div class="text-center">
		</div>
    <div class="my-3">
      <img src="{{ asset('img/movies/'.$movie->poster_name) }}" alt="">
    </div>
    <p class="mt-4"> {{ $movie->genres}}</p>
  </div>

@endsection

@section('footer')
  <div class="container text-right">
    <a href="{{ route('movies.index')}}"class="btn btn-lg btn-dark">Torna all'elenco</a>
  </div>
@endsection
