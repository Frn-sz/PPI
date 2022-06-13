<?php


include_once "conexao.php";

$id = $_POST['id'];
var_dump($_FILES['arquivo']);
if($_FILES['arquivo']['error'] == 0){
        
    $ext = strrchr($_FILES['arquivo']['tmp_name'], '.');
    $nomearquivo = md5(time()) . $ext;
    $diretorio = "../imagens/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$nomearquivo);

    $sql = "UPDATE `biografias` SET `apelido` ='$_POST[apelido]',`nome`='$_POST[nome]',
    `foto`='$nomearquivo',`dataNas`='$_POST[dataNas]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
    `pais`='$_POST[pais]',`pesFamosa`='$_POST[pesFamosa]',`gpSocial`='$_POST[gpSocial]',`formacao`='$_POST[formacao]',`profissao`='$_POST[profissao]',
    `areac`='$_POST[areac]',`mudancaGp`='$_POST[mudancaGp]',`eventoHist`='$_POST[eventoHist]',`racaGen`='$_POST[racaGen]',`contribuicao`='$_POST[contribuicao]',
    `legadoPerm`='$_POST[legadoPerm]',`atoPoli`='$_POST[atoPoli]',`ideias`='$_POST[ideias]',`frase`='$_POST[frase]',`referencias`='$_POST[referencias]' WHERE id=$id";
  
    $result = mysqli_query($conexao,$sql);
    if($result){
        header("location:biografias.php");
        }
}

else if($_FILES['arquivo']['error'] != 0){

    $sql = "SELECT `foto` FROM `biografias` WHERE id=$id";
    $result = mysqli_query($conexao, $sql);
    $foto = mysqli_fetch_assoc($result);

    $sql = "UPDATE `biografias` SET `apelido`='$_POST[apelido]',`nome`='$_POST[nome]',`dataNas`='$_POST[dataNas]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
    `pais`='$_POST[pais]',`foto`= '$foto[foto]', `pesFamosa`='$_POST[pesFamosa]',`gpSocial`='$_POST[gpSocial]',`formacao`='$_POST[formacao]',`profissao`='$_POST[profissao]',
    `areac`='$_POST[areac]',`mudancaGp`='$_POST[mudancaGp]',`eventoHist`='$_POST[eventoHist]',`racaGen`='$_POST[racaGen]',`contribuicao`='$_POST[contribuicao]',
    `legadoPerm`='$_POST[legadoPerm]',`atoPoli`='$_POST[atoPoli]',`ideias`='$_POST[ideias]',`frase`='$_POST[frase]',`referencias='$_POST[referencias]' WHERE id=$id";

    if($result){
    header("location:biografias.php") ;
    }
}







?>