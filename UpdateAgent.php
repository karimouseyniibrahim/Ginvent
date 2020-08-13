<?php
 
require_once("Conn.php");
$ps=$pdo->prepare("UPDATE `agents` SET `Nom` =:nom, `Prenom` =:prenom, `E-mail` =:email  WHERE `Matricule` =:matricule");
 
$ps->execute($_POST); 
 header("location:Agents.php");


 ?>