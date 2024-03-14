@extends('moviesTemplate.app')

@section('content')
<div class="card">
    <h1 class="mt-4">{{$movie->title}}</h1>
    <p>{{$movie->description}}</p>
    <img src="{{asset('/storage/'.$movie->poster)}}" alt="">
    <h2>Kita informacija apie filma:</h2>
    <ul>
        <li>Rezisierius:{{$movie->director}}</li>
        <li>IMDB reitingas: {{$movie->imdb}}</li>
        <li>Filmas sukurtas: {{$movie->created}}</li>
    </ul>
    <h3>Veiksmai:</h3>
    <ul>
        <li><a href="/movie/edit/{{$movie->id}}">Redaguoti</a></li>
        <li><a href="/movie/delete/{{$movie->id}}">Salinti</a></li>
    </ul>
</div>
@endsection