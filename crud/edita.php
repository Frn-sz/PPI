<?php


include_once "conexao.php";

$id = $_POST['id'];
$sql = "";
//var_dump($_FILES);die;
if ($_FILES['foto']['error'] == 0) {
        
    $ext = strrchr($_FILES['foto']['tmp_name'], '.');
    $nomearquivo = md5(time()) . $ext;
    $diretorio = "../imagens/";
    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$nomearquivo);

    $sql = "UPDATE `biografias` SET `apelido` ='$_POST[apelido]',`nome`='$_POST[nome]',
    `foto`='$nomearquivo',`dataNas`='$_POST[dataNas]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
    `pais`='$_POST[pais]',`pesFamosa`='$_POST[pesFamosa]',`gpSocial`='$_POST[gpSocial]',`formacao`='$_POST[formacao]',`profissao`='$_POST[profissao]',
    `areac`='$_POST[areac]',`mudancaGp`='$_POST[mudancaGp]',`eventoHist`='$_POST[eventoHist]',`racaGen`='$_POST[racaGen]',`contribuicao`='$_POST[contribuicao]',
    `legadoPerm`='$_POST[legadoPerm]',`atoPoli`='$_POST[atoPoli]',`ideias`='$_POST[ideias]',`frase`='$_POST[frase]',`referencias`='$_POST[referencias]' WHERE id=$id";
  
  
}else{

    //$foto = $_POST['foto'];
    
    $sql = "UPDATE `biografias` SET `apelido`='$_POST[apelido]',`nome`='$_POST[nome]',`dataNas`='$_POST[dataNas]',`dataFal`='$_POST[dataFal]',`localNas`='$_POST[localNas]',`localFal`='$_POST[localFal]',
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
