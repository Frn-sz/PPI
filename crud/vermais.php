
<?php 
     include_once "conexao.php";
     $id = $_GET ['id'];
     $sql = "SELECT * FROM `biografias` WHERE id=$id";
     $resultado = mysqli_query ($conexao,$sql);
     $biografia = mysqli_fetch_assoc($resultado);
    ?>

    <title><?= $biografia['apelido']?></title>
    <?php require_once "../cabecalho.php"?>

<body>
    <main class="container">
    <br><br>
    <img class="right" src = <?= "'../imagens/$biografia[foto]' width = '200'";?>>
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
    
    <button class = "btn-floating brown darken-4"><a href="../arquivos/<?= $biografia['arquivo'];?>" download="<?=$biografia['arquivo'];?>"><i class = "material-icons">file_download</i></a></button>
    <a href="biografias.php">Voltar</a>
</main>
</body>

<?php require_once "../rodape.php"?>