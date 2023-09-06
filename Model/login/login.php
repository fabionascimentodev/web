<?php
require '../config.php';
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

mysqli_select_db($con,$dbname);
try {
    $query = "SELECT * FROM Login INNER JOIN Funcionario ON Login.Funcionario_cod_matricula = Funcionario.cod_matricula WHERE login = '$usuario' AND senha = '$senha' ";

    $resultado = mysqli_query($con, $query);

    if ($resultado === false) {
        throw new Exception('Erro na consulta: ' . mysqli_error($con));
    }

    if (mysqli_num_rows($resultado) === 1) {
        $row = mysqli_fetch_array($resultado);
        $data = array('status' => 'success', 'message' => 'Login realizado com sucesso.');
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['idUsuario'] = $row["login"];
        setcookie('UserLogin', $usuario, time() + (86400 * 30), '/');
    } else {
        $data = array('status' => 'error', 'message' => 'Email ou senha incorretos.');
    }

    echo json_encode($data);
    
} catch (Exception $e) {
    $errorData = array('status' => 'error', 'message' => 'Erro interno: ' . $e->getMessage());
    echo json_encode($errorData);
}

mysqli_close($con);
?>
