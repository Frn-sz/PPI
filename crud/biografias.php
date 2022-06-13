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
   <title>Biografias</title>
</head>
<body>
<main>
   <!--Aq eu vou colocar o require_once "cabecalho.php" (dentro do php)-->

   <a href="forminsere.php">Cadastrar biografia</a>
<?php
include_once "conexao.php";


$sql = "SELECT * FROM `biografias`";

$result = mysqli_query($conexao, $sql);

$infos = mysqli_fetch_all($result, MYSQLI_BOTH);
echo "<table border = 1><thead><th> Imagem </th> <th>Nome</th><th>Período de vida</th><th>Área de conhecimento</th><th colspan = '4'> Operações </th> </thead><tbody>";
foreach($infos as $chave => $info){
   echo "<tr><td><img src = '../imagens/$info[foto]' width = '200'>" . "</td>";
   echo "<td>" . $info['nome'] . "</td>";
   echo "<td>" . $info['dataNas'] . "-" . $info['dataFal'] . "</td>";
   echo "<td>" . $info['areac'] . "</td>";
  
   echo "<td><a href = 'vermais.php?id=$info[id]'> Ver Mais </a> / ";
   echo "<a href = 'editar.php?id=$info[id]'> Editar </a> /";
   echo "<a href = '#'> Excluir </a></td></tr>";
   
}

echo "</tbody></table>"
?>
   </main>
   <!--aq vai o rodapé-->

   <script type="text/javascript" src="../materialize/js/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
</body>
</html>