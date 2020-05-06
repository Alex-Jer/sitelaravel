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
        $empregos = Empregos::all();

        return view('empregos.index', compact('empregos'));
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
        $emprego->localidades_id = request('localidade');
        $emprego->empresas_id = request('empresa');
        $emprego->categorias_id = request('categoria');
        $emprego->tipos_id = request('tipo');

        $emprego->save();

        return redirect('/empregos')->with('message', 'Novo Emprego Adicionado');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Empregos $emprego)
    {
        $localidades = Localidades::all();
        $empresas = Empresas::all();
        $categorias = Categorias::all();
        $tipos = Tipos::all();

        return view('empregos.show', compact('emprego', 'localidades', 'empresas', 'categorias', 'tipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Empregos $emprego)
    {
        $localidades = Localidades::all();
        $empresas = Empresas::all();
        $categorias = Categorias::all();
        $tipos = Tipos::all();

        return view('empregos.edit', compact('emprego', 'localidades', 'empresas', 'categorias', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empregos $emprego)
    {
        request()->validate([
            'designacao' => 'required',
            'descricao' => 'required',
            'localidade' => 'required',
            'empresa' => 'required',
            'categoria' => 'required',
            'tipo' => 'required',
        ]);

        $emprego->designacao = request('designacao');
        $emprego->descricao = request('descricao');
        $emprego->localidades_id = request('localidade');
        $emprego->empresas_id = request('empresa');
        $emprego->categorias_id = request('categoria');
        $emprego->tipos_id = request('tipo');

        $emprego->save();

        return redirect('/empregos')->with('message', 'Emprego Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empregos $emprego)
    {
        $emprego->delete();

        return redirect('/empregos')->with('message', 'Emprego Removido');
    }

    public function list()
    {
        $empregos = Empregos::all();
        $localidades = Localidades::all();
        $empresas = Empresas::all();
        $categorias = Categorias::all();
        $tipos = Tipos::all();

        return view('empregos.list', compact('empregos', 'localidades', 'categorias', 'tipos'));
    }

    public function search()
    {
        $designacao = request('designacao');
        $localidades_id = request('localidade');
        $categorias_id = request('categoria');
        $tipos_id = request('tipo');

        $localidades = Localidades::all();
        $categorias = Categorias::all();
        $tipos = Tipos::all();

        if ('Localidade' == $localidades_id) {
            $localidades_id = '';
        }

        if ('Categoria' == $categorias_id) {
            $categorias_id = '';
        }

        if ('Tipo' == $tipos_id) {
            $tipos_id = '';
        }
        $empregos = Empregos::where('designacao', 'LIKE', '%'.$designacao.'%')
            ->where('localidades_id', 'LIKE', '%'.$localidades_id.'%')
            ->where('categorias_id', 'LIKE', '%'.$categorias_id.'%')
            ->where('tipos_id', 'LIKE', '%'.$tipos_id.'%')
            ->get()
        ;

        return view('empregos.list', compact('empregos', 'localidades', 'categorias', 'tipos'));
    }
}