<?php
	require_once '../Model/servicesdao.php';
	if (isset($_GET['idS'])) 
	{
		$idS = $_GET['idS'];
		$result = enableetat($idS);
		if ($result) 
		{
			header("location:../Views/LServices.php");
		}
	}
?>