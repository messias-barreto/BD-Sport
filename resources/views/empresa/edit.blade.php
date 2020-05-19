@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Atualizar Dados das Empresas</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <a href="{{ route('empresa.index') }}">
                <ul class="list-group">
                    <li class="list-group-item text-center">Retornar</li>
                </ul>
            </a>     
        </div>

        <div class="col-8">
            <form action={{ route('empresa.update', $empresa->id) }} method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <div class="col-8">
                        <label for="nome">Nome da Empresa</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{$empresa->nome}}">
                    </div>

                    <div class="col-8">
                        <label for="cnpj">CNPJ da Empresa</label>    
                        <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$empresa->cnpj}}">
                    </div>
                </div>

                <br />

                <div class="form-group">
                    <div class="col-8">
                        <label for="logradouro">Logradouro da Empresa</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{$empresa->logradouro}}">
                    </div>

                    <div class="col-4">
                        <label for="numro">Número</label>
                        <input type="text" class="form-control" name="num" value="{{$empresa->num}}">
                    </div>
                </div>

                <br />

                <div class="form-row">
                    <div class="col-4">
                        <label for="bairro">Bairro</label>
                        <select class="form-control" id="bairro" name="bairro">
                          <option @if ($empresa->bairro == "Santa Cruz") selected="true" @endif>Santa Cruz</option>
                          <option @if ($empresa->bairro == "Paciência") selected="true" @endif>Paciência</option>
                          <option @if ($empresa->bairro == "Bangu") selected="true" @endif>Bangu</option>
                          <option @if ($empresa->bairro == "Campo Grande") selected="true" @endif>Campo Grande</option>
                          <option @if ($empresa->bairro == "Méier") selected="true" @endif>Méier</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado">
                            <option>Rio de Janeiro</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="uf">Uf</label>
                        <select class="form-control" id="uf" name="uf">
                            <option>Rj</option>
                        </select>
                    </div>
                </div>
                <hr />
                <input type="submit" value="Atualizar Empresa">
            </form>
        </div>
    </div>
</div>    
@endsection