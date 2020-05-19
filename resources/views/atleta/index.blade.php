@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Atletas Cadastrados</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <a href="{{ route('atleta.create') }}">
                <ul class="list-group">
                    <li class="list-group-item text-center">Cadastrar Novo Atleta</li>
                </ul>
            </a>

            <a href="{{ route('home') }}">
                <ul class="list-group">
                    <li class="list-group-item text-center">Retornar</li>
                </ul>
            </a>   
        </div>
    </div>
    
    <br />

    <div class="row">
        @foreach ($atleta as $atletas)
            <div class="col-3">
                <a href="{{ route('atleta.show', $atletas->id) }}">
                <div class="card text-center" style="width: 18rem;" id="card">
                <img class="card-img-top" src="{{ asset("storage/{$atletas->imagem}") }}">
                    <div class="card-body">
                        <h5 class="card-title">{{$atletas->nome}}</h5>
                        <hr />
                        <p class="card-text">Nascimento: {{$atletas->data_nascimento}}</p>
                        <p class="card-text">Empresa: 
                            @foreach($empresa as $empresas)
                                @if ($empresas->id == $atletas->id_empresa)
                                    {{$empresas->nome}}  
                                @endif
                            @endforeach    
                        </p>
                        <form action="{{ route('atleta.destroy', $atletas->id) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <!-- Atualizar -->
                            <a href="{{ route('atleta.edit', $atletas->id) }}" class="btn btn-primary">Atualizar</a>
                            <!-- Deletar -->
                            <input type="submit" class="btn btn-danger" value="Remover" onclick="return confirm('Tem certeza que deseja apagar?')"></a>
                        </form>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    
    <hr />
    <div class="row">
        <div class="col-12">
            {{$atleta->links()}}
        </div>
    </div>
</div>

@endsection