@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">BD-Sport</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('atleta.index') }}">       
                                <div class="card" style="width: 18rem;" id="card">
                                    <img class="card-img-top" src="{{asset('img/atleta.png')}}">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Atletas</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    
                        <div class="col-4">     
                            <a href="{{ route('empresa.index') }}">   
                                <div class="card" style="width: 18rem;" id="card">
                                    <img class="card-img-top" src="{{asset('img/empresa.png')}}">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Empresa</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4">    
                            <a href="{{ route('telaRelatorio') }}">   
                                <div class="card" style="width: 18rem;" id="card">
                                    <img class="card-img-top" src="{{asset('img/relatorio.png')}}">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Relatório</h5>
                                    </div>
                                </div>
                            </a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection