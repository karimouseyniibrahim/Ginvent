<?php 
require_once("Conn.php");
 ?>
<?php
/* 'designation'=>$_POST['Designation_Materiel'],
    'imm'=>$_POST['Immatriculation'],
    'marque'=>$_POST['Marque'],
    'annee'=>$_POST['Annee_acquisition'],
    'etat'=>$_POST['Etat'], 
    'source'=>$_POST['Source_de_Financement'],
    'projet'=>$_POST['Projet_ou_Autre']*/
 $data=[ 
    $_POST['Designation_Materiel'],
    $_POST['Immatriculation'],
    $_POST['Marque'],
    $_POST['Annee_acquisition'],
    $_POST['Etat'], 
    $_POST['Source_de_Financement'],
    $_POST['Projet_ou_Autre']
 ];
 try{
        $ps=$pdo->prepare("
        INSERT INTO  materiels ( `DesM`, `Imm`, `Marq`, `AnAcq`, `Etat`, `SourFin`, `ProjAut`) 
        VALUES (?, ?, ?, ?, ?, ?, ?) "); 
        $ps->execute($data);
        print_r ($data);
        echo $ps->rowCount();
}
                  
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
header("location:Materiels.php");
 ?>