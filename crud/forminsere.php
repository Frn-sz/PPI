<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>Cadastro de biografia:</h1>
    <form action = "insere.php" method = "post" enctype="multipart/form-data">
        <p>Apelido: <input type = "text" name="apelido"></p>
        <p>Nome verdadeiro: <input type = "text" name="nome"></p>
        <p>Data de Nascimento: <input type = "date" name="dataNasc"></p>
        <p>Data de Falecimento: <input type = "date" name="dataFal"></p>
        <p>Local de Nascimento: <input type = "text" name="localNas"></p>
        <p>Local de Nascimento: <input type = "text" name="localFal"></p>
        <p>Pais: <input type = "text" name="pais"></p>
        <p>Pessoas famosas na família: <input type = "text" name="pesFamosa"></p>
        <p>Grupo Social: <input type = "text" name="gpSocial"></p>
        <p>Formação: <input type = "text" name="formacao"></p>
        <p>Profissão: <input type = "text" name="profissao"></p>
        <p>Área de conhecimento: <input type = "text" name="areac"></p>
        <p>Mudança de grupo social: <input type = "text" name="mudancagp"></p>
        <p>Evento Histórico:  <input type = "text" name="eventoHist"></p>
        <p>Raça e Gênero <input type = "text" name="racaGen"></p>
        <p>Contribuição: <input type = "text" name="contribuicao"></p>
        <p>Legado Permanente: <input type = "text" name="legadoPerm"></p>
        <p>Ato Político: <input type = "text" name="atoPoli"></p>
        <p>Ideias: <input type = "text" name="ideias"></p>
        <p>Frases marcantes: <input type = "text" name="frase"></p>
        <p>Referências: <input type = "text" name="referencias"></p>
        <p>Imagem: <input type = "file" name = "arquivo"></p>
        <p><input type = "reset" value="Redefinir"></p>
        <p><input type = "submit" value = "Enviar"></p>
    </form>
</body>
</html>