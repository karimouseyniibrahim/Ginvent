
<?php
require_once ("Conn.php");
$req="SELECT * FROM materiels";
$ps=$pdo->prepare($req);
$ps->execute(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
	<?php require_once("entete.php"); ?>
	
	 
	<div class="  container col-md-12 col-xs-12 spacer ">
		<div class="panel panel-info spacer">
			<div class="panel-heading">liste des Matériels</div>
			<div class="panel-body">
				<table class="table table-striped">
 
		<thead>
			<tr>
				<th>num</th><th>Désignation du matériel</th><th>Immatriculation</th><th>Marque</th><th>Année d'acquisition</th><th>Etat</th><th>Source de Financement</th><th>Projet ou Autre</th>
			</tr>
		</thead>
		<tbody>
		<?php while($materiel=$ps->fetch()) { ?>
	<tr>
		<td><?php echo ($materiel['num'])?></td>
		<td><?php echo ($materiel['DesM'])?></td>
		<td><?php echo ($materiel['Imm'])?></td>
		<td><?php echo ($materiel['Marq'])?></td>
		<td><?php echo ($materiel['AnAcq'])?></td>
		<td><?php echo ($materiel['Etat'])?></td>
		<td><?php echo ($materiel['SourFin'])?></td>
		<td><?php echo ($materiel['ProjAut'])?></td>
		<td><a href="EditMateriel.php?num=<?=$materiel['num']?>">Modifier</a></td>
		<td><a onclick="return confirm('Etes vous sur..?');" href="SupprimeMateriel.php ?num=<?=$materiel['num']?>">Supprimer</a></td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
			</div>
		</div>	
	</div>
</body>
</html>