<?php require_once("includes/header.php"); ?>
<?php include("includes/session.php"); ?>


<?php 


$session->logout();
redirect("login.php");



 ?>