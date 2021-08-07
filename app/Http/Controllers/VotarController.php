<?php

namespace App\Http\Controllers;

use App\Models\Votar;
use Illuminate\Http\Request;

class VotarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('votar.create',[
            'votar' => new votar,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $votar = new Votar;
        $votar->roupas = $request->roupas;
        $votar->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votar  $votar
     * @return \Illuminate\Http\Response
     */
    public function show(Votar $votar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votar  $votar
     * @return \Illuminate\Http\Response
     */
    public function edit(Votar $votar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Votar  $votar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Votar $votar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votar  $votar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votar $votar)
    {
        //
    }
}
