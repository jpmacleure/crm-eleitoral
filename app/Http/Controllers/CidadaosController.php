<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidadao;
use App\Endereco;

class CidadaosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cidadao = Cidadao::all();
        return json_encode($cidadao);
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
        $endereco = new Endereco();
        $cidadao = new Cidadao();

        $endereco->cep = $request->input('cep');
        $endereco->UF = $request->input('UF');
        $endereco->municipio = $request->input('municipio');
        $endereco->bairro = $request->input('bairro');
        $endereco->complemento = $request->input('complemento');

        $endereco->save();

        $cidadao->nome = $request->input('nome');
        $cidadao->apelido = $request->input('apelido');
        $cidadao->tel_presencial = $request->input('tel_presencial');
        $cidadao->celular = $request->input('celular');
        $cidadao->tel_fixo = $request->input('tel_fixo');
        $cidadao->email1 = $request->input('email1');
        $cidadao->email2 = $request->input('email2');
        $cidadao->data_nascimento = $request->input('data_nascimento');
        $cidadao->endereco_id = $endereco->id;
        $cidadao->sexo = $request->input('sexo');
        $cidadao->estado_civil = $request->input('estado_civil');
        $cidadao->religiao = $request->input('religiao');

        $cidadao->save();

        return "ok";

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
        $cidadao = Cidadao::find($id);
        $endereco = Endereco::find($cidadao->endereco_id);

        $obj_retorno['nome'] = $cidadao->nome;
        $obj_retorno['municipio'] = $endereco->municipio;

        return json_encode($obj_retorno);
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
