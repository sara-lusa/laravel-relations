@extends('layouts.head')
@section('content')
  <h1>Lista Album</h1>

  <ul>
    @foreach ($albums as $album)
      <li>
        <img class="album-cover" src="{{$album->image->url}}" alt="{{$album->title}}">
        <span>Titolo: {{$album->title}}</span><br>
        <a href="{{route('album.show', $album)}}">Mostra Dettagli</a>
      </li>
    @endforeach
  </ul>
@endsection
