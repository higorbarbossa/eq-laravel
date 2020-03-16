<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contatos = Contato::all();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Contato $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Contato $contato)
    {
        $contato = Contato::find($id);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Contato $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Contato $contato)
    {
        $contato = Contato::find($id);

        $contato->delete();
    }
}
