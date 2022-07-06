<?php include('../funcoes.php');

include('../conexao.php');
if(!isset($_SESSION)){
    session_start();
}
$puxandoUsuario = "SELECT * FROM usuarios WHERE id_usuario = '$_SESSION[id_usuario]'";
$resultadoUsuario = mysqli_query($conexao, $puxandoUsuario);
$usuario = mysqli_fetch_assoc($resultadoUsuario);

?>

<body>
<main>

<?php include('../interface/cabecalho.php'); ?>
<div class="container">
<form action = "editarUsuario.php" method = "Post">
<div class="row">
        <div class="col s12">
           <h4 style = "color:red"> <?= exibeMensagens() ?> </h4>

        </div>
    </div>
<div class="col s6 ">
        <div class="file-field input-field">
          <div class="btn brown darken-4">
          <span><i class = "material-icons">add_a_photo</i></span>
      <input type="file" name = "foto">
      </div>
    <div class="file-path-wrapper">
    <input class="file-path validate" type="text" placeholder="Adicione uma foto de perfil">
  </div>
</div>
</div>
<div class="row">
        <div class="input-field">
        <input type="text" name="nome" id="nome" class="validate" value="<?= $usuario['nome'] ?>">
        <label for = "nome">Nome</label>
        </div>
    </div>
<div class="row">
<div class="input-field">
        <input type="text" name="email" id="email" class="validate" value="<?= $usuario['email'] ?>">
        <label for = "email">E-mail</label>
        </div>
</div>
<div class="row">
<div class="col offset-s5   ">
<button type="submit" class="btn-large brown darken waves-light waves-effect">Realizar Edição</button>
</div>
</div>


</form>
</div>

</main>
</body>

<?php include('../interface/rodape.php'); ?>