<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="css/pedido.css">
     <link rel="shortcut icon"href="imagens/Logo.png" type="image/Logo.png">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="..//View//imagens//logo2.png" type="image/x-icon"/>
</head>
<body>
    

<header class="menu-horizontal">
      <nav class="nav-bar">
          <div class="logo"> 
          </div>
          <div class="nav-list">
              <ul>
                <img src="img//icons-usuário.png" class="icons" alt="">
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

        <li class="item-menu ped">
            <a href="#">
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
        <li class="item-menu down" >
            <a href="produto.php">
                <span class="icon"><i class="bi bi-folder-plus"></i></span>
                <span class="txt-link">Produtos</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-info-circle"></i></span>
                <span class="txt-link">Ajuda</span>
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

       <h1>Pedidos</h1>
       <button>Adicionar</button>
      <div class="quadro"></div>
   </div>

   </header>


   <script src="js//dash.js" defer></script>

</body>
</html>