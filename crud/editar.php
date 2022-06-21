<?php
    include "conexao.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `biografias` WHERE id=$id";
    $result = mysqli_query($conexao, $sql);
    $info = mysqli_fetch_assoc($result);
  ?>

    <title><?= $info['apelido'] ?> </title>

    <?php require_once "../cabecalho.php" ?>
  
<body>
    <main class= "container">
        <h1> Edição de obras:</h1>
        <form action = "edita.php" method = "post" enctype="multipart/form-data">
        <p>Apelido: <input type = "text" name="apelido" value = <?= $info['apelido']?>></p>
        <p>Nome verdadeiro: <input type = "text" name="nome" value = <?= $info['nome']?>></p>
        <p>Área de conhecimento: 
            
        <select name = "areac">

            <option value = "Física">Física</option>
            <option value = "Sociologia">Sociologia</option>
            <option value = "História">História</option>

        </select></p>
       
      
        <input id= "dataNasc" type = "date" name="dataNasc" value = <?= $info['dataNas']?>></p>
        <input id= "dataFal" type = "date" name="dataFal" value = <?= $info['dataFal']?>></p>
        <p>Local de nascimento: <input type = "text" name="localNas" value = <?= $info['localNas']?>></p>
        <p>Local de nascimento: <input type = "text" name="localFal" value = <?= $info['localFal']?>></p>
        <p>Pais: <input type = "text" name="pais" value = <?= $info['pais']?>></p>
        <p>Grupo social: <input type = "text" name="gpSocial" value = <?= $info['gpSocial']?>></p>
        <p>Pessoas famosas na família: <input type = "text" name="pesFamosa" value = <?= $info['pesFamosa']?>></p>
        <p>Formação: <input type = "text" name="formacao" value = <?= $info['formacao']?>></p>
        <p>Profissão: <input type = "text" name="profissao" value = <?= $info['profissao']?>></p>
        <p>Mudança de grupo social: <input type = "text" name="mudancaGp" value = <?= $info['mudancaGp']?>></p>
        <p>Evento histórico:  <input type = "text" name="eventoHist" value = <?= $info['eventoHist']?>></p>
        <p>Raça e gênero: <textarea class = "materialize-textarea" name="racaGen" ><?= $info['racaGen']?></textarea></p>
        <p>Contribuições: <textarea class = "materialize-textarea"  name="contribuicao"  ><?= $info['contribuicao']?></textarea></p>
        <p>Legado permanente: <textarea class = "materialize-textarea"  name="legadoPerm"><?= $info['legadoPerm']?></textarea></p>
        <p>Ato político: <textarea  class = "materialize-textarea" name="atoPoli"  ><?= $info['atoPoli']?></textarea></p>
        <p>Ideias: <textarea  class = "materialize-textarea"  name="ideias"><?= $info['ideias']?></textarea></p>
        <p>Frases marcantes: <input type = "text" name="frase" value = <?= $info['apelido']?>></p>
        <p>Referências: <textarea class = "materialize-textarea"  name="referencias"> <?= $info['referencias']?></textarea></p>
        <div class="file-field input-field">
      <div class="btn brown darken-4">
        <span><i class = "material-icons">add_a_photo</i></span>
        <input type="file" name = "foto">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Adicione uma foto">
      </div>
    </div>
    <div class="file-field input-field">
      <div class="btn brown darken-4">
        <span><i class = "material-icons">upload_file</i></span>
        <input type="file" name = "arquivo">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Adicione um documento"  name = "arquivo">
      </div>
    </div>
    <div class="row">
        <div class="col offset-s6">
    <a class="btn-floating  waves-effect waves-light brown darken-4"><i class="material-icons">restart_alt</i></a>
      
        <button class="btn-floating waves-effect waves-light brown darken-4" type="submit" name="action">
        <i class="material-icons right">check</i>
        </button>
        </div>
        </div>
        <input type = "hidden" name = "id" value = "<?=$info['id']?>">

    </form>
</main>
</body>

<?php require_once "../rodape.php"?>
