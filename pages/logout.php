<?php 
//sessie stoppen en redirecten naar home
session_start();
session_unset();
session_destroy();
header("location: ../index.php");
?>