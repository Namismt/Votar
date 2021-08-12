<?php

namespace App\Http\Controllers;
use App\Models\Roupa;
use App\Models\Enquete;
use App\Models\Votar;
use Illuminate\Http\Request;

class EnqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $enquete = Enquete::all();
        $votos= Votar::all();
        $roupas = Roupa::all();
        $total = Votar::all()->count();
        $totalroupa = Votar::where('roupa_id', $request->busca)->count();

        return view('enquete.index',[
            'enquetes' => $enquete,
            'votos' => $votos,
            'roupas' => $roupas,
            'total' => $total,
            'totalroupa' => $totalroupa,
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
        $enquete = New Enquete;
        $enquete->nome = $request->nome;
        $enquete->datafim = $request->datafim;
        $enquete->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function show(Enquete $enquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquete $enquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquete $enquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquete $enquete)    
    {
        $enquete->delete();
        return redirect('/');
    }
}
