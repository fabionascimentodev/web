<?php
    require_once '../config.php';
    header("Content-Type: application/json");

    $dados =[];

    mysqli_select_db($con,$dbname);

    //join para selecionar turno que mais pediu
    
	$query = "Select distinct ped.turno, count(ped.turno) as total from Detalhepedido as detPed
inner join Pedidos as ped on ped.idPedidos = detPed.Pedidos_idPedidos
group by ped.turno;";

	$resultado = mysqli_query($con,$query);
    
	if(mysqli_num_rows($resultado) > 0){

        while($row = mysqli_fetch_array($resultado)){
            
            array_push($dados,$row["nome"]); //posição par
            array_push($dados,$row["total"]); //posição ímpar
          
        }
      
        
    }else{
        $dados["status"] = "error";
    }
 
    echo json_encode($dados);

    mysqli_close($con);

?>