<script> 
  function confirmacao(id) {
     var resposta = confirm("Deseja remover este documento?");
     if (resposta == true) {
          window.location.href = "excluir.php?id="+id;
     }}
</script>

<?php

include_once "conexao.php";
$sql = "SELECT * FROM `biografias`";
$result = mysqli_query($conexao, $sql);
$infos = mysqli_fetch_all($result, MYSQLI_BOTH);
?>

   <title>Biografias</title>


<body>


<main>
<?php require_once "../interface/cabecalho.php"?>
<div class="container">
   <br>
   <div class=" row">
      <div class="col offset-s6">

      <?php if(isset($_SESSION['id_usuario   '])){ ?>
<a href = "forminsere.php" class="btn-floating waves-effect waves-light brown darken-4"><i class="material-icons">add</i></a>
      <?php } ?>
</div>
   </div>
<?php
include_once "conexao.php";


$sql = "SELECT * FROM `biografias`";

$result = mysqli_query($conexao, $sql);

$infos = mysqli_fetch_all($result, MYSQLI_BOTH);
echo "<table class='highlight responsive-table'><thead><th> Imagem </th> <th>Nome</th><th>Período de vida</th><th>Área de conhecimento</th><th colspan = '4'> Operações </th> </thead><tbody>";
foreach($infos as $chave => $info){
   echo "<tr><td><img src = '../imagens/$info[foto]' width = '200'>" . "</td>";
   echo "<td>" . $info['nome'] . "</td>";
   echo "<td>" . $info['dataNas'] . "&nbsp/&nbsp" . $info['dataFal'] . "</td>";
   echo "<td>" . $info['areac'] . "</td>";
  
   echo "<td><a href = 'vermais.php?id=$info[id]' class='btn-floating btn-medium waves-effect waves-light grey lighten-3'><i class='material-icons black-text'>search</i> </a> ";
  if(isset($_SESSION['id_usuario'])){
   echo "<a href = 'editar.php?id=$info[id]' class='btn-floating btn-medium waves-effect waves-light grey lighten-3'> <i class='material-icons black-text'>create</i> </a> ";
   echo "<a href='#' onclick='confirmacao($info[id])' class='btn-floating btn-medium waves-effect waves-light grey lighten-3'> <i class='material-icons black-text'>delete</i> </a></td>" ;
  }
}

echo "</tbody></table>"
?>
</div>
   </main>
   
</body>

<?php require_once "../interface/rodape.php"?>
