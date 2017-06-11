<?php

session_start();
$_SESSION['fav2']='jeet';
unset($_SESSION['fav']);
header("Cache-Control", "no-store, no-cache, must-revalidate");
header('Location: hello.php');



?>