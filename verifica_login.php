<?php
session_start();
if($_SESSION['usuario']){ 
    header('index.php');
    exit();
}
?>