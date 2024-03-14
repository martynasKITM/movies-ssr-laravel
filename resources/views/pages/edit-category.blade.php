@extends('moviesTemplate.app')
@section('content')
    <h1 class="mt-4">Redaguoti kategoriją</h1>
    @include('_partials/errors')
    <form action="/category/update/{{$category->id}}" method="post" >
        @csrf
        <div class="form-group m-1">
            <input type="text" name="title" class="form-control" placeholder="Kategorijos pavadinimas" value="{{$category->title}}">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection