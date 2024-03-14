@extends('moviesTemplate.app')
@section('content')
    <h1 class="mt-4">Visos kategorijos</h1>
    <a href="/add-category" class="btn btn-primary">Nauja kategorija</a>
    <table class="table">
        <tr>
            <th>Kategorijos pavadinimas</th>
            <th>Keisti</th>
            <th>Šalinti</th>
        </tr>
        @foreach($categories as $category)
           <tr>
                   <td>{{$category->title}}</td>
                   <td><a href="/category/edit/{{$category->id}}">Keisti</a></td>
                   <td><a href="/category/delete/{{$category->id}}">Šalinti</a></td>
           </tr>
           @endforeach
    </table>
@endsection