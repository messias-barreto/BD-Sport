@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Empresas Cadastradas</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <a href="{{ route('empresa.create') }}">
                <ul class="list-group">
                    <li class="list-group-item text-center">Cadastrar Nova Empresa</li>
                </ul>
            </a>
            <a href="{{ route('home') }}">
                <ul class="list-group">
                    <li class="list-group-item text-center">Retornar</li>
                </ul>
            </a>   
        </div>
        

        <div class="col-9">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cnpj</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($empresa as $empresas)
                        <tr>
                            <td>{{$empresas->nome}}</td>
                            <td>{{$empresas->cnpj}}</td>
                            <td>{{$empresas->logradouro}}</td>
                            <td>{{$empresas->estado}}</td>
                            <!-- UPDATE -->
                            <td>
                                <a href={{ route('empresa.edit', $empresas->id) }}>
                                    <button type="button" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i>  </button>
                                </a>
                            </td>   
                            <!-- DELETE --> 
                            <td>
                                <form action={{route('empresa.destroy', $empresas->id)}} method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar?')"> <i style="font-size:20px;" class="fa fa-trash"></i>  </button>
                                </form>
                            </td>    
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <hr />
            <div class="row">
                <div class="col-12">
                    {{$empresa->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection