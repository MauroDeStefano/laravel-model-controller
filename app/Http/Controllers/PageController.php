<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){

    $films = Movie::all();

    dump($films);
    
    return view('home', compact('films'));

   }

   public function title(){

    $filmsTitle = Movie::all();

    dump($filmsTitle);

    return view('title', compact('filmsTitle'));

   }

   public function date(){

    $filmsDates = Movie::all();

    dump($filmsDates);

    return view('date', compact('filmsDates'));

   }

}