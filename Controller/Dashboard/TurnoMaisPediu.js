function requisaoSelecionarTurnoMaisPediu() {

    $.ajax({
               url: './../Model/Relatorio/TurnoMaisPediu.php',
               method: 'post',
               dataType: 'json',
         
               success: function(data) {
                   if(data.status != "error"){        
               
                    i=0;
                    const label =[];
                    const values = [];
                    for (let i = 0; i < data.length; i += 2) {
                       
                        label.push(data[i]); 
                        values.push(data[i + 1]);     
                        
                        }
                        
                        preencherGraficoTMP(label, values)

                   }
               
               },
               error: function(xhr, status, error) {
                   console.log(xhr.responseText);
                   console.log(error);
               }
           });
   
   
   }


function preencherGraficoTMP(label, values) {
const ctx4 = document.getElementById('myChart4');

  new Chart(ctx4, {
    type: 'bar',
    data: {
      labels: label,
      datasets: [{
        label: 'Turno que mais pediu',
        data: values,
        borderWidth: 1
        
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}
