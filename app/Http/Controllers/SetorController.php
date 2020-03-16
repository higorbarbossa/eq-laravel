<?php

namespace App\Http\Controllers;

use App\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function index()
    {
        $setores = Setor::all();
        return view('setor.index', compact('setores'));
    }

    public function store(Request $request)
    {
        $setor = new Setor();
        $setor->descricao = $request->descricao ;
        $setor->save();
        return redirect()->route('setor.index');
    }

    public function edit(Request $request, $id)
    {
        $setor = Setor::find($id);
        return view('setor.edit',compact('setor'));
    }

    public function update(Request $request, $id)
    {

        $setor = Setor::find($id);
        $setor->descricao = $request->descricao ;
        $setor->save();
        return redirect()->route('setor.index');
    }

    public function destroy(Request $request, Setor $setor)
    {
        $setor->delete();
        return redirect()->route('setor.index');
    }
}