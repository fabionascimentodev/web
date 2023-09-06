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

  if ($("#matricula").val().trim() != "" &&
      $("#nome").val().trim() != "" &&
      $("#cargo").val().trim() != "" &&
      $("#departamento").val().trim() != "" &&
      $("#data").val().trim() != "" &&
      $("#telefone").val().trim() != ""
  ){
      var matricula = $("#matricula").val();
      var nome = $("#nome").val();
      var cargo = $("#cargo").val();
      var departamento = $("#departamento").val();
      var data = $("#data").val();
      var telefone = $("#telefone").val();

      cadastro.push(matricula);
      cadastro.push(nome);
      cadastro.push(cargo);
      cadastro.push(departamento);
      cadastro.push(data);
      cadastro.push(telefone);

      $("#matricula").val("");
      $("#nome").val("");
      $("#cargo").val("");
      $("#departamento").val("");
      $("#data").val("");
      $("#telefone").val("");

      alert("Cadastrado com sucesso!");
      const table = document.getElementById("tablefunc");
      while (table.rows.length > 1) {
      table.deleteRow(1);
    }
  }
      preencherTabela(cadastro);

//fechar tela modal automatico depois de cadastrar



function adicionarPedido() {
    
    var solicitante = document.querySelector("#solicitante").value;
    var entreguePor = document.querySelector("#entreguePor").value;
    var turma = document.querySelector("#turma").value;
    var turno = document.querySelector("#turno").value;
    var categoria = document.querySelector("#categoria").value;

    
    var pedidoElement = document.createElement("div");
    pedidoElement.classList.add("pedido");

    
    var pedidoContent = `
      <h3>Pedido:</h3>
      <p>Solicitante: ${solicitante}</p>
      <p>Entregue por: ${entreguePor}</p>
      <p>Turma: ${turma}</p>
      <p>Turno: ${turno}</p>
      <p>Categoria: ${categoria}</p>
    `;

   
    pedidoElement.innerHTML = pedidoContent;

    
    var quadro = document.querySelector("#quadro");
    quadro.appendChild(pedidoElement);

    //fechar tela modal automatico depois de cadastrar
    fechar(); 


  } else {
    if ($("#matricula").val().trim() == "") {
      alert("MATRÍCULA não preenchido");
    } else if ($("#nome").val().trim() == "") {
      alert("NOME não preenchido");
    } else if ($("#cargo").val().trim() == "") {
      alert("CARGO não preenchido");
    } else if ($("#departamento").val().trim() == "") {
      alert("DEPARTAMENTO não preenchido");
    } else if ($("#data").val().trim() == "") {
      alert("DATA não preenchido");
    } else if ($("#telefone").val().trim() == "") {
      alert("TELEFONE não preenchido");
    }
  }
});
});


//preencher a tabela
function preencherTabela(data) {
  var tbody = $("#tablefunc");
  var n = 0;
  for (var i = 0; i < data.length; i += 6) {
    var tr = $("<tr>");
    n++;
    tr.append("<td>" + n + "</td>");
    tr.append("<td>" + data[i] + "</td>");
    tr.append("<td>" + data[i + 1] + "</td>");
    tr.append("<td>" + data[i + 2] + "</td>");
    tr.append("<td>" + data[i + 3] + "</td>");
    tr.append("<td>" + data[i + 4] + "</td>");
    tr.append("<td>" + data[i + 5] + "</td>");
    tr.append('<td> <button type="button" onclick="excluiRegistro(' + data[i].replaceAll(/[.-]/g,"") + ', this )">Excluir</button> </td>');
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
      $("#atualizarDep").val(cadastro[AtuMatricula + 3]);
      $("#atualizarDat").val(cadastro[AtuMatricula + 4]);
      $("#atualizarTel").val(cadastro[AtuMatricula + 5]);
    } else {
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
     $('#atualizarCar').val().trim() != "" && 
     $('#atualizarDep').val().trim() != "" &&       
     $('#atualizarTel').val().trim() != "" ){

    var pos = Buscar($('#atualizarMat').val());

    cadastro[AtuMatricula] = $('#atualizarMat').val().trim();
    cadastro[AtuMatricula + 1] = $('#atualizarNom').val().trim();
    cadastro[AtuMatricula + 2] = $('#atualizarCar').val().trim();
    cadastro[AtuMatricula + 3] = $('#atualizarDep').val().trim(); 
    cadastro[AtuMatricula + 4] = $('#atualizarTel').val().trim();

    console.log(AtuMatricula +" "+AtuMatricula+1);
    console.log(cadastro[AtuMatricula] +" "+cadastro[AtuMatricula+1]);

    $("#atualizarMat").val("");
    $("#atualizarNom").val("");
    $("#atualizarCar").val("");
    $("#atualizarDep").val("");
    $("#atualizarTel").val("");

    alert("Alterado com Sucesso!");

    fecharAlt()

  } else {
    alert("Formulário incompleto!");
  }


});
});

  
