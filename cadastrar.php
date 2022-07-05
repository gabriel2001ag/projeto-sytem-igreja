<?php
session_start();
include('conecta.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$igreja = mysqli_real_escape_string($conexao, trim($_POST['igreja']));
$cargo = mysqli_real_escape_string($conexao, trim($_POST['cargo']));
$usuario  = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha  = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


$sql = "SELECT COUNT(*) as total FROM users WHERE usuario = '$usuario'";

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] ==1) {
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro.php');
    exit;
}
$sql = "insert into users (nome, igreja, cargo,  usuario, senha) values ('$nome', '$igreja', '$cargo', '$usuario', '$senha')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = TRUE;

}

$conexao->close();

header('Location: cadastro.php');
exit;

?>