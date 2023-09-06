<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="../Controller/Dashboard/ProdutoMaisPedido.js"></script>
    <script src="../Controller/Dashboard/FuncionarioMaisPediu.js"></script>
     <script src="../Controller/Dashboard/QuantidadeProduto.js.js"></script>
     <script src="../Controller/Dashboard/TurnoMaisPediu.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="..//View//imagens//logo2.png" type="image/x-icon"/>
</head>
<body>

<header class="menu-horizontal">
      <nav class="nav-bar">
          <div class="logo">
           <img  src="../View//imagem//Logo.png" alt="">
           
          </div>
          <div class="nav-list">
              <ul>
                <img src="img//icons-usuário.png" class="icons" alt="">
                 <i class="bi bi-person"></i>
                  <li class="nav-item"><a href="index.html" class="nav-link">Maison</a></li>
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
            <a href="#">
                <span class="icon"><i class="bi bi-house-door"></i></span>
                <span class="txt-link">Home</span>
            </a>
        </li>

        <li class="item-menu ativo">
            <a href="#">
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
                <span class="txt-link">Funcionários</span>
            </a>
        </li>
        <!--
        <li class="item-menu">
            <a href="produtos.php">
                <span class="icon"></i></span>
                <span class="txt-link">Produtos</span>
            </a>
        </li>-->

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

       <h1>Dashboard</h1>
      
      <div class="quadro">
      <div>
       <canvas id="myChart"></canvas>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          requisaoSelecionarProdutoMaisPedido(); 
        }); 
      </script>
      </div>


      <div class="quadro2">
      <div>
       <canvas id="myChart2" ></canvas>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          requisaoSelecionarFuncionarioMaisPediu(); 
             }); 
    </script>

      
      </div>
      <div class="quadro3">
      <div>
       <canvas id="myChart3"></canvas>
      </div>
      <script>
   document.addEventListener('DOMContentLoaded', function() {
          requisaoSelecionarQuantidadeProduto();
             }); 
</script>

      
      </div>
      <div class="quadro4">
      <div>
       <canvas id="myChart4"></canvas>
      </div>
      <script>
  document.addEventListener('DOMContentLoaded', function() {
          requisaoSelecionarTurnoMaisPediu();
             });
</script>

      
      </div>
   </div>

   </header>



</body>
</html>