@extends('layouts.head')
@section('content')
  <div class="single-song">
    <h1>Titolo: {{$song->title}}</h1>
    <p>Album: {{$song->album->title}}</p>

    <p>Genre: {{$song->genre}}</p>
    <p>Producer: {{$song->producer}}</p>
    <p>Duration: {{$song->duration}}</p>
  </div>
@endsection
