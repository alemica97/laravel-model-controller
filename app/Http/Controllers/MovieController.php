<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    // creo un metodo index all'interno del controller 
    public function index(){
        // recupero tutti i film dal database 
        $movies = Movie::all();
        // passo i film che ho recuperato alla view, per poterli mostrare 
        // nella pagina (home.blade.php)
        return view('home', compact('movies'));
    }

    public function show(){
        $movies = Movie::where('vote','>=',9.0)->get();
        return view('partials.bestFilms', compact('movies'));
    }

//     public function showVote(){
//         $movies = Movie::orderBy('vote','desc')->get();
//         return view('partials.voteDesc', compact('movies'));
//     }
}
