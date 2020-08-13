<?php 
require_once("Conn.php");
 ?>
<?php 
$ps=$pdo->prepare("INSERT INTO `agents`(`Matricule`, `Nom`, `Prenom`, `E-mail`) VALUES(:matricule,:nom,:prenom,:email)");
$ps->execute($_POST);
 
header("location:Agents.php");
 ?>