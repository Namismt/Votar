<?php

namespace App\Http\Controllers;

use App\Models\Roupa;
use App\Models\Votar;
use Illuminate\Http\Request;

class VotarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $votos = Votar::all();
        $roupas = Roupa::all();
        $total = Votar::all()->count();
        $totalroupa = Votar::where('roupa_id', $request->busca)->count();

        return view('votar.index', [
            'votos' => $votos,
            'roupas'=>$roupas,
            'total'=>$total,
            'totalroupa'=>$totalroupa,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $votar->roupa_id = $request->roupa_id;
        $votar->save();
        return redirect("/votar");
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
