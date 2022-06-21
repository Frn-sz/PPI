<?php

include_once "conexao.php";

if(isset($_FILES['foto'])){
    $ext = strrchr($_FILES['foto']['name'], '.');
    $nomefoto = md5(time()) . $ext;
    $diretorio = "../imagens/";

    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$nomefoto);
}
if(isset($_FILES['arquivo'])){
    $ext2 = strrchr($_FILES['arquivo']['name'], '.');
    $nomearquivo = md5(time()) . $ext2;
    $diretorio2 = "../arquivos/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio2.$nomearquivo);
}


$sql = "INSERT INTO `biografias`( `apelido`, `nome`, `foto`, `dataNas`, `dataFal`, `localNas`, `localFal`, `pais`, `pesFamosa`, `gpSocial`, `formacao`, `profissao`, `areac`, `mudancaGp`, `eventoHist`, `racaGen`, `contribuicao`, `legadoPerm`, `atoPoli`, `ideias`, `frase`, `referencias`, `arquivo`) 
VALUES ('$_POST[apelido]','$_POST[nome]','$nomefoto','$_POST[dataNasc]','$_POST[dataFal]','$_POST[localNas]','$_POST[localFal]',
'$_POST[pais]','$_POST[pesFamosa]','$_POST[gpSocial]','$_POST[formacao]','$_POST[profissao]','$_POST[areac]','$_POST[mudancagp]','$_POST[eventoHist]','$_POST[racagen]','$_POST[contribuicao]',
'$_POST[legadoPerm]','$_POST[atoPoli]','$_POST[ideias]','$_POST[frase]','$_POST[referencias]', '$nomearquivo')";
var_dump($sql);
$result = mysqli_query($conexao, $sql);

if($result){
    header("location:index.php");
}
?>