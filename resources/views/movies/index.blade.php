@extends('layouts.main')
@section('header')
  <h1 style="text-align:center"class="my-5">All movies</h1>
@endsection
@section('content')
@if (session('message'))
<div class="alert alert-success">
  {{ session('message') }}
</div>
@endif
<table class="table table-light table-striped table-bordered">
  <thead>
    <tr>
      <th>Title</th>
      <th>Director</th>
      <th>Year</th>
      <th>Genres</th>
      <th>poster_name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($movies as $movie)
    <tr>
      <td> {{ $movie->id }}</td>
      <td> {{ $movie->title }}</td>
      <td> {{ $movie->year }}</td>
      <td> {{ $movie->genres }}</td>
      <td> <img src="{{ asset('img/movies/'.$movie->poster_name) }}" alt="" class="img-thumbnail rounded"></td>
      <td>
        <a href="{{ route('movies.show',$movie->id) }}" class="btn btn-info"><i class="fas fa-search-plus"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@section('footer')
<div class="text-right">
  <a href="{{ route('movies.create') }}" class="btn btn-lg btn-dark mb-5">Crea un nuovo film</a>
</div>
@endsection

