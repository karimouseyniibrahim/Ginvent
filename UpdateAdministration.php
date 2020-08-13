<?php

 
require_once("Conn.php");
$ps=$pdo->prepare("UPDATE `administration` SET  `Nom` =:Nom, `Service` =:Service, `NivBat` =:NivBat, `Bureau` =:Bureau,`Tel` =:Tel WHERE `ID_Dirct` =:ID_Dirct");
 
$ps->execute($_POST);
header("location:Administration.php");


 ?>