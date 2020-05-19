@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Cadastro de Empresas</h1>
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
            <form action={{ route('empresa.store') }} method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-8">
                        <label for="nome">Nome da Empresa</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="col-8">
                        <label for="cnpj">CNPJ da Empresa</label>    
                        <input type="text" class="form-control" id="cnpj" name="cnpj">
                    </div>
                </div>

                <br />

                <div class="form-group">
                    <div class="col-8">
                        <label for="logradouro">Logradouro da Empresa</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro">
                    </div>

                    <div class="col-4">
                        <label for="numro">Número</label>
                        <input type="text" class="form-control" name="num">
                    </div>
                </div>

                <br />

                <div class="form-row">
                    <div class="col-4">
                        <label for="bairro">Bairro</label>
                        <select class="form-control" id="bairro" name="bairro">
                          <option>Santa Cruz</option>
                          <option>Paciência</option>
                          <option>Bangu</option>
                          <option>Campo Grande</option>
                          <option>Méier</option>
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
                <hr>
                <input type="submit" value="Adicionar Empresa">
            </form>
        </div>
    </div>
</div>    
@endsection