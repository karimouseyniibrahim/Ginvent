<?php
$Identifiant=$_GET["Identifiant"];
require_once("conn.php");
$ps=$pdo->prepare("DELETE FROM administration WHERE ID_Dirct=?");
$params=array($Identifiant);
$ps->execute($params);
header("location:Administration.php");
?>s