<?php
    require '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //join para selecionar funcionario que mais pediu
    
	$query = "Select distinct func.nome, count(func.nome) as total from Detalhepedido as detPed
                inner join Pedidos as ped on ped.idPedidos = detPed.Pedidos_idPedidos
                     inner join Funcionario as func on func.cod_matricula = ped.Solicitado_Funcionario_cod_matricula 
                         group by func.nome;"; 

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