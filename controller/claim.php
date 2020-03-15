<?php
	include "connect.php";

	// echo $_GET['id'];
	$sql = "SELECT * FROM reserved WHERE reservation_id = " . $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if($row['status'] == 'claimed'){
		$sql = "UPDATE reserved SET status='pending' WHERE reserved.reservation_id = " . $_GET['id'];
		$result = mysqli_query($conn, $sql);
	}else if($row['status'] == 'reserved'){
		$sql = "UPDATE reserved SET status='claimed' WHERE reserved.reservation_id = " . $_GET['id'];
		$result = mysqli_query($conn, $sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	if($result){
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}