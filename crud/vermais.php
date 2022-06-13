<!DOCTYPE html>
<html lang="pt-br">
<head>
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
</body>
</html>