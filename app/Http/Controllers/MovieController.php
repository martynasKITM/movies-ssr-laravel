<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;
use File;
use Auth;
use Gate;
class MovieController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index(){
        $movies = Movie::paginate(3);
        return view('pages.home', compact('movies'));
    }

    public function addMovie(){
        $categories = Category::all();
        return view('pages.add-movie',compact('categories'));
    }

    public function storeMovie(Request $request){
        $validated = $request->validate([
            'title'=>'required|max:255',
            'imdb'=>'required|max:2',
            'director'=>'required',
            'created'=>'required',
            'description'=>'required',
            'category' => 'required'
        ]);
        //dd($request);
        if(request()->hasFile('poster')){
            $poster = $request->file('poster')->store('public/images');
            $path = str_replace('public/','',$poster);
        }
        Movie::create([
            'title'=>request('title'),
            'imdb'=>request('imdb'),
            'director'=>request('director'),
            'description'=>request('description'),
            'created'=>request('created'),
            'poster'=>$path,
            'category_id'=> request('category'),
            'user_id'=>Auth::id()
        ]);
        return redirect('/');
    }

    public function show(Movie $movie){
        return view('pages.show-movie', compact('movie'));
    }

    public function destroy(Movie $movie){
        if(Gate::denies('delete-movie',$movie)){
            dd('Tu neesi savininkas sio sutinio. Ir negali jo pasalinti.');
        }
        $movie->delete();
        return redirect('/');
    }

    public function edit(Movie $movie){
        if(Gate::denies('edit-movie',$movie)){
            dd('Tu neesi savininkas sio sutinio. Ir negali jo keisti.');
        }
        return view('pages.edit-movie', compact('movie'));
    }

    public function storeUpdate(Movie $movie,Request $request){
        if(request()->hasFile('poster')){
            File::delete(storage_path('app/public/'.$movie->poster));
            $poster = $request->file('poster')->store('public/images');
            $path = str_replace('public/','',$poster);
            Movie::where('id',$movie->id)->update(['poster'=>$path]);
        }
        Movie::where('id',$movie->id)->update(
            $request->only(['title','director','imdb','created','description'])
        );

        return redirect('/movie/'.$movie->id);

    }
}
