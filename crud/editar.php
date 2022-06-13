<?php
    include "conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM `biografias` WHERE id=$id";

    $result = mysqli_query($conexao, $sql);

    $infos = mysqli_fetch_assoc($result);

    function puxarinfos($i){
        include "conexao.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM `biografias` WHERE id=$id";
    
        $result = mysqli_query($conexao, $sql);
    
        $infos = mysqli_fetch_assoc($result);

        echo $infos[$i];
    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edição </title>
</head>
<body>
<form action = "edita.php" method = "post" enctype="multipart/form-data">
        <p>Apelido: <input type = "text" name="apelido" value = <?= puxarinfos('apelido')?> ></p>
        <p>Nome verdadeiro: <input type = "text" name="nome"></p>
        <p>Área de conhecimento: <select name = "areac">
            <option value = "Física">Física</option>
            <option value = "Sociologia">Sociologia</option>
            <option value = "História">História</option>
        </select></p>
        
        <p>Data de Nascimento: <input type = "date" name="dataNasc" value = <?= puxarinfos('dataNas')?>></p>
        <p>Data de Falecimento: <input type = "date" name="dataFal" value = <?= puxarinfos('dataFal')?>></p>
        <p>Local de Nascimento: <input type = "text" name="localNas" value = <?= puxarinfos('localNas')?>></p>
        <p>Local de Nascimento: <input type = "text" name="localFal" value = <?= puxarinfos('localFal')?>></p>
        <p>Pais: <input type = "text" name="pais" value =  <?= puxarinfos('pais')?>></p>
        <p>Pessoas famosas na família: <input type = "text" name="pesFamosa" value = <?= puxarinfos('pesFamosa')?>></p>
        <p>Grupo Social: <input type = "text" name="gpSocial"value =  <?= puxarinfos('gpSocial')?>></p>
        <p>Formação: <input type = "text" name="formacao" value = <?= puxarinfos('formacao')?>></p>
        <p>Profissão: <input type = "text" name="profissao"value =  <?= puxarinfos('profissao')?>></p>
        <p>Mudança de grupo social: <input type = "text" name="mudancagp"value =  <?= puxarinfos('mudancaGp')?>></p>
        <p>Evento Histórico:  <input type = "text" name="eventoHist"value =  <?= puxarinfos('eventoHist')?>></p>
        <p>Raça e Gênero <input type = "text" name="racaGen" value = <?= puxarinfos('racaGen')?>></p>
        <p>Contribuição: <input type = "text" name="contribuicao" value = <?= puxarinfos('contribuicao')?>></p>
        <p>Legado Permanente: <input type = "text" name="legadoPerm"value =  <?= puxarinfos('legadoPerm')?>></p>
        <p>Ato Político: <input type = "text" name="atoPoli" value = <?= puxarinfos('atoPoli')?>></p>
        <p>Ideias: <input type = "text" name="ideias" value = <?= puxarinfos('ideias')?>></p>
        <p>Frases marcantes: <input type = "text" name="frase" value = <?= puxarinfos('frase')?>></p>
        <p>Referências: <input type = "text" name="referencias" value = <?= puxarinfos('referencias')?>></p>
        <p>Imagem: <input type = "file" name = "arquivo"></p>
        <p><input type = "reset" value="Desfazer mudanças"></p>
        <p><input type = "submit" value = "Enviar"></p>
    </form>


</body>
</html>