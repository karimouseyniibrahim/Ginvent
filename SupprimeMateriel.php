<?php
$num=$_GET["num"];
require_once("conn.php");
$ps=$pdo->prepare("DELETE FROM materiels WHERE num=?");
$params=array($num);
$ps->execute($params);
header("location:Materiels.php");
?>