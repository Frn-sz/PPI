<?php
if(!isset($_SESSION)){
    session_start();
}
include('../conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conexao,$sql);
$usuario = mysqli_fetch_assoc($result);

if(password_verify($senha, $usuario['senha'])){
    $_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['foto'] = $usuario['foto'];
    header("Location:../crud/index.php");
}else{
    die("Não foi possível realizar login");
}
?>