

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
    <title>Formulário de Cadastro</title>
</head>
<body>
<?php require_once "../cabecalho.php"?>
    <main class= "container">
    <center><h3>Cadastro de biografia:</h3></center>

       
        <form action = "insere.php" method = "post" enctype="multipart/form-data">
        <p>Apelido: <input type = "text" name="apelido"></p>
        <p>Nome verdadeiro: <input type = "text" name="nome"></p>
        <p>Área de conhecimento: 
            
        <select name = "areac">

            <option value = "Física">Física</option>
            <option value = "Sociologia">Sociologia</option>
            <option value = "História">História</option>

        </select></p>
       
        <div class="row">
        <div class="input-field col s12">
            <input id= "dataNasc" type = "date" name="dataNasc"></p>
            <label for="dataNasc">Data de nascimento</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
            <input id= "dataFal" type = "date" name="dataFal"></p>
            <label for="dataFal">Data de falecimento</label>
        </div>
        </div>
       
        <p>Local de nascimento: <input type = "text" name="localNas"></p>
        <p>Local de nascimento: <input type = "text" name="localFal"></p>
        <p>Pais: <input type = "text" name="pais"></p>
        <p>Grupo social: <input type = "text" name="gpSocial"></p>
        <p>Pessoas famosas na família: <input type = "text" name="pesFamosa"></p>
        <p>Formação: <input type = "text" name="formacao"></p>
        <p>Profissão: <input type = "text" name="profissao"></p>
        <p>Mudança de grupo social: <input type = "text" name="mudancagp"></p>
        <p>Evento histórico:  <input type = "text" name="eventoHist"></p>
        <p>Raça e gênero: <textarea class = "materialize-textarea" name="racagen"></textarea></p>
        <p>Contribuições: <textarea class = "materialize-textarea"  name="contribuicao"></textarea></p>
        <p>Legado permanente: <textarea class = "materialize-textarea"  name="legadoPerm"></textarea></p>
        <p>Ato político: <textarea  class = "materialize-textarea" name="atoPoli"></textarea></p>
        <p>Ideias: <textarea  class = "materialize-textarea"  name="ideias"></textarea></p>
        <p>Frases marcantes: <input type = "text" name="frase"></p>
        <p>Referências: <textarea class = "materialize-textarea"  name="referencias"></textarea></p>
        <p>Imagem: <input type = "file" name = "arquivo"></p>
        <p><input type = "reset" value="Redefinir"></p>
        <p><input type = "submit" value = "Enviar"></p>
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
<script>
$('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));
</script>
</body>
</html>