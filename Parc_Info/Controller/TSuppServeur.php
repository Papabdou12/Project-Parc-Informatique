<?php
	require_once '../Model/serveurdao.php';
	if (isset($_GET['idServ'])) 
	{
		$idServ = $_GET['idServ'];
		$result = deleteserveur($idServ);
		if ($result) 
		{
			header("location:../Views/LServeur.php");
		}
	}
?>