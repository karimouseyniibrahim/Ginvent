<?php
$Matricule=$_GET["Matricule"];
require_once("conn.php");
$ps=$pdo->prepare("DELETE FROM agents WHERE Matricule=?");
$params=array($Matricule);
$ps->execute($params);
header("location:Agents.php");
?>s