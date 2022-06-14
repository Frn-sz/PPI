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
    <title>Biografia</title>
</head>
<body>
    <?php 
     include_once "conexao.php";
     $id = $_GET ['id'];
     $sql = "SELECT * FROM `biografias` WHERE id=$id";
     $resultado = mysqli_query ($conexao,$sql);
     $biografia = mysqli_fetch_assoc($resultado);
    ?>
<?php require_once "../cabecalho.php"?>
    <main class="container">
        <br><br>
    <img src = <?= "'../imagens/$biografia[foto]' width = '200'";?>>
    <p>Apelido: <?= $biografia['apelido']; ?> </p>
    <p>Nome verdadeiro: <?= $biografia['nome']; ?> </p>
    <p>Área do conhecimento: <?= $biografia['areac']; ?> </p>
    <p>Data de nascimento: <?= $biografia['dataNas']; ?> </p>
    <p>Data de falecimento: <?= $biografia['dataFal']; ?> </p>
    <p>Local de nascimento: <?= $biografia['localNas']; ?> </p>
    <p>Local de falecimento: <?= $biografia['localFal']; ?> </p>
    <p>Pais: <?= $biografia['pais']; ?> </p>
    <p>Grupo Social: <?= $biografia['gpSocial']; ?> </p>
    <p>Pessoa famosa na família: <?= $biografia['pesFamosa']; ?> </p>
    <p>Formação: <?= $biografia['formacao']; ?> </p>
    <p>Profissão: <?= $biografia['profissao']; ?> </p>
    <p>Mudança de grupo social: <?= $biografia['mudancaGp']; ?> </p>
    <p>Evento histórico: <?= $biografia['eventoHist']; ?> </p>
    <p>Raça e gênero: <?= $biografia['racaGen']; ?> </p>
    <p>Contribuições: <?= $biografia['contribuicao']; ?> </p>
    <p>Legado permanente: <?= $biografia['legadoPerm']; ?> </p>
    <p>Ato político: <?= $biografia['atoPoli']; ?> </p>
    <p>Ideias: <?= $biografia['ideias']; ?> </p>
    <p>Frases marcantes: <?= $biografia['frase']; ?> </p>
    <p>Referências: <?= $biografia['referencias']; ?> </p>
    <a href="biografias.php">Voltar</a>

</main>

<!--aq vai o rodapé-->

<script type="text/javascript" src="../materialize/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
</body>
</html>