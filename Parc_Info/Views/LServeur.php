<!DOCTYPE html>
<html>
<head>
	<title>Serveur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="JS/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="LServeur.php">Gestion des serveurs</a></li>
			<li><a href="LServices.php">Gestion des Services</a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
		<div class="panel panel-info">
			<div class="panel-heading">Liste des serveurs</div>
				<div class="panel-body">
					<a href="FAjoutServeur.php" class="btn btn-info">Nouveau serveur</a>
					<table class="table table-bordered table-striped">
						<tr>
							<th>ID serveur</th>
							<th>Nom du serveur</th>
							<th>Adresse IP</th>
							<th>Action</th>
							<th>Action</th>
						</tr>
						<?php
							require_once '../Model/serveurdao.php';
							$result = listserveur();
							while ($tab = mysqli_fetch_assoc($result)) 
							{
								echo "<tr>";
									echo "<td>$tab[idServ]</td>";
									echo "<td>$tab[nomServ]</td>";
									echo "<td>$tab[adripServ]</td>";
									echo "<td><a href='FModifServeur.php?idServ=$tab[idServ]' class='btn btn-info btn-block'>Modifier</a></td>";
									echo "<td><a href='../Controller/TSuppServeur.php?idServ=$tab[idServ]' class='btn btn-warning btn-block' onClick='return confirmation();'>Supprimer</a></td>";
								echo "</tr>";
							}
						?>
					</table>
				</div>
		</div>
	</div>
</body>
</html>