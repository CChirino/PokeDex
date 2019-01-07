<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
            return response()->json([
                ['id'=> 1, 'name'=> 'Squirtle'],
                ['id'=> 2, 'name'=> 'Bulbasaur'],
                ['id'=> 3, 'name'=> 'Charmander']
            ]);            
        }
        return view('pokemons.index');
    }
}
