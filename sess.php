<?php
session_start();
$_SESSION['pinn'] =$_GET['pinn'];
$_SESSION['attribute'] = $_GET['q'];
header('location:index.php?q='.md5("_home"));
 ?>
