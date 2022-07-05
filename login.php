<?php
session_start();
include('conecta.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from users where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1){
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
    $_SESSION['id'] = $usuario_bd['id'];
    header('location: painel.php');
    exit;
}else{
    $_SESSION['notauth'] = true;
    header('location: index.php');
    exit;

}

?>
