@extends('moviesTemplate.app')

@section('content')
<h1 class="mt-4">Pridėti filmą</h1>
@include('moviesTemplate/_partials/errors')
<form action="/movie/update/{{$movie->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-1">
        <input type="text" name="title" class="form-control" placeholder="Filmo pavadinimas" value="{{$movie->title}}">
    </div>
    <div class="form-group m-1">
        <input type="text" name="imdb" class="form-control" placeholder="IMDB reitingas" value="{{$movie->imdb}}">
    </div>
    <div class="form-group m-1">
        <input type="text" name="director" class="form-control" placeholder="Rezisierius" value="{{$movie->director}}">
    </div>
    <div class="form-group m-1">
        <input type="date" name="created" class="form-control" placeholder="Sukurtas" value="{{$movie->created}}">
    </div>
    <div class="form-group m-1">
        <textarea name="description" class="form-control" placeholder="Filmo aprašymas">{{$movie->title}}</textarea>
    </div>
    <div class="form-group m-1">
        <label>Filmo plakatas:</label>
        <input type="file" name="poster" class="form-control">
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-primary">Saugoti</button>
    </div>
</form>
@endsection