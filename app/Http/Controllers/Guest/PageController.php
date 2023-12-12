<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::orderBy('title','asc')->get();

        foreach($movies as $movie){
            $movie->date = $this->getNewDate($movie->date);
        }


        return view("guest.index", compact('movies'));
    }

    public function getNewDate($date){
        $newDate = date_format( date_create($date), 'd M Y' );
        return $newDate;
    }
}
