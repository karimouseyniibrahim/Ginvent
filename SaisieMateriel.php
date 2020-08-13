
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
    <div class="panel-heading">Saisie des Matériels</div>
    <div class="panel-body"> 
           <form method="post" action="EnregistMateriel.php">
            <div class="form-group" >
            <label class="control-label">Numéro:</label>
            <input type="text" name="Numero" class="form-control">
            </div>
           <div class="form-group" >
            <label class="control-label">Désignation du Matériel:</label>
            <input type="text" name="Designation_Materiel" class="form-control">
            </div>
            <div class="form-group" >
            <label class="control-label">Immatriculation:</label>
            <input type="text" name="Immatriculation" class="form-control">
            </div>
            <div class="form-group" >
            <label class="control-label">Marque:</label>
            <input type="text" name="Marque" class="form-control">
            </div>
             <div class="form-group" >
            <label class="control-label">Année d'acquisition:</label>
            <input type="date" name="Annee_acquisition" class="form-control">
            </div> 
             <div class="form-group" >
            <label class="control-label">Etat:</label>
            <input type="text" name="Etat" class="form-control">
            </div> 
             <div class="form-group" >
            <label class="control-label">Source de Financement:</label>
            <input type="text" name="Source_de_Financement" class="form-control">
            </div> 
             <div class="form-group" >
            <label class="control-label">Projet ou Autre:</label>
            <input type="text" name="Projet_ou_Autre" class="form-control">
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