<?php
 $Numero=$_GET['num'];
 require_once("Conn.php");
 $ps=$pdo->prepare("SELECT * FROM Materiels WHERE num=?");
 $params=array($Numero);
 $ps->execute($params);
 $Materiel=$ps->fetch();

 ?>



<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
	
<div class=" col-md-6 col-xs-12 col-md-offset-3 container  spacer ">
	<div class=" panel panel-default">
		<div class="panel-heading">Saisie des Matériels</div>
		<div class="panel-body"> 
           <form method="post" action="UpdateMateriel.php">
           	<div class="form-group" >
           	<label class="control-label">Numéro:</label>
           	<input type="text" name="Numero" value="<?=$Materiel['num']?>" class="form-control">
           	</div>
           <div class="form-group" >
           	<label class="control-label">Désignation du Matériel:</label>
           	<input type="text" name="Designation" value="<?php echo($Materiel['DesM'])?>" class="form-control">
           	</div>
           	<div class="form-group" >
           	<label class="control-label">Immatriculation:</label>
           	<input type="text" name="Immatriculation" value="<?php echo($Materiel['Imm'])?>" class="form-control">
           	</div>
           	<div class="form-group" >
           	<label class="control-label">Marque:</label>
           	<input type="text" name="marque" value="<?php echo($Materiel['Marq'])?>" class="form-control">
           	</div>	
            <div class="form-group" >
            <label class="control-label">Année d'acquisition:</label>
            <input type="text" name="annee_acquisition" value="<?php echo($Materiel['AnAcq'])?>" class="form-control">
            </div>  
            <div class="form-group" >
            <label class="control-label">Etat:</label>
            <input type="text" name="Etat" value="<?php echo($Materiel['Etat'])?>" class="form-control">
            </div>  
            <div class="form-group" >
            <label class="control-label">Source de Financement:</label>
            <input type="text" name="Source_financement" value="<?php echo($Materiel['SourFin'])?>" class="form-control">
            </div>  
            <div class="form-group" >
            <label class="control-label">Projet ou Autre:</label>
            <input type="text" name="Projet_Autre" value="<?php echo($Materiel['ProjAut'])?>" class="form-control">
            </div>  
           	<div>
           	<button type="submit">Enregistrer</button>	
           	</div>
           	
           </form>
		  </div>
	</div>

</div> 	
	
<?php require_once("entete.php"); ?>
</body>
</html>