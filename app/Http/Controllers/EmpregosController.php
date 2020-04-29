<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Empregos;
use App\Empresas;
use App\Localidades;
use App\Tipos;
use Illuminate\Http\Request;

class EmpregosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empregos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidades::all();
        $empresas = Empresas::all();
        $categorias = Categorias::all();
        $tipos = Tipos::all();

        return view('empregos.create', compact('localidades', 'empresas', 'categorias', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'designacao' => 'required',
            'descricao' => 'required',
            'localidade' => 'required',
            'empresa' => 'required',
            'categoria' => 'required',
            'tipo' => 'required',
        ]);

        $emprego = new Empregos();
        $emprego->designacao = request('designacao');
        $emprego->descricao = request('descricao');
        $emprego->localidade_id = request('localidade');
        $emprego->empresa_id = request('empresa');
        $emprego->categoria_id = request('categoria');
        $emprego->tipo_id = request('tipo');

        $emprego->save();

        return redirect('/empregos');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Empregos $empregos)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Empregos $empregos)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empregos $empregos)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empregos $empregos)
    {
    }
}