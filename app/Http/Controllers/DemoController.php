<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function profile(){
        $usersList = ['Tomas', 'tadas', 'Ieva'];
        return view('profile',compact('usersList'));
    }
}
