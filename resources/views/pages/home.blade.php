@extends('moviesTemplate.app')

@section('content')
<h1 class="mt-4">Filmai</h1>
  <div class="row">
    @foreach($movies as $movie)
    <div class="col-4">
        <ul>
            <li>{{$movie->title}}</li>
            <li>IMDB:{{$movie->imdb}}</li>
            <li>Rezisierius: {{$movie->director}}</li>
            <li><a href="/movie/{{$movie->id}}">Placiau...</a></li>
        </ul>
    </div>
    @endforeach
    {{$movies->links()}}
  </div>                 
@endsection