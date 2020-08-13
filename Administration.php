
<?php
require_once ("Conn.php");
$req="SELECT * FROM administration";
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
			<div class="panel-heading">Administration</div>
			<div class="panel-body">
				<table class="table table-striped">
 
		<thead>
			<tr>
				<th>Identifiant</th><th>Nom</th><th>Service</th><th>Niveau Batiment</th><th>Bureau</th><th>Téléphone</th>
			</tr>
		</thead>
		<tbody>
		<?php while($administration=$ps->fetch()) { ?>
	<tr>
		<td><?php echo ($administration['ID_Dirct'])?></td>
		<td><?php echo ($administration['Nom'])?></td>
		<td><?php echo ($administration['Service'])?></td>
		<td><?php echo ($administration['NivBat'])?></td>
		<td><?php echo ($administration['Bureau'])?></td>
		<td><?php echo ($administration['Tel'])?></td>
		<td><a href="EditAdministration.php?Identifiant=<?=($administration['ID_Dirct'])?>">Modifier</a></td>
		<td><a onclick="return confirm('Etes vous sur..?');" href="SupprimeAdministration.php?Identifiant=<?=($administration['ID_Dirct'])?>">Supprimer</a></td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
			</div>
		</div>
	</div>
</body>
</html>