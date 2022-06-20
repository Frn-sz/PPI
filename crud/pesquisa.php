<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
 <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <main>
<?php


include "../conexao.php";
include "../cabecalho.php";

$pesquisa = "%" . trim($_GET['busca']) . "%";

$sql = "SELECT * FROM `biografias` WHERE nome LIKE '$pesquisa' OR apelido LIKE '$pesquisa'";

$result = mysqli_query($conexao,$sql);

$infos = mysqli_fetch_all($result, MYSQLI_BOTH);

echo "<table class='highlight responsive-table container'><thead><th> Imagem </th> <th>Nome</th><th>Período de vida</th><th>Área de conhecimento</th><th colspan = '4'> Operações </th> </thead><tbody>";
foreach($infos as $chave => $info){
   echo "<tr><td><img src = '../imagens/$info[foto]' width = '200'>" . "</td>";
   echo "<td>" . $info['nome'] . "</td>";
   echo "<td>" . $info['dataNas'] . "&nbsp/&nbsp" . $info['dataFal'] . "</td>";
   echo "<td>" . $info['areac'] . "</td>";
  
   echo "<td><a href = 'vermais.php?id=$info[id]' class='btn-floating btn-medium waves-effect waves-light grey lighten-3'><i class='material-icons black-text'>search</i> </a> ";
   echo "<a href = 'editar.php?id=$info[id]' class='btn-floating btn-medium waves-effect waves-light grey lighten-3'> <i class='material-icons black-text'>create</i> </a> ";
   echo "<a href='#' onclick='confirmacao($info[id])' class='btn-floating btn-medium waves-effect waves-light grey lighten-3'> <i class='material-icons black-text'>delete</i> </a></td>" ;
   
}

echo "</tbody></table>"
?>
    </main>
</body>


<script type="text/javascript" src="../materialize/js/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

 </html>