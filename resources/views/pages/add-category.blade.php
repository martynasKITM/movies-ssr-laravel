@extends('moviesTemplate.app')
@section('content')
    <h1 class="mt-4">Pridėti kategoriją</h1>
    @include('moviesTemplate/_partials/errors')
    <form action="/storeCategory" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="title" class="form-control" placeholder="Kategorijos pavadinimas">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection