<?php
	require_once '../Model/serveurdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$idServ = $_POST['idServ'];
		$nomServ = $_POST['nomServ'];
		$adripServ = $_POST['adripServ'];
		$result = updateserveur($idServ,$nomServ,$adripServ);
		if ($result) 
		{
			header('location:../Views/LServeur.php');
		}

	}
?>