<?php
	require_once '../Model/servicesdao.php';
	if (isset($_POST['envoyer'])) 
	{
		$nomS = $_POST['nomS'];
		$portS = $_POST['portS'];
		$idServ = $_POST['idServ'];
		$result = insertservices($nomS,$portS,$idServ);
		if ($result) 
		{
			header('location:../Views/LServices.php');
		}

	}
?>