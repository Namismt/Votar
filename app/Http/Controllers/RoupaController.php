<?php

namespace App\Http\Controllers;

use App\Models\Roupa;
use Illuminate\Http\Request;

class RoupaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roupas = Roupa::all();
        return view ('roupa.index',[
            'roupas' => $roupas,
        ]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('roupa.create',[
            'roupa' => new Roupa,
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
        $roupa = new Roupa;
        $roupa->nome = $request->nome;
        $roupa->tipo = $request->tipo;
        $roupa->save();
        return redirect("/roupa");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function show(Roupa $roupa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function edit(Roupa $roupa)
    {
        return view('roupa.edit', [
            'roupa'=>$roupa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roupa $roupa)
    {
            $roupa->nome = $request->nome;
            $roupa->tipo = $request->tipo;
            $roupa->save();
            return redirect("/roupa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roupa  $roupa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roupa $roupa)
    {
        $roupa->delete();
        return redirect('/roupa');
    }
}
