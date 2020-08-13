<?php
 
require_once("Conn.php");
$data=[
    'desm'=>$_POST['Designation'],
    'imm'=>$_POST['Immatriculation'],
    'marq'=>$_POST['marque'],
    'anacq'=>$_POST['annee_acquisition'],
    'etat'=>$_POST['Etat'],
    'sourfin'=>$_POST['Source_financement'],
    'projaut'=>$_POST['Projet_Autre'],
    'num'=>$_POST['Numero']
];
$ps=$pdo->prepare("UPDATE materiels SET DesM =:desm, Imm =:imm, Marq =:marq, AnAcq =:anacq, Etat =:etat, SourFin =:sourfin, ProjAut =:projaut   WHERE num =:num");
 
$ps->execute($data);
 header("location:Materiels.php");  
 ?>