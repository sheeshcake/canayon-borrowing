<?php

	include 'connect.php';
	if(isset($_GET['submit'])){
		if($_GET['submit'] == 'update'){
			$unit_name = $_GET['unit_name'];
			$unit_count = $_GET['unit_count'];
			$unit_brand = $_GET['unit_brand'];
	
			$sql = "UPDATE equipment SET unit_count=$unit_count,unit_name='$unit_name',unit_brand='$unit_brand',unit_price='$unit_price' WHERE equipment.unit_id = " . $_GET['unit_id'];
			$result = mysqli_query($conn,$sql);
			$_SESSION['message'] = "UPDATED SUCCESSFULLY!!";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		if($_GET['submit'] == 'delete'){
			$sql = "DELETE FROM equipment WHERE unit_id=". $_GET['unit_id'];
			$result = mysqli_query($conn,$sql);
			$_SESSION['message'] = "DELETED SUCCESSFULLY!!";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		if($_GET['submit'] == 'add'){
			$unit_name = $_GET['unit_name'];
			$unit_brand = $_GET['unit_brand'];
			$unit_count = $_GET['unit_count'];
			$sql = "INSERT INTO equipment(unit_name,unit_brand,unit_count,unit_price) VALUES('$unit_name','$unit_brand','$unit_count')";
			$result = mysqli_query($conn,$sql);
			$_SESSION['message'] = "DELETED SUCCESSFULLY!!";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}