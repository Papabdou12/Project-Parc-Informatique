<!DOCTYPE html>
<html>
<head>
	<title>Ajout service</title>
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
			<div class="panel-heading">Formulaire d'ajout de service</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/TAjoutServices.php">
					<div class="form-group">
						<label>Nom service</label>
						<input type="text" name="nomS" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Port service</label>
						<input type="text" name="portS" class="form-control">
					</div>
					<div class="form-group">
						<label>Serveur associé</label>
						<select class="form-control" name="idServ">
							<option>Faites votre choix</option>
							<?php
								require_once '../Model/serveurdao.php';
								$result = listserveur();
								while($tab = mysqli_fetch_row($result))
								{
									echo "<option value='$tab[0]'>$tab[1]</option>";
								}
								
							?>
						</select>
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