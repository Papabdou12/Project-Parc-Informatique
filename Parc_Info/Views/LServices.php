<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
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
			<div class="panel-heading">Liste des services</div>
				<div class="panel-body">
					<a href="FAjoutServices.php" class="btn btn-info">Nouveau service</a>
					<table class="table table-bordered table-striped">
						<tr>
							<th>ID service</th>
							<th>Nom du service</th>
							<th>Port occupé</th>
							<th>Etat Service</th>
							<th>Serveur associé</th>
							<th>Action</th>
						</tr>
						<?php
							require_once '../Model/servicesdao.php';
							require_once '../Model/serveurdao.php';
							$result = listservices();
							while ($tab = mysqli_fetch_row($result)) 
							{
								$serveur = getserveurbyid($tab[4]);
								$row = mysqli_fetch_assoc($serveur);
								echo "<tr>";
									echo "<td>$tab[0]</td>";
									echo "<td>$tab[1]</td>";
									echo "<td>$tab[2]</td>";
									if ($tab[3] == 0) 
									{
										echo "<td class='alert alert-warning'>Désactivé</td>";
									}
									else
									{
										echo "<td class='alert alert-success'>Activé</td>";
									}
									echo "<td>$row[nomServ]</td>";

									if ($tab[3] == 0) 
									{
										echo "<td><a href='../Controller/TActiver.php?idS=$tab[0]' class='btn btn-success btn-block'>Activer</a ></td>";
									}
									else
									{
										echo "<td><a href='../Controller/TDesactiver.php?idS=$tab[0]' class='btn btn-warning btn-block'>Désactiver</a></td>";
									}
									
								echo "</tr>";
							}
						?>
					</table>
				</div>
		</div>
	</div>
</body>
</html>