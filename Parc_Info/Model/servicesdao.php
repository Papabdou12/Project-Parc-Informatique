<?php
	require_once 'db_connect.php';
	function insertservices($nomS,$portS,$idServ)
	{
		$sql = "INSERT INTO services VALUES('','$nomS','$portS',0,$idServ)";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function listservices()
	{
		$sql = "SELECT * FROM services";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function enableetat($idS)
	{
		$sql = "UPDATE services SET etatS=1 WHERE idS=$idS";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}

	function disableetat($idS)
	{
		$sql = "UPDATE services SET etatS=0 WHERE idS=$idS";
		$connect = getConnection();
		$result = mysqli_query($connect, $sql);
		return $result; 
	}
?>