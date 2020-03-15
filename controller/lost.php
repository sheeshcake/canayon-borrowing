<?php

	include "connect.php";
	$sql = "UPDATE reserved SET status='lost' WHERE reserved.reservation_id = " . $_GET['item_id'];
	$result = mysqli_query($conn,$sql);
	header('Location: ' . $_SERVER['HTTP_REFERER']);