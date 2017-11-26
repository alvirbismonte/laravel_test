<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests\CreateFilmRequest;
use Illuminate\Http\Requests\UpdateFilmRequest;
use App\Film;
use App\Genre;

class FilmController extends Controller
{

	public function index()
    {
        return Film::all();

    }

    public function show($slug)
    {
    	$film = Film::where('slug',$slug)->first();
        return $film;
    }

    public function store(CreateFilmRequest $request)
    {
        $film = Film::create($request->all());

        return response()->json($film, 201);
    }

    public function update(UpdateFilmRequest $request, Film $film)
    {
        $film->update($request->all());

        return response()->json($film, 200);
    }

    public function delete(Film $film)
    {
        $film->delete();

        return response()->json(null, 204);
    }

}
