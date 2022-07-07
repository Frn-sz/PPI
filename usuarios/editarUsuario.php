<?php
if(!isset($_SESSION)){
    session_start();
  
}
if(!isset($_SESSION['id_usuario'])){
    header("location:../crud");
}
if(isset($_FILES['foto'])){
    $ext = strrchr($_FILES['foto']['name'], '.');
    $nomefoto = md5(time()) . $ext;
    $diretorio = "../imagens/";

    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$nomefoto);
}

include('../conexao.php');
$url = $_SERVER['HTTP_REFERER'];
$id_usuario = $_SESSION['id_usuario'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$existe = false;
$sqlemail = "SELECT email FROM usuarios WHERE id_usuario != '$id_usuario'";

$resultSet = mysqli_query($conexao, $sqlemail);
$verificacao = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
foreach($verificacao as $key => $emailbd){
    if($emailbd['email'] == $email){
        $existe = true;

    }
}

if($existe == false){
    if($_FILES['foto']['error'] == 0){
        echo "sas";
$sql = "UPDATE `usuarios` SET `nome`='$nome',`email`='$email',`foto`='$nomefoto' WHERE `id_usuario`='$id_usuario'";
    }else{
      echo "sus";
$sql = "UPDATE usuarios SET email='$email', nome='$nome' WHERE id_usuario='$id_usuario'";

    }}
$result = mysqli_query($conexao,$sql);
var_dump($sql);
if($result){
$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
if($_FILES['foto']['error'] == 0){
$_SESSION['foto'] = $nomefoto;
}
header("location: $url");
}else{
    $_SESSION['mensagem'] = "E-mail já está em uso";
header("location: $url");

}

?>