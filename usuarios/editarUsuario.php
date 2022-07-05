<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id_usuario'])){
    header("location:../crud");
}
$id_usuario = $_SESSION['id_usuario'];
?>