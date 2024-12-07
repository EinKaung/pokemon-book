<?php

namespace App\Http\Controllers\Pokedex;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pokemons = Pokemon::all();
        return view('pokedex.index')
            ->with('pokemons', $pokemons);
    }
}

