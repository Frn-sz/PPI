<?php
    include "conexao.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM `biografias` WHERE id=$id";

    $result = mysqli_query($conexao, $sql);

    $infos = mysqli_fetch_assoc($result);

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
        <p>Apelido: <input type = "text" name="apelido" value = <?= $info['apelido']?> ></p>
        <p>Nome verdadeiro: <input type = "text" name="nome"  value = <?= $info['nome']?>></p>
        <p>Área de conhecimento: <select name = "areac">
            <option value = "Física">Física</option>
            <option value = "Sociologia">Sociologia</option>
            <option value = "História">História</option>
        </select></p>
        <input type="hidden" name = "id" value = <?= $info['id']; ?>>
        <p>Data de Nascimento: <input type = "date" name="dataNas" value = <?= $info['dataNas']?>></p>
        <p>Data de Falecimento: <input type = "date" name="dataFal" value = <?= $info['dataFal'] ?>></p>
        <p>Local de Nascimento: <input type = "text" name="localNas" value = <?= $info['localNas']?>></p>
        <p>Local de Nascimento: <input type = "text" name="localFal" value = <?= $info['localFal']?>></p>
        <p>Pais: <input type = "text" name="pais" value =  <?= $info['pais']?>></p>
        <p>Pessoas famosas na família: <input type = "text" name="pesFamosa" value = <?= $info['pesFamosa']?>></p>
        <p>Grupo Social: <input type = "text" name="gpSocial"value =  <?= $info['gpSocial']?>></p>
        <p>Formação: <input type = "text" name="formacao" value = <?= $info['formacao']?>></p>
        <p>Profissão: <input type = "text" name="profissao"value =  <?= $info['profissao']?>></p>
        <p>Mudança de grupo social: <input type = "text" name="mudancaGp"value =  <?= $info['mudancaGp']?>></p>
        <p>Evento Histórico:  <input type = "text" name="eventoHist"value =  <?= $info['eventoHist']?>></p>
        <p>Raça e Gênero: <textarea class = "materialize-textarea"  name="racaGen" value = <?= $info['racaGen'] ?> ></textarea></p>
        <p>Contribuição: <textarea class = "materialize-textarea"  name="contribuicao" value = <?= $info['racaGen']?>></textarea></p>
        <p>Legado Permanente: <textarea class = "materialize-textarea"  name="legadoPerm" value = <?= $info['legadoPerm']?>></textarea></p>
        <p>Ato Político: <textarea class = "materialize-textarea"  name="atoPoli" value = <?= $info['atoPoli']?>></textarea></p>
        <p>Ideias: <textarea class = "materialize-textarea"  name="ideias" value = <?= $info['racaGen']?>></textarea></p>
        <p>Frases marcantes: <input type = "text" name="frase" value = <?= $info['frase'] ?>></p>
        <p>Referências: <textarea class = "materialize-textarea"  name="referencias" value = <?= $info['referencias']?>></textarea></p>
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