<?php
session_start();
include('conecta.php');
$data = $_POST['data'];
$presentes = trim($_POST['presentes']);
$visitantes = trim($_POST['visitantes']);
$criancas  = trim($_POST['criancas']);
$pregador  = trim($_POST['pregador']);
$pastores = trim($_POST['pastores']);
$igreja = trim($_POST['igreja']);
$observacao = trim($_POST['observacao']);
$usuario = $_SESSION['nome'];
$id_user = $_SESSION['id'];


$sql = "insert into relatorio (data, presentes, visitantes, pregador, pastores_presentes, criancas, usuario, id_user, igreja, observacao) values ('$data', '$presentes', '$visitantes', '$pregador', '$pastores', '$criancas', '$usuario', '$id_user', '$igreja', '$observacao')";

//YYYYYmysqli_query($conexao, $sql);
if($conexao->query($sql) === TRUE) {
    $_SESSION['status_relatorio'] = TRUE;
    header('Location: painel.php');

}else {
    echo 'erro ao enviar';
};

$conexao->close();


exit;

?>