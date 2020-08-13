<?php
 $Matricule=$_GET['Matricule'];
 require_once("Conn.php");
 $ps=$pdo->prepare("SELECT * FROM agents WHERE Matricule=?");
 $params=array($Matricule);
 $ps->execute($params);
 $agent=$ps->fetch();

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
		<div class="panel-heading">Saisie des Agents</div>
		<div class="panel-body"> 
           <form method="post" action="UpdateAgent.php">
           	<div class="form-group" >
           	<label class="control-label">Matricule:</label>
           	<input type="text" name="matricule" value="<?php echo($agent['Matricule'])?>" class="form-control">
           	</div>
           <div class="form-group" >
           	<label class="control-label">Nom:</label>
           	<input type="text" name="nom" value="<?php echo($agent['Nom'])?>" class="form-control">
           	</div>
           	<div class="form-group" >
           	<label class="control-label">Prenom:</label>
           	<input type="text" name="prenom" value="<?php echo($agent['Prenom'])?>" class="form-control">
           	</div>
           	<div class="form-group" >
           	<label class="control-label">E-mail:</label>
           	<input type="text" name="email" value="<?php echo($agent['E-mail'])?>" class="form-control">
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