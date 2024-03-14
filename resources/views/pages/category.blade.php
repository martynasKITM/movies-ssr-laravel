@extends('moviesTemplate.app')
@section('content')
<div class="card mt-5">
    <h1>{{$category->title}}</h1>
    <div class="row">
        @foreach($category->movies as $movie)
        <div class="card col-4">
            <ul>
            <li>{{$movie->title}}</li>
            <li>IMDB:{{$movie->imdb}}</li>
            <li>Rezisierius: {{$movie->director}}</li>
            <li><a href="/movie/{{$movie->id}}">Placiau...</a></li>
        </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection