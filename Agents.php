
<?php
require_once ("Conn.php");
$req="SELECT * FROM Agents";
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
	
	 
	<div class="  container col-md-12 col-xs-12 spacer ">
		<div class="panel panel-info spacer">
			<div class="panel-heading">liste des Agents</div>
			<div class="panel-body">
				<table class="table table-striped">
 
		<thead>
			<tr>
				<th>Matricule</th><th>Nom</th><th>Prenom</th><th>E-mail</th>
			</tr>
		</thead>
		<tbody>
		<?php while($agent=$ps->fetch()) { ?>
	<tr>
		<td><?php echo ($agent['Matricule'])?></td>
		<td><?php echo ($agent['Nom'])?></td>
		<td><?php echo ($agent['Prenom'])?></td>
		<td><?php echo ($agent['E-mail'])?></td>
		<td><a href="EditAgent.php?Matricule=<?=$agent['Matricule']?>">Modifier</a></td>
		<td><a onclick="return confirm('Etes vous sur..?');" href="SupprimeAgent.php?Matricule=<?=($agent['Matricule'])?>">Supprimer</a></td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
			</div>
		</div>
		
	</div>
	<?php require_once("entete.php") ?>
	header("location: Agents.php");
</body>
</html>