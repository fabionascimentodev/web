//abrir e fechar as telas modal
function acao(){
    let modal = document.querySelector('.modal')
    modal.style.display = 'block';
    preencherSeletor();
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
    preencherSeletor()
}
function fecharAlt(){
    let modalAlte = document.querySelector('.modalAlte')
    modalAlte.style.display = 'none';
}
function cancelarAlt(){
  let modalAlte = document.querySelector('.modalAlte')
    modalAlte.style.display = 'none';
}

//Chama o função para carregar a tabela
window.addEventListener('load', function() {
    
    requisaoSelecionarCategoria();
});
