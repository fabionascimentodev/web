<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Produtos</title>

    <link rel="stylesheet" href="css/produto.css"/>

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <script src="../Controller/Produto/Produto.js"></script>
    <script src="../Controller/Produto/ModalProduto.js"></script>
     <script src="../Controller/js/validacao.js"></script>
      <script src="../Controller/js/validacao2.js"></script>
      <script src="../Controller/js/validacaoName.js"></script>
      <script src="../Controller/js/validacaoName.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="shortcut icon" href="..//View//imagens//logo2.png" type="image/x-icon"/>
  </head>

  <body>
    <header class="menu-horizontal">
      <nav class="nav-bar">
        <div href="http://lendme.great-site.net/View/dashboard.php">
        <div class="logo" href="http://lendme.great-site.net/View/dashboard.php">
        </div>

        <div class="nav-list">
          <ul>

            <li class="nav-item">
              <a  class="nav-link"></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- menu vertival -->

    <header class="flex">
      <nav class="menu-vertical">
        <div class="btn-expandir"></div>

        <ul>
          <li class="item-menu">
            <a href="dashboard.php">
              <span class="icon"><i class="bi bi-house-door"></i></span>

              <span class="txt-link">Home</span>
            </a>
          </li>

          <li class="item-menu ativo">
            <a href="dashboard.php">
              <span class="icon"><i class="bi bi-columns-gap"></i></span>

              <span class="txt-link">Dashboard</span>
            </a>
          </li>
          <li class="item-menu">
            <a href="pedido.php">
              <span class="icon"><i class="bi bi-box-arrow-in-down"></i></span>

              <span class="txt-link">Pedidos</span>
            </a>
          </li>
          <li class="item-menu func">
            <a href="funcionario.php">
              <span class="icon"><i class="bi bi-people"></i></span>

              <span class="txt-link">Funcionario</span>
            </a>
          </li>
<!--
 <li class="item-menu">
            <a href="produtos.php">
              <span class="icon"><i class="bi bi-folder-plus"></i></span>

              <span class="txt-link">Produtos</span>
            </a>
          </li>
-->
          <li class="item-menu down">
            <a href="produto.php">
              <span class="icon"><i class="bi bi-folder-plus"></i></span>

              <span class="txt-link">Produtos</span>
            </a>
          </li>
        
          <li class="item-menu">
            <a href="#">
              <span class="icon"><i class="bi bi-info-circle"></i></span>

              <span class="txt-link">Sobre</span>
            </a>
          </li>

          <li class="item-menu">
            <a href="../index.php">
              <span class="icon"><i class="bi bi-arrow-bar-left"></i></span>

              <span class="txt-link">Sair</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="show">
        <div class="header-show">
          <h1>Produtos</h1>

          <div class="btn-header-show">
            <button class="btnFunc" onclick="acao()">Cadastrar</button>
            <button class="Alte" onclick="acaoAlt()">Alterar</button>
          </div>
        </div>

        <div class="quadro">
          <table id="tablefunc" class="tablefunc">
            <thead>
              <tr>
                <th class="radius01">Nº</th>

                <th>Cod de Patrimônio</th>

                <th>Nome</th>

                <th>Categoria</th>

                <th>Data</th>

                <!--<th>Telefone</th>-->

                <th class="radius02">Excluir</th>
              </tr>
            </thead>

            <tbody></tbody>
          </table>
        </div>
      </div>
    </header>

    <div class="modalAlte">
      <span onclick="fecharAlt()" class="fechar">&times;</span>

      <div>
        <section class="labelModalAlt">
          <h2>Alterar</h2>

          <div class="centroModalAlt">
            <label for="codPatrimonio"><p>Cod de Patrimônio:</p></label>

            <input
            name="codPatrimonio"
              id="codPatrimonioAlt"
              class="botton"
             type="text" maxlength="10" pattern="([0-9]{3})"

            />

            <button type="buscar" id="buscar">Buscar</button>

            <label for="nome"><p>Nome:</p></label>

            <input
              type="text"
              name="atualizarNom"
              id="atualizarNom"
              class="botton"
            />

           <label for="cargo"><p>Categoria:</p></label>
                    <select class="comboBox" name="choice" id="selectOP_Cargo">
                       <option value="" disabled selected ></option>
                       <option>Notebook</option>
                       <option>Camera</option>
                       <option>Drone</option>
                       <option>Arduino</option>
                       <option>Óculos VR</option>
                       <option>Projetor</option>
                    </select><br><br>

            <label for="data"><p>Data:</p></label>

      <input id="nome" name="nome" type="text" class="botton" onkeypress="return ApenasLetras(event,this);"/>

           <label for="telefone"><p>Telefone:</p></label>

            <input
              type="number"
              id="atualizarTel"
              placeholder="(00) 0 0000-0000"
              class="botton"
            />

            <p><button type="alterar" id="alterar">Alterar</button></p>

            <p>
              <button
                onclick="cancelarAlt()"
                type="cancelarAlt"
                id="cancelarAlt"
              >
                Cancelar
              </button>
            </p>
          </div>
        </section>
      </div>
    </div>

    <div class="modal">
      <span onclick="fechar()" class="fechar">&times;</span>

      <div>
        <section class="labelModal">
          <h2>Cadastro</h2>

          <div class="centroModal">
             <label for="codPatrimonio"><p>Cod de Patrimônio:</p></label>

            <input
            name="codPatrimonio"
              id="codPatrimonio"
              class="botton"
              type="text" maxlength="10" pattern="([0-9]{3})"
             
            />

            <label for="nome"><p>Nome:</p></label>

             <input id="nome" name="nome" type="text" class="botton" onkeypress="return ApenasLetras(event,this);"/>

           <label for="cargo"><p>Categoria:</p></label>
                    <select class="comboBox" name="choice" id="selectOP_Cargo" >
                       <option value="" disabled selected ></option>
                       <option>Notebook</option>
                       <option>Camera</option>
                       <option>Drone</option>
                       <option>Arduino</option>
                       <option>Óculos VR</option>
                       <option>Projetor</option>
                    </select><br><br>

            <label for="data"><p>Data:</p></label>

            <input type="date" name="data" id="data" class="botton" />

            <label for="telefone"><p>Telefone:</p></label>

            <input
              type="number"
              placeholder="(00) 0 0000-0000"
              id="telefone"
              class="botton"
            />

            <p>
              <button onclick="cadastrar()" type="cadastrar" id="cadastrar">
                Cadastrar
              </button>
            </p>

            <p>
              <button onclick="cancelar()" type="cancelar" id="cancelar">
                Cancelar
              </button>
            </p>
          </div>
        </section>
      </div>
    </div>
    <div class="copyright">© Copyright 2023 Senex | Todos os direitos reservados</div>
    <div class="assign"><a href="#">Design by Senex</a></div>

     <!--<script src="js//dash.js" defer></script>-->
  </body>
</html>
