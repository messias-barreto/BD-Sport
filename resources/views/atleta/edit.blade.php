@extends('layouts.app')
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Atualizar Dados dos Atletas</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-4 text-center">
                <a href="{{ route('atleta.index') }}">
                    <ul class="list-group">
                        <li class="list-group-item text-center">Retornar</li>
                    </ul>
                </a>
                <hr />
            
                <!-- Alterar a Imagem -->
                <img src="{{ asset("storage/{$atleta->imagem}") }}" class="img-thumbnail" max-width="200px">
                <form action={{ route('cadImagem', $atleta->id) }} method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-12">
                        <br />
                        <input type="file" class="form-control" name="imagem" value="{{$atleta->imagem}}">
                        <hr />
                        <input type="submit" value="Alterar Imagem">
                    </div>
                </form>
            </div>

            <div class="col-8">
                <form action={{ route('atleta.update', $atleta->id) }} method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <div class="col-8">
                            <label for="nome">Nome do Atleta</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$atleta->nome}}">
                        </div>
                    </div>    
                    
                    <div class="form-group">    
                        <div class="col-4">
                            <label for="sexo">Saxo</label>
                            <select class="form-control" id="sexo" name="sexo">
                            <option @if ($atleta->sexo == "Masculino") selected="true" @endif>Masculino</option>
                            <option @if ($atleta->sexo == "Feminino") selected="true" @endif>Feminino</option>
                            </select>
                        </div>
                    </div>

                    <br />

                    <div class="form-group">
                        <div class="col-4">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{$atleta->data_nascimento}}">
                        </div>

                        <div class="col-4">
                            <label for="peso">Peso</label>
                            <input type="text" class="form-control" name="peso" value="{{$atleta->peso}}">
                        </div>

                        <div class="col-4">
                            <label for="altura">Altura(cm)</label>
                            <input type="number" class="form-control" name="altura" value="{{$atleta->altura}}">
                        </div>

                        <div class="col-4">
                            <input type="hidden" class="form-control" value="0" name="circ_abdomen">
                        </div>
                    </div>

                    <br />

                    <div class="form-row">
                        <div class="col-4">
                            <label for="nivel_atividade">Nivel de Atividade</label>
                            <select class="form-control" id="nivel_atividade" name="nivel_atividade">
                            <option @if ($atleta->nivel_atividade == 1) selected="true" @endif>1</option>
                            <option @if ($atleta->nivel_atividade == 2) selected="true" @endif>2</option>
                            <option @if ($atleta->nivel_atividade == 3) selected="true" @endif>3</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label for="id_empresa">Empresa Contratada</label>
                            <select class="form-control" id="id_empresa" name="id_empresa">
                                @foreach ($empresa as $empresas)
                                    <option value="{{$empresas->id}}" @if ($atleta->id_empresa == $empresas->id) selected="true" @endif>{{$empresas->nome}}</option>
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