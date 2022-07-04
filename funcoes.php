<?php
function exibeMensagens() {
    if (isset($_SESSION['mensagem'])) {
        $msg = $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        return $msg;
    }
}
function verificandoUsuario(){
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        
        header("Location:../crud/");
  
    }
  }
?>