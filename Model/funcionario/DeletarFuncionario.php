<?php

require_once '../config.php';
$matricula = $_POST['matricula'];
$dados =[];

mysqli_select_db($con,$dbname);


$sql_Telefone = "DELETE FROM telefone WHERE matricula_Funcionario = $matricula";
$sql_Funcionario = "DELETE FROM funcionario WHERE cod_matricula = $matricula";


if ($con->query($sql_Funcionario) === TRUE && $con->query($sql_Telefone) === TRUE) {
    $dados["status"] = "deletado";

} else {
    
    $dados["status"] = "error";
}

echo json_encode($dados);

mysqli_close($con);
?>