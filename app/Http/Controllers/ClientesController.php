<?php

namespace App\Http\Controllers;

use App\Clientes as Clientes;
// use App\Models\Clientes as Clientes;
use App\Http\Resources\Clientes as ClientesResource;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $clientes = Clientes::where('excluir', '=', 0)
      ->with('enderecos')
      ->orderby('nome', 'asc')
      ->paginate(25);
    return ClientesResource::collection($clientes);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $clientes = Clientes::findOrFail($id);
    return new ClientesResource($clientes);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $clientes = new Clientes();
    $clientes->id = $request->input('id');
    $clientes->nome = $request->input('nome');
    $clientes->email = $request->input('email');
    $clientes->cnpj = $request->input('cnpj');
    $clientes->ie = $request->input('ie');
    $clientes->cpf = $request->input('cpf');
    $clientes->rg = $request->input('rg');
    $clientes->telefone = $request->input('telefone');
    $clientes->celular = $request->input('celular');
    $clientes->operadora = $request->input('operadora');
    $clientes->nascim = $request->input('nascim');

    if ($clientes->save()) {
      return new ClientesResource($clientes);
    }
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
    $clientes = Clientes::findOrFail($request->id);
    $clientes->titulo = $request->input('titulo');
    $clientes->conteudo = $request->input('conteudo');

    if ($clientes->save()) {
      return new ClientesResource($clientes);
    }
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