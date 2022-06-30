<?php

session_start();

include('../conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql1 = "SELECT email FROM usuarios WHERE email = '$email";
$result = mysqli_query($conexao,$sql1);
if($result = false){
    die("E-mail já existe");
}
$sql2 = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome','$email','$senha')";
var_dump($sql2);
$result2 = mysqli_query($conexao,$sql2);

if($result2){
    $_SESSION['id_usuario'] = mysqli_insert_id($conexao);
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    header("Location:../crud/index.php");
}
?>