
$(document).ready(function () {
  $("#cadastrar").click(function () {

      var matricula = $("#matricula").val().trim(); 
      var nome = $("#nome").val().trim();
      var cargo = $("#cargo").val();
      var data =  $("#data").val().trim();
      var telefone = $("#telefone").val().trim();


      if (matricula != "" &&
       nome != "" &&
       cargo != "" &&
       data != "" &&
       telefone != ""
  ){
      $("#matricula").val("");
      $("#nome").val("");
      $("#cargo").val("");
      $("#data").val("");
      $("#telefone").val("");

      cargo = 1;
      $.ajax({
            url: './../Model/funcionario/CadastrarFuncionario.php',
            method: 'post',
            dataType: 'json',
            data: {
                matricula: matricula,
                nome: nome,
                cargo: cargo,
                data: data,
                telefone: telefone,
                
            },
            success: function(data) {
                
                 if(data.status != "error"){        
                    const table = document.getElementById("tablefunc");
                    while (table.rows.length > 1) {
                    table.deleteRow(1);
                    }
                    requisaoSelecionarFuncionario();
                    
                    //fechar tela modal automatico depois de cadastrar
                        fechar();
                 }else{
                    alert("Erro ao cadastrar");
                 }       
            
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                
            }
        });
     
    
    } else {
      if ($("#matricula").val().trim() == "") {
        alert("MATRÍCULA não preenchido");
      } else if ($("#nome").val().trim() == "") {
        alert("NOME não preenchido");
      } else if ($("#cargo").val().trim() == "") {
        alert("CARGO não preenchido");
      } else if ($("#data").val().trim() == "") {
        alert("DATA não preenchido");
      } else if ($("#telefone").val().trim() == "") {
        alert("TELEFONE não preenchido");
      }
    }
  });
});



//excluir 
function excluiRegistro(item, botao) {
  const rowIndex = botao.parentNode.parentNode.rowIndex;

    document.getElementById("tablefunc").deleteRow(rowIndex);
}


//PreencherSeletorModal
function preencherSeletor() {
    
     $.ajax({
            url: './../Model/funcionario/SelecionarCargo.php',
            method: 'post',
            dataType: 'json',
      
            success: function(data) {
                console.log(data);
                 if(data.status != "error"){        
                     var _option = $("#selectOP_Cargo");
                    for (var i = 0; i < data.length; i += 2) {
                        _option.append('<option value="' + data[i] + '">'+ data[i+1] + '</option>');  
                    }
                }
            
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
            }
        });

}


//SelecionarFuncionarios
function requisaoSelecionarFuncionario() {

 $.ajax({
            url: './../Model/funcionario/SelecionarFuncionario.php',
            method: 'post',
            dataType: 'json',
      
            success: function(data) {
                if(data.status != "error"){        
                     
                      console.log(data);
                      preencherTabela(data);
                }
            
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
            }
        });


}


//preencher a tabela, com botao excluir
function preencherTabela(data) {
    var tbody = $("#tablefunc");
    var n = 0;
   
    for (var i = 0; i < data.length; i += 5) {
      var tr = $("<tr>");
      
      n++;
      tr.append("<td>" + n + "</td>");
      tr.append("<td>" + data[i] + "</td>");
      tr.append("<td>" + data[i + 1] + "</td>");
      tr.append("<td>" + data[i + 2] + "</td>");
      tr.append("<td>" + data[i + 3] + "</td>");
      tr.append("<td>" + data[i + 4] + "</td>");
      tr.append('<td> <button type="button" class="excluirFunc" onclick="excluiRegistro(' + data[i] + ', this )">Excluir</button> </td>');
      tbody.append(tr);
    }
}


function excluiRegistro(matricula,botao) {
    const rowIndex = botao.parentNode.parentNode.rowIndex;

    $.ajax({
        url: './../Model/funcionario/DeletarFuncionario.php',
        method: "POST",
        data: { matricula: matricula },
        success: function(data) {
            console.log(data);
            if (data.status != "error") {
                document.getElementById('tablefunc').deleteRow(rowIndex);
                alert("Registro excluído com sucesso!");
            } else {
                alert("Erro ao excluir o registro!");
            }
        }
    });
}
