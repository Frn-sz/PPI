<?php


include_once "conexao.php";

$id = $_POST['id'];
$sql = "";

$ext = strrchr($_FILES['foto']['name'], '.');
$nomefoto = md5(time()) . $ext;
$diretorio = "../imagens/";
move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$nomefoto);

$ext2 = strrchr($_FILES['arquivo']['name'], '.');
$nomearquivo = md5(time()) . $ext2;
$diretorio2 = "../arquivos/";
move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio2.$nomearquivo);

if ($_FILES['foto']['error'] == 0 and $_FILES['arquivo']['error'] == 0) {
        
   
    $sql = "UPDATE `biografias` SET `apelido` ='$_POST[apelido]',`nome`='$_POST[nome]',
    `foto`='$nomefoto',`dataNas`='$_POST[dataNasc]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
    `pais`='$_POST[pais]',`pesFamosa`='$_POST[pesFamosa]',`gpSocial`='$_POST[gpSocial]',`formacao`='$_POST[formacao]',`profissao`='$_POST[profissao]',
    `areac`='$_POST[areac]',`mudancaGp`='$_POST[mudancaGp]',`eventoHist`='$_POST[eventoHist]',`racaGen`='$_POST[racaGen]',`contribuicao`='$_POST[contribuicao]',
    `legadoPerm`='$_POST[legadoPerm]',`atoPoli`='$_POST[atoPoli]',`ideias`='$_POST[ideias]',`frase`='$_POST[frase]',`referencias`='$_POST[referencias]', `arquivo` = '$nomearquivo' WHERE id=$id";
  
  
}else if($_FILES['foto']['error'] == 0 and $_FILES['arquivo']['error'] != 0){

    //$foto = $_POST['foto'];
    
    $sql = "UPDATE `biografias` SET `apelido`='$_POST[apelido]',`nome`='$_POST[nome]',`foto`='$nomefoto', `dataNas`='$_POST[dataNasc]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
    `pais`='$_POST[pais]', `pesFamosa`='$_POST[pesFamosa]',`gpSocial`='$_POST[gpSocial]',`formacao`='$_POST[formacao]',`profissao`='$_POST[profissao]',
    `areac`='$_POST[areac]',`mudancaGp`='$_POST[mudancaGp]',`eventoHist`='$_POST[eventoHist]',`racaGen`='$_POST[racaGen]',`contribuicao`='$_POST[contribuicao]',
    `legadoPerm`='$_POST[legadoPerm]',`atoPoli`='$_POST[atoPoli]',`ideias`='$_POST[ideias]',`frase`='$_POST[frase]',`referencias`='$_POST[referencias]' WHERE id=$id";
    //var_dump($foto);
    
}else if($_FILES['foto']['error'] != 0 and $_FILES['arquivo']['error'] == 0){

    //$foto = $_POST['foto'];
    
    $sql = "UPDATE `biografias` SET `apelido`='$_POST[apelido]',`nome`='$_POST[nome]',`dataNas`='$_POST[dataNasc]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
    `pais`='$_POST[pais]', `pesFamosa`='$_POST[pesFamosa]',`gpSocial`='$_POST[gpSocial]',`formacao`='$_POST[formacao]',`profissao`='$_POST[profissao]',
    `areac`='$_POST[areac]',`mudancaGp`='$_POST[mudancaGp]',`eventoHist`='$_POST[eventoHist]',`racaGen`='$_POST[racaGen]',`contribuicao`='$_POST[contribuicao]',
    `legadoPerm`='$_POST[legadoPerm]',`atoPoli`='$_POST[atoPoli]',`ideias`='$_POST[ideias]',`frase`='$_POST[frase]',`referencias`='$_POST[referencias]', `arquivo` = '$nomearquivo' WHERE id=$id";
    //var_dump($foto);
    
}else{

    //$foto = $_POST['foto'];
    
    $sql = "UPDATE `biografias` SET `apelido`='$_POST[apelido]',`nome`='$_POST[nome]',`dataNas`='$_POST[dataNasc]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
    `pais`='$_POST[pais]', `pesFamosa`='$_POST[pesFamosa]',`gpSocial`='$_POST[gpSocial]',`formacao`='$_POST[formacao]',`profissao`='$_POST[profissao]',
    `areac`='$_POST[areac]',`mudancaGp`='$_POST[mudancaGp]',`eventoHist`='$_POST[eventoHist]',`racaGen`='$_POST[racaGen]',`contribuicao`='$_POST[contribuicao]',
    `legadoPerm`='$_POST[legadoPerm]',`atoPoli`='$_POST[atoPoli]',`ideias`='$_POST[ideias]',`frase`='$_POST[frase]',`referencias`='$_POST[referencias]' WHERE id=$id";
    //var_dump($foto);
    
}


$result = mysqli_query($conexao,$sql);
echo mysqli_error($conexao);
if($result){
    header("location:index.php");
}
