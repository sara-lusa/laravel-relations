@extends('layouts.head')
@section('content')
  <div class="single-album">
    <h1>Titolo Album: {{$album->title}}</h1>
    <img class="album-cover" src="{{$album->image->url}}" alt="{{$album->title}}">
    {{-- {{dd($album->artists)}} --}}
    @foreach ($album->artists as $artist)
      <p>Artista: {{$artist->name}}</p>
    @endforeach
    <p>Anno: {{$album->year}}</p>

    <h2>Lista Canzoni</h2>
    <ul>
      @foreach ($album->songs as $song)
        <li>
          <div class="list-song">
            <span>{{$song->title}}</span><br>
            <a href="{{route('song.show', $song)}}">Dettagli</a>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
