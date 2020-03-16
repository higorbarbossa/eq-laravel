<?php

namespace App\Http\Controllers;

use App\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $setors = Setor::all();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Setor $setor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Setor $setor)
    {
        $setor = Setor::find($id);
    }
}
