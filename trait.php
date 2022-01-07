<?php 

session_start();
$_SESSION['player1']=$_POST['p1'];
$_SESSION['player2']=$_POST['p2'];
 
header('Location: main.php');
?>
