@extends('layouts.app')
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Relatórios</h1>
                <hr>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="card col-6" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Quantidade de Atletas</h5>
                  
                    <hr />
                    <h1 class="card-subtitle mb-2 text-muted" class="card-text">{{$atletaQuant}}</h1>
                </div>
            </div>
    
            <div class="card col-6" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Quantidade de Empresas</h5>
                
                    <hr />
                    <h1 class="card-subtitle mb-2 text-muted" class="card-text">{{$empresaQuant}}</h1>
                </div>
            </div>
        </div>

        @foreach ($empresa as $empresas)
            <input type="hidden" name="empresasId" value="{{$empresas->id}}">
            <input type="hidden" name="empresas" value="{{$empresas->nome}}">
            @foreach($atleta as $atletas)
                @if($atletas->id_empresa == $empresas->id)
                    <input type="hidden" name="numAtletas" value="{{$atletas->id_empresa}}">
                @endif
            @endforeach

        @endforeach
        <br />
        <div class="row">

            <div class="card col-6" style="width: 18rem;">
                <div class="card-body hidden-center">
                    <h5 class="card-title text-center">Quantidade Atletas de Cada Empresa</h5>

                    <hr />
                    <canvas class="bar"></canvas>
                </div>
            </div> 

        </div>

        <script>
            let ctx = document.getElementsByClassName('bar');
            let empresa = document.getElementsByName('empresas');
            let atleta_id_empresa = document.getElementsByName('numAtletas');
            let id_empresa = document.getElementsByName('empresasId');

            let aux = 0;
            let nomeEmpresa = new Array();
            let quantAtleta = new Array();

            for(let i = 0; i < empresa.length; i++){
                nomeEmpresa.push(empresa[i].value);
            }

            for(let i = 0; i < id_empresa.length; i++){
                for(let y = 0; y < atleta_id_empresa.length; y++){
                    if(parseInt(atleta_id_empresa[y].value) === parseInt(id_empresa[i].value)){
                        aux++;
                    }
                }

                quantAtleta.push(aux);
                aux = 0;
            }
            
            data = {
                datasets: [{
                    data: quantAtleta,
                    backgroundColor: [
                            'rgb(168,85,211)',
                            'rgb(218,165,32)',
                            'rgb(135,206,235)',
                            'rgb(152,251,152)'    
                        ],

                        borderWidth: 2
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels:      
                    nomeEmpresa
            };

            options = {}

            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
        </script>
    </div>  

    

    @endsection