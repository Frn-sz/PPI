<?php

include_once "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM `biografias` WHERE id=$id";


$result = mysqli_query($conexao, $sql);
if($result){
    header("location:index.php");
}

?>