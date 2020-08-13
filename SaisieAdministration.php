
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
	<?php 
	require_once("entete.php");
	 ?>
	
<div class=" col-md-6 col-xs-12 col-md-offset-3 container  spacer ">
	<div class=" panel panel-default">
		<div class="panel-heading">Saisie Administration</div>
		<div class="panel-body"> 
           <form method="post" action="EnregistAdministration.php">
           	<div class="form-group" >
           	<label class="control-label">Identifiant:</label>
           	<input type="text" name="ID_Dirct" class="form-control">
           	</div>
           <div class="form-group" >
           	<label class="control-label">Nom:</label>
           	<input type="text" name="Nom" class="form-control">
           	</div>
           	<div class="form-group" >
           	<label class="control-label">Service:</label>
           	<input type="text" name="Service" class="form-control">
           	</div>
           	<div class="form-group" >
           	<label class="control-label">Niveau Batiment:</label>
           	<input type="text" name="NivBat" class="form-control">
           	</div>
            <div class="form-group" >
            <label class="control-label">Bureau:</label>
            <input type="text" name="Bureau" class="form-control">
            </div>
            <div class="form-group" >
            <label class="control-label">Téléphone:</label>
            <input type="text" name="Tel" class="form-control">
            </div>	
           	<div>
           	<button type="submit">Enregistrer</button>	
           	</div>
           	
           </form>
		  </div>
	</div>

</div> 	
</body>
</html>