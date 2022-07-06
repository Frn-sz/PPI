<?php

session_start();


if(isset($_FILES['foto'])){
    $ext = strrchr($_FILES['foto']['name'], '.');
    $nomefoto = md5(time()) . $ext;
    $diretorio = "../imagens/";

    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$nomefoto);
}

include('../conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql1 = "SELECT email FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conexao,$sql1);

$verificacao = mysqli_fetch_assoc($result);

if(is_null($verificacao)){
    if($_FILES['foto']['error'] == 0){
$sql2 = "INSERT INTO usuarios(nome, email, senha, foto) VALUES ('$nome','$email','$senha', '$nomefoto')";
    }else{
$sql2 = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome','$email','$senha')";
    }
$result2 = mysqli_query($conexao,$sql2);
var_dump($sql2);
if($result2){
    $_SESSION['id_usuario'] = mysqli_insert_id($conexao);
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['foto'] = $nomefoto;
   header("Location:../crud/index.php");
}
}else{
    $_SESSION['mensagem'] = "E-mail já existe";
    header("location:formCadastro.php");
}
?>