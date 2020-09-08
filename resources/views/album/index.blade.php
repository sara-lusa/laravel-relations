<h1>Lista Album</h1>

<ul>
  @foreach ($albums as $album)
    <li>Titolo: {{$album->title}}
      <a href="{{route('album.show', $album)}}">Mostra Dettagli</a>
    </li>
  @endforeach
</ul>
