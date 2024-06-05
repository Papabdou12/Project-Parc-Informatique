<?php
	require_once 'db_connect.php';
	function insertserveur($nomServ,$adripServ)
	{
		$sql = "INSERT INTO serveur VALUES('','$nomServ','$adripServ')";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function listserveur()
	{
		$sql = "SELECT * FROM serveur";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function deleteserveur($idServ)
	{
		$sql = "DELETE FROM serveur WHERE idServ=$idServ";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function updateserveur($idServ,$nomServ,$adripServ)
	{
		$sql = "UPDATE serveur SET nomServ='$nomServ', adripServ='$adripServ' WHERE idServ=$idServ";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}	

	function getserveurbyid($idServ)
	{
		$sql = "SELECT * FROM serveur WHERE idServ=$idServ";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
?>