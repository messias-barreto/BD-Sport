<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atleta;
use App\Empresa;

class AtletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $atleta = Atleta::paginate(8);
        $empresa = Empresa::all();
        return view('atleta.index', compact('atleta', 'empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empresa = Empresa::all();
        return view('atleta.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image;
        //dd($request);
        $request->validate([
            'id_empresa' => 'required'
        ]);
        
        $atleta = Atleta::create($request->all());
        return redirect()->route('atleta.index');
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
        $atleta = Atleta::find($id);
        return view('atleta.show', compact('atleta'));
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
        $atleta = Atleta::find($id);
        $empresa = Empresa::all();
        return view('atleta.edit', compact('atleta','empresa'));
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
        $atleta = Atleta::find($id)->update($request->all());
        return redirect()->route('atleta.index');

    }

    //Upload e Alteração da Imagem---------------
    public function cadImg(Request $request, $id){
        if($request->file('imagem')->isValid()){
            $image = $request->file('imagem')->store('faceImg');
        }

        //Atualizar Imagem-------------------
        $atleta = Atleta::find($id)->update([
            'imagem'=> $image
        ]);

        return redirect()->route('atleta.edit', $id);
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
        $atleta = Atleta::find($id)->delete();
        return redirect()->route('atleta.index');
    }
}
