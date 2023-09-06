//abrir e fechar as telas modal
function acao(){
    let modal = document.querySelector('.modal')
    modal.style.display = 'block';
}
function fechar(){
    let modal = document.querySelector('.modal')
    modal.style.display = 'none';
} 
function cancelar(){
  let modal = document.querySelector('.modal')
  modal.style.display = 'none';
}
function acaoAlt(){
    let modalAlte = document.querySelector('.modalAlte')
    modalAlte.style.display = 'block';
}
function fecharAlt(){
    let modalAlte = document.querySelector('.modalAlte')
    modalAlte.style.display = 'none';
}
function cancelarAlt(){
  let modalAlte = document.querySelector('.modalAlte')
    modalAlte.style.display = 'none';
}

//cadastro
var cadastro = [];

$(document).ready(function () {
  $("#cadastrar").click(function () {

    console.log("cadastrado");

  if ($("#nome").val().trim() != "" &&
      $("#categoria").val().trim() != "" &&
      $("#patrimonio").val().trim() != "" &&
      $("#descricao").val().trim() != "" 
  ){
      var apelido = $("#nome").val();
      var categoria = $("#categoria").val();
      var descricao = $("#descricao").val();
      var numPatrimonio = $("#patrimonio").val();
 

      cadastro.push(numPatrimonio);
      cadastro.push(apelido);
      cadastro.push(categoria);
      cadastro.push(descricao);


    //   $("#nome").val("");
    //   $("#cargo").val("");


      alert("Cadastrado com sucesso!");
      const table = document.getElementById("tablefunc");
      while (table.rows.length > 1) {
      table.deleteRow(1);
    }
      preencherTabela(cadastro);

//fechar tela modal automatico depois de cadastrar
      fechar(); 

    } else {
        
        if ($("#nome").val().trim() == "") {
        alert("NOME não preenchido");
      } else if ($("#categoria").val().trim() == "") {
        alert("CATEGORIA não preenchido");
      } else if ($("#descricao").val().trim() == "") {
        alert("DESCRIÇÃO não preenchido"); 
      } else if ($("#patrimonio").val().trim() == "") {
        alert("NÚMERO DE PATRIMÔNIO não preenchido");
      } 
    }
  });
});

//preencher a tabela
function preencherTabela(data) {
    var tbody = $("#tablefunc");
    var n = 0;
    for (var i = 0; i < data.length; i += 4) {
      var tr = $("<tr>");
      n++;
      tr.append("<td>" + n + "</td>");
      tr.append("<td>" + data[i] + "</td>");
      tr.append("<td>" + data[i + 1] + "</td>");
      tr.append("<td>" + data[i + 2] + "</td>");
      //console.log("numº: ", data[i],data[i + 2]);
      tr.append("<td>" + data[i + 3] + "</td>");
      //console.log(data[i + 3]);
      tr.append('<td> <button type="button" onclick="excluiRegistro(' + data[i].replaceAll(/[.-]/g,"") + ', this )">Excluir</button> </td>');
      clearInputs();
      tbody.append(tr); 
    }
}

//excluir 
function excluiRegistro(item, botao) {
  const rowIndex = botao.parentNode.parentNode.rowIndex;

    var pos = Buscar(item);

    cadastro.splice(pos, 1);
    cadastro.splice(pos, 1);
    cadastro.splice(pos, 1);
    cadastro.splice(pos, 1);
    cadastro.splice(pos, 1);
    cadastro.splice(pos, 1);

    console.log(rowIndex);
    document.getElementById("tablefunc").deleteRow(rowIndex);
}
function Buscar(item) {
    return cadastro.indexOf(item);
}

function clearInputs (){
    var inputs = document.querySelectorAll('input');
    inputs.forEach(singleInput => singleInput.value = '');
}

//para segurar a ultima busca da posicao da matricula
var AtuMatricula = 0;

// buscar
$(document).ready(function () {
  $('#buscar').click(function () {
    var matricula = $("#atualizarMat").val();
    var AtuMatricula = Buscar(matricula);

    if (cadastro.length > 0) {
      if (AtuMatricula >= 0) {
        $("#atualizarNom").val(cadastro[AtuMatricula + 1]);
        $("#atualizarCar").val(cadastro[AtuMatricula + 2]);

        alert("MATRÍCULA Inexistente!");
      }
    } else {
      alert("Sem Registro!");
    }
  });
});

//alterar
$(document).ready(function () {
  $('#alterar').click(function () {
    if($('#atualizarMat').val().trim() != "" && 
       $('#atualizarNom').val().trim() != "" &&
       $('#atualizarCar').val().trim() != ""  ){

      var pos = Buscar($('#atualizarMat').val());

      cadastro[AtuMatricula] = $('#atualizarMat').val().trim();
      cadastro[AtuMatricula + 1] = $('#atualizarNom').val().trim();
      cadastro[AtuMatricula + 2] = $('#atualizarCar').val().trim();
 

      console.log(AtuMatricula +" "+AtuMatricula+1);
      console.log(cadastro[AtuMatricula] +" "+cadastro[AtuMatricula+1]);

      $("#atualizarMat").val("");
      $("#atualizarNom").val("");
      $("#atualizarCar").val("");
 

      alert("Alterado com Sucesso!");

      fecharAlt()

    } else {
      alert("Formulário incompleto!");
    }
  });
});