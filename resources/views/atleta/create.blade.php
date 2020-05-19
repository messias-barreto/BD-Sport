@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Cadastro de Atletas</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <a href="{{ route('atleta.index') }}">
                <ul class="list-group">
                    <li class="list-group-item text-center">Retornar</li>
                </ul>
            </a>     
        </div>

        <div class="col-8">
            <form action={{ route('atleta.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="col-8">
                        <label for="nome">Nome do Atleta</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                </div>    
                
                <div class="form-group">    
                    <div class="col-4">
                        <label for="sexo">Saxo</label>
                        <select class="form-control" id="sexo" name="sexo">
                          <option>Masculino</option>
                          <option>Feminino</option>
                        </select>
                    </div>
                </div>

                <br />

                <div class="form-group">
                    <div class="col-4">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                    </div>

                    <div class="col-4">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" name="peso">
                    </div>

                    <div class="col-4">
                        <label for="altura">Altura(cm)</label>
                        <input type="number" class="form-control" name="altura">
                    </div>

                    <div class="col-4">
                        <label for="circ_abdomen">Circunferencia</label>
                        <input type="hidden" class="form-control" value="0" name="circ_abdomen">
                    </div>

                    <div class="col-4">
                        <input type="hidden" class="form-control" value="faceImg/null.jpg" name="imagem">
                    </div>
                </div>

                <br />

                <div class="form-row">
                    <div class="col-4">
                        <label for="nivel_atividade">Nivel de Atividade</label>
                        <select class="form-control" id="nivel_atividade" name="nivel_atividade">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="id_empresa">Empresa Contratada</label>
                        <select class="form-control" id="id_empresa" name="id_empresa">
                            @foreach ($empresa as $empresas)
                                <option value="{{$empresas->id}}">{{$empresas->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <hr />
                <input type="submit" value="Adicionar Empresa">
            </form>
        </div>
    </div>
</div>    
@endsection