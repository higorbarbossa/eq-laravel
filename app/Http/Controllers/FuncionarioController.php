<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Http\Requests\FuncionarioStoreRequest;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $funcionarios = Funcionario::all();

        return view('funcionario.index', compact('funcionarios'));
    }

    /**
     * @param \App\Http\Requests\FuncionarioStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncionarioStoreRequest $request)
    {
        $funcionario = new Funcionario();

        $funcionario->nome      = $request->nome ;
        $funcionario->cpf       = $request->cpf  ;
        $funcionario->ctps      = $request->ctps ;
        $funcionario->telefone  = $request->telefone ;
        $funcionario->celular   = $request->celular ;
        $funcionario->setor_id  = $request->setor;

        $funcionario->save();

        return redirect()->route('funcionario.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Funcionario $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        //return ($funcionario);

        return view('funcionario.edit',compact('funcionario'));
    }

    public function update(Request $request, $id)
    {

        $funcionario = Funcionario::find($id);

        $funcionario->nome      = $request->nome ;
        $funcionario->cpf       = $request->cpf  ;
        $funcionario->ctps      = $request->ctps ;
        $funcionario->telefone  = $request->telefone ;
        $funcionario->celular   = $request->celular ;
        $funcionario->setor_id  = $request->setor;

        $funcionario->save();

        return redirect()->route('funcionario.index');
    }
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Funcionario $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Funcionario $funcionario)
    {
        $funcionario->delete();

        return redirect()->route('funcionario.index');
    }
}
