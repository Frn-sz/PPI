<?php
    include "conexao.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM `biografias` WHERE id=$id";
    $result = mysqli_query($conexao, $sql);
    $info = mysqli_fetch_assoc($result);

    include_once "../funcoes.php";    
    verificandoUsuario();

  ?>

    <title><?= $info['apelido'] ?> </title>

    <?php require_once "../interface/cabecalho.php" ?>
  
    <style type="text/css">

/* label focus color */
.input-field input[type=text]:focus + label {
  color: #4e342e !important;
}
/* label underline focus color */
.input-field input[type=text]:focus {
  border-bottom: 1px solid #4e342e !important;
  box-shadow: 0 1px 0 0 #4e342e !important;
}
/* label focus color */
.input-field input[type=date]:focus + label {
  color: #4e342e !important;
}
/* label underline focus color */
.input-field input[type=date]:focus {
  border-bottom: 1px solid #4e342e !important;
  box-shadow: 0 1px 0 0 #4e342e !important;
}
/* label focus color */
.input-field textarea:focus + label {
  color: #4e342e !important;
}
/* label underline focus color */
.input-field textarea:focus {
  border-bottom: 1px solid #4e342e !important;
  box-shadow: 0 1px 0 0 #4e342e !important;
}

</style>

<body>
    <main class= "container">
        <h1> Edição de obras:</h1>

        <form action = "edita.php" method = "post" enctype="multipart/form-data">

        <div class="row">
                <div class="input-field col s12">
                    <input id="apelido" type="text" name="apelido" value = <?= $info['apelido']?>>
                    <label for="apelido">Apelido</label>
                </div>
            </div>
        
            <div class="row">
                <div class="input-field col s12">
                    <input id="nome" type="text" name="nome" value = <?= $info['nome']?>>
                    <label for="nome">Nome verdadeiro</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
            <select id = "select" name = "areac">
            
            <option value = "Física">Física</option>
            <option value = "Sociologia">Sociologia</option>
            <option value = "História">História</option>

            </select>
            <label for = "select">Área de conhecimento</label>
            </div>
            </div>
       
            <div class="row">
                <div class="input-field col s12">
                    <input id= "dataNasc" placeholder="" type = "date" name="dataNasc" value = <?= $info['dataNas']?>></p>
                    <label for="dataNasc">Data de nascimento</label>
                </div>
            </div>

            <div class="row">
                 <div class="input-field col s12">
                    <input id= "dataFal" placeholder="" type = "date" name="dataFal" value = <?= $info['dataFal']?>></p>
                    <label for="dataFal">Data de falecimento</label>
                </div>
            </div>
       
            <div class="row">
                <div class="input-field col s12">
                    <input id="localNas" type="text" name="localNas" value = <?= $info['localNas']?>>
                    <label for="localNas">Local de nascimento</label>
                </div>
            </div>
        
            <div class="row">
                <div class="input-field col s12">
                    <input id="localFal" type="text" name="localFal" value = <?= $info['localFal']?>>
                    <label for="localFal">Local de falecimento</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="pais" type="text" name="pais" value = <?= $info['pais']?>>
                    <label for="pais">Pais</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="gpSocial" type="text" name="gpSocial" value = <?= $info['gpSocial']?>>
                    <label for="gpSocial">Grupo Social</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="pesFamosa" type="text" name="pesFamosa" value = <?= $info['pesFamosa']?>>
                    <label for="pesFamosa">Pessoas famosas na família</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="formacao" type="text" name="formacao" value = <?= $info['formacao']?>>
                    <label for="formacao">Formação</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="profissao" type="text" name="profissao" value = <?= $info['profissao']?>>
                    <label for="profissao">Profissão</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="mudancagp" type="text" name="mudancagp" value = <?= $info['mudancaGp']?>>
                    <label for="mudancagp">Mudança de grupo social</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="eventoHist" type="text" name="eventoHist" value = <?= $info['eventoHist']?>>
                    <label for="eventoHist">Evento histórico</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="racagen" class = "materialize-textarea" name="racagen"><?= $info['racaGen']?></textarea>
                    <label for="racagen">Raça e gênero</label>
                </div>
            </div>
        
            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="contribuicao" type="text" name="contribuicao"><?= $info['contribuicao']?></textarea>
                    <label for="contribuicao">Contribuições</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="legadoPerm" type="text" name="legadoPerm"><?= $info['legadoPerm']?></textarea>
                    <label for="legadoPerm">Legado permanente</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="atoPoli" type="text" name="atoPoli"><?= $info['atoPoli']?></textarea>
                    <label for="atoPoli">Ato político</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="ideias" type="text" name="ideias"><?= $info['ideias']?></textarea>
                    <label for="ideias">Ideias</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="frase" type="text" name="frase" value = <?= $info['apelido']?>>
                    <label for="frase">Frases marcantes</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="referencias" type="text" name="referencias"><?= $info['referencias']?></textarea>
                    <label for="referencias">Referências</label>
                </div>
            </div>

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

<?php require_once "../interface/rodape.php"?>
