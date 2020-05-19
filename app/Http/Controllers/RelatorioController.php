<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atleta;
use App\Empresa;

class RelatorioController extends Controller
{
    //
    public function index()
    {
        $atleta = Atleta::all();
        $empresa = Empresa::all();

        $atletaQuant = Atleta::count();
        $empresaQuant = Empresa::count();
        return view('relatorio.index', compact('atleta','empresa','atletaQuant','empresaQuant'));
    }
}
