let ctx_bar = document.getElementsByClassName("bar");    
let peso = document.getElementById('peso');
let altura = document.getElementById('altura');
                
let mensagem;
let quadro;

//Calculo do IMC
var imc = [parseFloat(peso.value / Math.pow(altura.value / 100, 2)).toFixed(2)];

//Resultado
if(imc < 18.5){
    mensagem = "Situação: Magresa";
}else 
                
    if(imc >= 18.5 && imc < 25.0){
        mensagem = "Situação: Normal";
        quadro = "#00FF7F";
                    
}else{
    mensagem = "Situação: SobrePeso";
    quadro = "#FFA07A";
}

var chartGraph = new Chart(ctx_bar, {
    type: 'bar',
    data: {
        labels: ['IMC'],
        datasets: [{
            label: mensagem,
            data: imc,
            borderWidth: 2,
            borderColor: 'rgba(77,166,253,0.85)',
            backgroundColor: quadro
        }]
    },
                    
    options: {
        scales: {
            ticks: {
                beginAtZero: true
            }
        }
    }
});