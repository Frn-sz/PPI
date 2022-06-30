<?php
if(!isset($_SESSION)){
    session_start();
}
$url = $_SERVER['HTTP_REFERER'];


session_destroy();
header("Location:$url");
?>