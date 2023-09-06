<?php
    require '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //View para selecionar todas as info do produto mais pedido
    
	$query = "Select * from Produto_Mais_Pedido"; //ISSO NÃO É UMA TABELA, É UMA VIEW

	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["nome"]);
            array_push($dados,$row["total"]);
          
        }
      
        
    }else{
        $dados["status"] = "error";
    }
 
    echo json_encode($dados);

    mysqli_close($con);

?>