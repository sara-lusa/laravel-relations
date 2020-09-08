<h1>Titolo Album: {{$album->title}}</h1>
<p>Artista: {{$album->artist}}</p>
<p>Anno: {{$album->year}}</p>

<h2>Lista Canzoni</h2>
<ul>
  @foreach ($album->songs as $song)
    <li>{{$song->title}}
      <a href="{{route('song.show', $song)}}">Dettagli</a>
    </li>
  @endforeach
</ul>
