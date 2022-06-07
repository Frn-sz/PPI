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
   echo "<a href = 'editar.php'> Editar </a> /";
   echo "<a href = '#'> Excluir </a></td></tr>";
   
}

echo "</tbody></table>"
?>