<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vars = [];

        $vars['membros'] = \App\Membro::all();
        $vars['tipos'] = \App\models\Tipo::all();

        return view('membro/index', $vars);
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
        //

        $membro = new \App\Membro;

        $membro->name = $request->name;
        $membro->tel = $request->tel;
        $membro->cidade = $request->cidade;
        $membro->ccc = $request->ccc;
        $membro->ctl = $request->ctl;
        $membro->dizimista = $request->dizimista;
        $membro->casado = $request->casado;
        $membro->encontro = $request->encontro;
        $membro->batismo = $request->batismo;

        $membro->tipo_id = $request->tipo_id;
        $membro->save();

        Auth::user()->liderados()->save($membro);

        Auth::user()->supervisionados()->save($membro);


        return redirect('/membro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $vars = [];

        $vars['membro'] = \App\Membro::find($id);
        $vars['tipos'] = \App\models\Tipo::all();

        return view('membro/show', $vars);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
