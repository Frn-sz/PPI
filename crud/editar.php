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

 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="UTF-8">
    <title> Edição </title>
</head>
<body>
    <?php require_once "../cabecalho.php" ?>
    
    <main class= "container">
        <h1> Edição de obras:</h1>
<form action = "edita.php" method = "post" enctype="multipart/form-data">
        <p>Apelido: <input type = "text" name="apelido" value = <?= puxarinfos('apelido')?> ></p>
        <p>Nome verdadeiro: <input type = "text" name="nome"  value = <?= puxarinfos('nome')?>></p>
        <p>Área de conhecimento: <select name = "areac">
            <option value = "Física">Física</option>
            <option value = "Sociologia">Sociologia</option>
            <option value = "História">História</option>
        </select></p>
        <input type="hidden" name = "id" value = <?= puxarinfos('id');?>>
        <p>Data de Nascimento: <input type = "date" name="dataNas" value = <?= puxarinfos('dataNas')?>></p>
        <p>Data de Falecimento: <input type = "date" name="dataFal" value = <?= puxarinfos('dataFal')?>></p>
        <p>Local de Nascimento: <input type = "text" name="localNas" value = <?= puxarinfos('localNas')?>></p>
        <p>Local de Nascimento: <input type = "text" name="localFal" value = <?= puxarinfos('localFal')?>></p>
        <p>Pais: <input type = "text" name="pais" value =  <?= puxarinfos('pais')?>></p>
        <p>Pessoas famosas na família: <input type = "text" name="pesFamosa" value = <?= puxarinfos('pesFamosa')?>></p>
        <p>Grupo Social: <input type = "text" name="gpSocial"value =  <?= puxarinfos('gpSocial')?>></p>
        <p>Formação: <input type = "text" name="formacao" value = <?= puxarinfos('formacao')?>></p>
        <p>Profissão: <input type = "text" name="profissao"value =  <?= puxarinfos('profissao')?>></p>
        <p>Mudança de grupo social: <input type = "text" name="mudancaGp"value =  <?= puxarinfos('mudancaGp')?>></p>
        <p>Evento Histórico:  <input type = "text" name="eventoHist"value =  <?= puxarinfos('eventoHist')?>></p>
        <p>Raça e Gênero <input type = "text" name="racaGen" value = <?= puxarinfos('racaGen')?>></p>
        <p>Contribuição: <input type = "text" name="contribuicao" value = <?= puxarinfos('contribuicao')?>></p>
        <p>Legado Permanente: <input type = "text" name="legadoPerm"value =  <?= puxarinfos('legadoPerm')?>></p>
        <p>Ato Político: <input type = "text" name="atoPoli" value = <?= puxarinfos('atoPoli')?>></p>
        <p>Ideias: <input type = "text" name="ideias" value = <?= puxarinfos('ideias')?>></p>
        <p>Frases marcantes: <input type = "text" name="frase" value = <?= puxarinfos('frase')?>></p>
        <p>Referências: <input type = "text" name="referencias" value = <?= puxarinfos('referencias')?>></p>
        <p>Imagem: <input type = "file" name = "arquivo"> </p>
        <p><input type = "reset" value="Desfazer mudanças"></p>
        <p><input type = "submit" value = "Enviar"></p>
        <input type = "hidden" name = "foto" value = <?= $infos['foto']; ?>
    </form>

</main>
<!--aq vai o rodapé-->

<script type="text/javascript" src="../materialize/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
<script> 
  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
</body>
</html>