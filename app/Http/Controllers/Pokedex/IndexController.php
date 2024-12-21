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

    public function show($id)
    {
        // idでポケモンを取得する
        $pokemon = Pokemon::find($id);

        if (!$pokemon) {
            return redirect()->route('pop_up')->with('error', 'ポケモンが見つかりません。');
        }
        return view('pokedex.pop_up', compact('pokemon'));
    }
}

