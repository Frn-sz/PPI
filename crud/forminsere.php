

    <title>Formulário de Cadastro</title>

    <?php require_once "../cabecalho.php"?>

<body>

    <main class= "container">
    <h3 class="center-align">Cadastro de biografia:</h3>

       
        <form action = "insere.php" method = "post" enctype="multipart/form-data">

        <div class="row">
                <div class="input-field col s12">
                    <input id="apelido" type="text" name="apelido">
                    <label for="apelido">Apelido</label>
                </div>
            </div>

        <div class="row">
                <div class="input-field col s12">
                    <input id="nome" type="text" name="nome">
                    <label for="nome">Nome verdadeiro</label>
                </div>
            </div>
        
        <div class="input-field col s12">    
            <select name = "areac">

            <option value = "Física">Física</option>
            <option value = "Sociologia">Sociologia</option>
            <option value = "História">História</option>

            </select>
            <label>Área de conhecimento</label>
         </div>
       
            <div class="row">
                <div class="input-field col s12">
                    <input id= "dataNasc" placeholder="" type = "date" name="dataNasc"></p>
                    <label for="dataNasc">Data de nascimento</label>
                </div>
            </div>
             <div class="row">
                 <div class="input-field col s12">
                    <input id= "dataFal" placeholder="" type = "date" name="dataFal"></p>
                    <label for="dataFal">Data de falecimento</label>
                </div>
            </div>
       
            <div class="row">
                <div class="input-field col s12">
                    <input id="localNas" type="text" name="localNas">
                    <label for="localNas">Local de nascimento</label>
                </div>
            </div>
        
            <div class="row">
                <div class="input-field col s12">
                    <input id="localFal" type="text" name="localFal">
                    <label for="localFal">Local de falecimento</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="pais" type="text" name="pais">
                    <label for="pais">Pais</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="gpSocial" type="text" name="gpSocial">
                    <label for="gpSocial">Grupo Social</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="pesFamosa" type="text" name="pesFamosa">
                    <label for="pesFamosa">Pessoas famosas na família</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="formacao" type="text" name="formacao">
                    <label for="formacao">Formação</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="profissao" type="text" name="profissao">
                    <label for="profissao">Profissão</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="mudancagp" type="text" name="mudancagp">
                    <label for="mudancagp">Mudança de grupo social</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="eventoHist" type="text" name="eventoHist">
                    <label for="eventoHist">Evento histórico</label>
                </div>
            </div>
       
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="racagen" class = "materialize-textarea" name="racagen"></textarea>
                    <label for="racagen">Raça e gênero</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="contribuicao" type="text" name="contribuicao"></textarea>
                    <label for="contribuicao">Contribuições</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="legadoPerm" type="text" name="legadoPerm"></textarea>
                    <label for="legadoPerm">Legado permanente</label>
                </div>
            </div>
    
            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="atoPoli" type="text" name="atoPoli"></textarea>
                    <label for="atoPoli">Ato político</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="ideias" type="text" name="ideias"></textarea>
                    <label for="ideias">Ideias</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="frase" type="text" name="frase">
                    <label for="frase">Frases marcantes</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea class="materialize-textarea" id="referencias" type="text" name="referencias"></textarea>
                    <label for="referencias">Referências</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                  <p>Imagem: <input id="arquivo" type="file" name="arquivo"></p>
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
        
      
    </form>

</main>
</body>


<?php require_once "../rodape.php"?>
