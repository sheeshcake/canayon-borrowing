<?php

	include "connect.php";

	//echo $_GET['reserve_id'];
	session_start();
	
	$sql = "INSERT INTO reserved(student_id, equipment_id, status) VALUES('" . $_SESSION['row']['id_number'] . "'," . $_GET['reserve_id'] . ", 'reserved')";
	$result = mysqli_query($conn,$sql);
	$sql = "SELECT unit_count FROM equipment WHERE unit_id =" . $_GET['reserve_id'];
	$result1 = mysqli_query($conn,$sql);
	$units = mysqli_fetch_array($result1);
	// var_dump($units);
	// echo $units['unit_count'];
	$unit_count = (int)$units['unit_count'] - 1;
	$sql = "UPDATE equipment SET unit_count=" . $unit_count . " WHERE equipment.unit_id = " . $_GET['reserve_id'];
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "<script>alert('success!!')</script>";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
?>