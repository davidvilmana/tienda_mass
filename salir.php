<?php
session_start();
// session_destroy();
$_SESSION['usuario']='David Vilcabana';
header('Location:index.php')
?>