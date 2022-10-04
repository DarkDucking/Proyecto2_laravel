<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pokemons = Pokemon::all();
        return view('pokemon.pokemon_index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pokemon.pokemon_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'tipo1' => 'required',
            'tipo2' => 'required',
            'grupo_huevo' => 'required',
            'numero' => 'required',
            'img' => 'required',
        ]);
        
        echo 'jala';

        Pokemon::create($request->all());

        return redirect('/pokemon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        //
        return view('pokemon.pokemon_show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.pokemon_edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $pokemon->nombre = $request->nombre;
        $pokemon->tipo1 = $request->tipo1;
        $pokemon->tipo2 = $request->tipo2;
        $pokemon->grupo_huevo = $request->grupo_huevo;
        $pokemon->numero = $request->numero;
        $pokemon->img = $request->img;
        $pokemon->save();
        return redirect('/pokemon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->destroy($pokemon->id);
        return redirect('/pokemon');
    }
}
