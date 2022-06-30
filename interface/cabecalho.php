<?php
session_start();
var_dump($_SESSION);
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
   </head>



<div class="navbar-fixed">
<nav class="brown lighten-2">

    <div class="nav-wrapper container">

      <a href="../crud/index.php" class="brand-logo">Trabalho PPI</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
        <i class= "material-icons">menu</i></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          <a href="../crud/forminsere.php">Cadastrar Biografias</a></li>
         <li> <div class="nav-wrapper">
      <form action = "pesquisa.php" method = "get">
        <div class="input-field">
          <input id="search" type="search" name = "busca"  class = "white" placeholder="Busque por um nome">
          <label class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
          <i class="material-icons">close</i>
        </div></li>
      </form>
      <li><a href = "../usuarios/formCadastro.php">Cadastre-se</a></li>
    </div>
      </ul>

    </div>
      </form>
      </ul>
    </div>  
  </nav>

  <ul id="mobile-demo" class="sidenav">
        <li><a href="../crud/forminsere.php">Cadastrar Biografias</a></li>
      </ul>
</div>




