<?php
	
	if(isset($_GET['equipment_id-lost'])){
		$id = $_GET['equipment_id-lost'];
	}
	else{
		$id = $_GET['equipment_id-return'];
	}
	include "connect.php";
	$sql = "UPDATE reserved SET status='returned' WHERE reserved.reservation_id = $id";
	$result = mysqli_query($conn, $sql);
	$sql = "SELECT * FROM equipment WHERE unit_id=" . $_GET['unit_id'] ;
	$result = mysqli_query($conn, $sql);
	$row_data = mysqli_fetch_array($result , MYSQLI_ASSOC);
	$count = (int)$row_data['unit_count'];
	$returned_count =  (int)$count + 1;
	$sql = "UPDATE equipment SET unit_count = " . $returned_count . " WHERE equipment.unit_id=" . $row_data['unit_id'];
	$result = mysqli_query($conn, $sql);
	header('Location: ' . $_SERVER['HTTP_REFERER']);