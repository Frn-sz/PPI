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
    <h1>Cadastro de biografia:</h1>
    <form action = "insere.php" method = "post" enctype="multipart/form-data">
        <p>Apelido: <input type = "text" name="apelido"></p>
        <p>Nome verdadeiro: <input type = "text" name="nome"></p>
        <p>Data de nascimento: <input type = "date" name="dataNasc"></p>
        <p>Data de falecimento: <input type = "date" name="dataFal"></p>
        <p>Local de nascimento: <input type = "text" name="localNas"></p>
        <p>Local de nascimento: <input type = "text" name="localFal"></p>
        <p>Pais: <input type = "text" name="pais"></p>
        <p>Grupo social: <input type = "text" name="gpSocial"></p>
        <p>Pessoas famosas na família: <input type = "text" name="pesFamosa"></p>
        <p>Formação: <input type = "text" name="formacao"></p>
        <p>Profissão: <input type = "text" name="profissao"></p>
        <p>Área de conhecimento: <input type = "text" name="areac"></p>
        <p>Mudança de grupo social: <input type = "text" name="mudancagp"></p>
        <p>Evento histórico:  <input type = "text" name="eventoHist"></p>
        <p>Raça e gênero <input type = "text" name="racaGen"></p>
        <p>Contribuições: <input type = "text" name="contribuicao"></p>
        <p>Legado permanente: <input type = "text" name="legadoPerm"></p>
        <p>Ato político: <input type = "text" name="atoPoli"></p>
        <p>Ideias: <input type = "text" name="ideias"></p>
        <p>Frases marcantes: <input type = "text" name="frase"></p>
        <p>Referências: <input type = "text" name="referencias"></p>
        <p>Imagem: <input type = "file" name = "arquivo"></p>
        <p><input type = "reset" value="Redefinir"></p>
        <p><input type = "submit" value = "Enviar"></p>
    </form>
    
    <!--aq vai o rodapé-->

   <script type="text/javascript" src="../materialize/js/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
</body>
</html>