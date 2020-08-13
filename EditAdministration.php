<?php
 $Identifiant=$_GET['Identifiant'];
 require_once("Conn.php");
 $ps=$pdo->prepare("SELECT * FROM administration WHERE ID_Dirct=?");
 $params=array($Identifiant);
 $ps->execute($params);
 $administration=$ps->fetch();

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
 <?php require_once("entete.php"); ?> 
<div class=" col-md-6 col-xs-12 col-md-offset-3 container  spacer ">
  <div class=" panel panel-default">
    <div class="panel-heading">Saisie Administration</div>
    <div class="panel-body"> 
           <form method="post" action="UpdateAdministration.php">
            <div class="form-group" >
            <label class="control-label">Identifiant:</label>
            <input type="text" name="ID_Dirct" value="<?php echo($administration['ID_Dirct'])?>" class="form-control">
            </div>
           <div class="form-group" >
            <label class="control-label">Nom:</label>
            <input type="text" name="Nom" value="<?php echo($administration['Nom'])?>" class="form-control">
            </div>
            <div class="form-group" >
            <label class="control-label">Service:</label>
            <input type="text" name="Service" value="<?php echo($administration['Service'])?>" class="form-control">
            </div>
            <div class="form-group" >
            <label class="control-label">Niveau Batiment:</label>
            <input type="text" name="NivBat" value="<?php echo($administration['NivBat'])?>" class="form-control">
            </div> 
            <div class="form-group" >
            <label class="control-label">Bureau:</label>
            <input type="text" name="Bureau" value="<?php echo($administration['Bureau'])?>" class="form-control">
            </div> 
            <div class="form-group" >
            <label class="control-label">Téléphone:</label>
            <input type="text" name="Tel" value="<?php echo($administration['Tel'])?>" class="form-control">
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