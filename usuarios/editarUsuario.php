<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id_usuario'])){
    header("location:../crud");
}
include('../conexao.php');
$id_usuario = $_SESSION['id_usuario'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$existe = false;
$sqlemail = "SELECT email FROM usuario WHERE id!='$id_usuario'";
$resultSet = mysqli_query($conexao, $sqlemail);
$verificacao
$sql = "UPDATE usuarios SET email='$email', nome='$nome' WHERE id_usuario='$id_usuario'";
?>