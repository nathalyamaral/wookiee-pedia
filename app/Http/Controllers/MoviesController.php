<?php

namespace App\Http\Controllers;

use App\Repositories\Movies;
use App\Repositories\Translate;


use Illuminate\Http\Request;

class MoviesController extends Controller
{
    protected $movies;
    protected $translate;

    public function __construct(Movies $movies, Translate $translate)
    {
        $this->movies = $movies;
        $this->translate = $translate;
    }

    public function index()
    {
        $Movie = $this->movies->allMovies();
        return view('index', compact('Movie'));
    }

    public function findById($id)
    {
        $informationMovie = $this->movies->findById($id);

        $informationMovie['translate'] = $this->translate->language('personagem','pt-br');
        $informationMovie['actionPage'] = 'personagem';
        $idimg = $id; 
        return view('details', compact('informationMovie', 'idimg'));
    }

    public function find($id, $type)
    {
        $informationMovie = $this->movies->find($id, $type);

        $informationMovie['translate'] = $this->translate->language($type, 'pt-br');
        $informationMovie['actionPage'] = $type;
 
        if( empty( $informationMovie['translate'] ) ){
            
            return response()->view('errors.error404');

        }
        $idimg = $id; 
        $informationMovie['actionPage'] = $type;
        
        return view('details', compact('informationMovie', 'idimg'));
    }

    public function findByTitle($title)
    {
        $Movie = $this->movies->findByTitle($title);

        $Movie['search'] = true;

        return view('index', compact('Movie'));
    }
}
