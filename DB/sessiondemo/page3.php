<?php
session_start();
//session_destroy();
unset($_SESSION['x']);
header('location:page2.php');
?>