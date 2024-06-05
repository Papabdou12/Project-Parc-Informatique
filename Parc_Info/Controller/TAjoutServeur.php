<?php
	require_once '../Model/serveurdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$nomServ = $_POST['nomServ'];
		$adripServ = $_POST['adripServ'];
		$result = insertserveur($nomServ,$adripServ);
		if ($result) 
		{
			header('location:../Views/LServeur.php');
		}

	}
?>