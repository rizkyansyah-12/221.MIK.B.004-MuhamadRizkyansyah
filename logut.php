<?php 
session_start();
if ($_SESSION['pw'] != '123456') {
    header('location:login.php');
}
session_unset();
session_destroy();

header('location:login.php');
?>