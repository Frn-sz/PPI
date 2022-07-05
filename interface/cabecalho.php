<?php
if(!isset($_SESSION)){
session_start();
}

?>

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

   <style>
span.field-icon {
    float: right;
    position: absolute;
    right: 10px;
    top: 10px;
    cursor: pointer;
    z-index: 2;
}
    </style>
   </head>



<div class="navbar-fixed">
<nav class="brown lighten-2">

    <div class="nav-wrapper container">

      <a href="../crud/index.php" class="brand-logo">Trabalho PPI</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
        <i class= "material-icons">menu</i></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <div class="nav-wrapper">
          <li>
      <form action = "pesquisa.php" method = "get">
        <div class="input-field">
          <input id="search" type="search" name = "busca"  class = "white" placeholder="Busque por um nome">
          <label class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
          <i class="material-icons">close</i>
        </div></li>
      </form>
      
      <?php if(!isset($_SESSION['id_usuario'])){?>
      
      <li><a href = "../usuarios/formCadastro.php">Cadastre-se</a></li>
      <li><a href = "../usuarios/formLogin.php">Entrar</a></li>
      <?php }else{ ?>
        <li><a href = "../usuarios/formEditar.php">Editar meu perfil</a></li>
      <li><a href="../crud/forminsere.php">Cadastrar Biografias</a></li> 
      <li><a href = "../usuarios/logout.php"><i class = "material-icons">logout</i></a></li>

      <?php } ?>
    </div>
      </ul>

    </div>
      </form>
      </ul>
    </div>  
  </nav>
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href='..usuarios/formEditar.php' class = "black-text white">Editar perfil</a></li>
  
  </ul>
        
  <ul id="mobile-demo" class="sidenav">
        <li><a href="../crud/forminsere.php">Cadastrar Biografias</a></li>
      </ul>
</div>




