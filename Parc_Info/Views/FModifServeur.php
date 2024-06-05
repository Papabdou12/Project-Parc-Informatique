<?php
	require_once '../Model/serveurdao.php';
	if (isset($_GET['idServ'])) 
	{
		$idServ = $_GET['idServ'];
		$result = getserveurbyid($idServ);
		$tab = mysqli_fetch_row($result);

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajout serveur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="LServeur.php">Gestion des serveurs</a></li>
			<li><a href="LServices.php">Gestion des services</a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
		<div class="panel panel-info">
			<div class="panel-heading">Formulaire de modification de serveur</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/TModifServeur.php">
					<div class="form-group">
						<label>ID serveur</label>
						<input type="text" name="idServ" readonly="" class="form-control" required="" value="<?= $tab[0] ?>">
					</div>
					<div class="form-group">
						<label>Nom serveur</label>
						<input type="text" name="nomServ" class="form-control" required="" value="<?= $tab[1] ?>">
					</div>
					<div class="form-group">
						<label>Adresse IP</label>
						<input type="text" name="adripServ" class="form-control" value="<?= $tab[2] ?>">
					</div>
					<div class="form-group">
				<input type="submit" name="envoyer" value="Envoyer" class="btn btn-success">
				<input type="reset" name="annuler" value="Annuler" class="btn btn-danger">
			</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>