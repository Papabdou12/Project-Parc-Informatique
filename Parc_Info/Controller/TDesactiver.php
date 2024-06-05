<?php
	require_once '../Model/servicesdao.php';
	if (isset($_GET['idS'])) 
	{
		$idS = $_GET['idS'];
		$result = disableetat($idS);
		if ($result) 
		{
			header("location:../Views/LServices.php");
		}
	}
?>