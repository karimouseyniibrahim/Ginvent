<?php 
require_once("Conn.php");
 ?>
<?php
 
$ps=$pdo->prepare("INSERT INTO  `administration`(`ID_Dirct`, `Nom`, `Service`, `NivBat`, `Bureau`, `Tel`) VALUES(:ID_Dirct,:Nom,:Service,:NivBat,:Bureau,:Tel)"); 
$ps->execute($_POST);
print_r ($_POST);
header("location:Administration.php");
 ?>