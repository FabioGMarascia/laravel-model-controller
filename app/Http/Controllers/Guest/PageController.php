<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function home()
    {
        $data = config("data");

        return view("home", $data);
    }
    public function moviesInfo()
    {
        $movies = Movie::all();
        $data = [
            "store" => config("data"),
            "movies" => $movies
        ];
        return view("moviesInfo", $data);
    }
}
