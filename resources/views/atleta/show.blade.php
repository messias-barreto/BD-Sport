@extends('layouts.app')
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Dados do Atleta</h1>
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
            </div>

            <div class="col-8">
                <div class="form-group">
                    <div class="col-8">
                        <label for="nome">Nome do Atleta</label>
                        <input type="text" class="form-control" value="{{$atleta->nome}}" readonly>
                    </div>
                </div>    
                    
                <div class="form-group">    
                        <div class="col-4">
                            <label for="sexo">Sexo</label>
                            <input type="text" class="form-control" value="{{$atleta->sexo}}" readonly>
                        </div>
                    </div>

                    <br />

                    <div class="form-group">
                        <div class="col-4">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" value="{{$atleta->data_nascimento}}" readonly>
                        </div>

                        <div class="col-4">
                            <label for="peso">Peso</label>
                            <input type="text" class="form-control" id="peso" value="{{$atleta->peso}}" readonly>
                        </div>

                        <div class="col-4">
                            <label for="altura">Altura(cm)</label>
                            <input type="number" class="form-control" id="altura" value="{{$atleta->altura}}" readonly>
                        </div>
                    </div>

                    <br />

                    <div class="form-row">
                        <div class="col-4">
                            <label for="id_empresa">Empresa Contratada</label>
                            <input type="text" class="form-control" value="{{$atleta->altura}}" readonly>
                        </div>
                    </div>
                    <hr />
                </div>
            </div>
            <hr />    
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Situação do Atleta</h1>
                    <hr />
                </div>
            </div>

            <div class="container">
                <div class="col-12 text-center">
                    <h2>IMC</h2>
                </div>

                <div class="col-12">
                    <canvas class="bar"></canvas>
                </div>
            </div>

            <script src="{{ asset('js/graficoAtleta.js') }}"></script>
    @endsection