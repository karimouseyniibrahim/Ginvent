<?php

try{
	$Connection ='mysql:host=localhost;dbname=ginvent';
	$pdo = new PDO ($Connection, 'root', 'Admin123' );
}
catch (PDOExeption $e){
	$msg = 'ERREUR PDO dans' . $e->getMessage();
	die ($msg);}
?>
