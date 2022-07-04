
<?php 
     include_once "conexao.php";
     $id = $_GET ['id'];
     $sql = "SELECT * FROM `biografias` WHERE id=$id";
     $resultado = mysqli_query ($conexao,$sql);
     $biografia = mysqli_fetch_assoc($resultado);
    ?>

    <title><?= $biografia['apelido']?></title>
    

<body>

<?php require_once "../interface/cabecalho.php"?>

    <main class="container">

    <br><br>
    <div class="row right">
   
    <br><br>
    <div class="col">
    <button class = "btn-floating brown darken-4"><a href="../arquivos/<?= $biografia['arquivo'];?>" download="<?=$biografia['arquivo'];?>"><i class = "material-icons">file_download</i></a></button>
    </div> 
</div>
<div class="row">
    <div class="col s12 m4">
      <div class="card grey lighten-3">
        <div class="card-image">
        <img class = "materialboxed" src = <?= "'../imagens/$biografia[foto]' width = '400'";?>>
        </div>
        <div class="card-content">
        <span class="card-title"><?= $biografia['nome']; ?></span>
    <div class="row">
    Apelido: <?= $biografia['apelido']; ?>
    </div>
    <div class="row ">
    Área do conhecimento: <?= $biografia['areac']; ?> 
    </div>
    <div class="row ">
    Data de nascimento: <?= $biografia['dataNas']; ?> 
    </div>
    <div class="row ">
    Data de falecimento: <?= $biografia['dataFal']; ?> 
    </div>
    <div class="row ">
    Local de nascimento: <?= $biografia['localNas']; ?> 
    </div>
    <div class="row ">
    Local de falecimento: <?= $biografia['localFal']; ?> 
    </div>
    <div class="row ">
    Pais: <?= $biografia['pais']; ?> 
    </div>
    <div class="row ">
    Grupo Social: <?= $biografia['gpSocial']; ?> 
    </div>
    <div class="row ">
    Pessoa famosa na família: <?= $biografia['pesFamosa']; ?> 
    </div>
    <div class="row ">
    Formação: <?= $biografia['formacao']; ?> 
    </div>
    <div class="row ">
    Profissão: <?= $biografia['profissao']; ?> 
    </div>
    <div class="row ">
    Mudança de grupo social: <?= $biografia['mudancaGp']; ?>
    </div>
    <div class="row ">
    Evento histórico: <?= $biografia['eventoHist']; ?> 
    </div>
    <div class="row ">
    Raça e gênero: <?= $biografia['racaGen']; ?> 
    </div>
    <div class="row ">
    Contribuições: <?= $biografia['contribuicao']; ?> 
    </div>
    <div class="row ">
    Legado permanente: <?= $biografia['legadoPerm']; ?> 
    </div>
    <div class="row ">
    Ato político: <?= $biografia['atoPoli']; ?> 
    </div>
    <div class="row ">
    Ideias: <?= $biografia['ideias']; ?> 
    </div>
    <div class="row ">
    Frases marcantes: <?= $biografia['frase']; ?> 
    </div>
    <div class="row ">
    Referências: <?= $biografia['referencias']; ?>
    </div>
        </div>
      </div>
    </div>
  </div>
  
    
    
    <a href="biografias.php">Voltar</a>
</main>
</body>

<?php require_once "../interface/rodape.php"?>